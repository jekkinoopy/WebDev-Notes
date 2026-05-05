<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心 - 努比的全端筆記</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    
    <style>
        body {
            margin: 0;
            padding: var(--spacing-xl);
            display: flex;
            justify-content: center;
        }

        .member-container {
            width: 100%;
            max-width: 800px;
        }

        /* 會員資訊卡片 */
        .profile-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            border: 1px solid var(--border-light);
            display: flex;
            flex-wrap: wrap;
        }

        .profile-sidebar {
            background: var(--gradient-primary);
            width: 250px;
            padding: var(--spacing-2xl);
            color: var(--white);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            border: 3px solid var(--white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            margin-bottom: var(--spacing-md);
        }

        .profile-main {
            flex: 1;
            padding: var(--spacing-2xl);
        }

        .welcome-msg {
            color: var(--text-primary);
            font-size: 1.5rem;
            margin-bottom: var(--spacing-lg);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--spacing-lg);
            margin-top: var(--spacing-xl);
        }

        .info-item {
            background: var(--gray-50);
            padding: var(--spacing-md);
            border-radius: var(--radius-md);
            border: 1px solid var(--border-light);
        }

        .info-item label {
            display: block;
            font-size: 0.8rem;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .info-item span {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .logout-btn {
            margin-top: var(--spacing-2xl);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition-base);
        }

        .logout-btn:hover {
            opacity: 0.8;
        }

        /* 手機版適應 */
        @media (max-width: 600px) {
            .profile-sidebar { width: 100%; }
        }
    </style>
</head>
<body>

    <?php
        // --- 努比的任務區：在此實作 PHP 登入判斷邏輯 ---
        // 1. 接收 login.php 傳來的 $_POST['account'] 與 $_POST['password']
        // 2. 進行帳密比對
        // 3. 將結果存入變數，渲染到下方 HTML 中
        
        $user_account = "訪客模式"; // 預留顯示變數
        $login_time = date("Y-m-d H:i:s"); 
    ?>

    <div class="member-container">
        <div class="profile-card">
            <!-- 左側側欄 -->
            <div class="profile-sidebar">
                <div class="profile-avatar">
                    <i class="fa-solid fa-user-ninja"></i>
                </div>
                <h3>努比會員</h3>
                <p style="font-size: 0.8rem; opacity: 0.8;">認證開發者</p>
            </div>

            <!-- 右側內容區 -->
            <div class="profile-main">
                <div class="welcome-msg">
                    <i class="fa-solid fa-circle-check" style="color: var(--success);"></i>
                    登入驗證成功！
                </div>
                
                <p style="color: var(--text-secondary);">歡迎回到您的個人儀表板，以下是本次登入的檢查數據：</p>

                <div class="info-grid">
                    <div class="info-item">
                        <label>登入帳號</label>
                        <span><?= $user_account; ?></span>
                    </div>
                    <div class="info-item">
                        <label>登入時間</label>
                        <span><?= $login_time; ?></span>
                    </div>
                    <div class="info-item">
                        <label>系統狀態</label>
                        <span style="color: var(--success);">運作正常</span>
                    </div>
                </div>

                <a href="h05-login.php" class="logout-btn">
                    <i class="fa-solid fa-right-from-bracket"></i> 安全登出系統
                </a>
            </div>
        </div>
    </div>

</body>
</html>