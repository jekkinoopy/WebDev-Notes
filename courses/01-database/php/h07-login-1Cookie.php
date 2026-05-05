<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>訓練家中心 - 努比的全端筆記</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --pk-red: #f17171;         /* 經典紅 */
            --pk-blue: #6890e6;        /* 標題藍 */
            --pk-yellow: #ffeb6c;      /* 閃電黃 */
            --pk-white: #ffffff;
            --pk-black: #333333;
            --pk-gray: #f0f0f0;
            --pk-screen: #91a1a1;      /* 圖鑑螢幕灰藍色 */
            --radius-pk: 15px;
        }

        body {
            background-color: var(--pk-gray);
            font-family: 'Noto Sans TC', sans-serif;
            margin: 0;
            color: var(--pk-black);
        }

        /* 頂部導航：精靈球配色 */
        header {
            background-color: var(--pk-red);
            border-bottom: 6px solid var(--pk-black);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 900;
            font-size: 1.2rem;
            text-shadow: 2px 2px 0px var(--pk-black);
        }

        .logo-icon {
            background: white;
            color: var(--pk-red);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid var(--pk-black);
            font-size: 1rem;
        }

        .logout-btn {
            background-color: var(--pk-black);
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            border: 2px solid white;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background-color: var(--pk-yellow);
            color: var(--pk-black);
            border-color: var(--pk-black);
        }

        /* 主容器 */
        .main-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* 歡迎區：圖鑑螢幕風格 */
        .welcome-section {
            background-color: var(--pk-screen);
            border: 6px solid var(--pk-black);
            border-radius: var(--radius-pk);
            padding: 30px;
            text-align: center;
            color: var(--pk-black);
            box-shadow: inset 0 0 20px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }

        .welcome-emoji {
            font-size: 4rem;
            margin-bottom: 10px;
            filter: drop-shadow(3px 3px 0px rgba(0,0,0,0.1));
        }

        .welcome-section h2 {
            margin: 0;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .welcome-section p {
            font-weight: 800;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .decorative-line {
            height: 8px;
            background-color: var(--pk-black);
            margin: 40px 0;
            border-radius: 50px;
            position: relative;
        }

        .decorative-line::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30px;
            height: 30px;
            background: white;
            border: 5px solid var(--pk-black);
            border-radius: 50%;
        }

        /* 功能卡片網格 */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .card {
            background: var(--pk-white);
            border: 4px solid var(--pk-black);
            border-radius: var(--radius-pk);
            padding: 25px;
            transition: 0.2s;
            display: flex;
            flex-direction: column;
            box-shadow: 5px 5px 0px var(--pk-black);
        }

        .card:hover {
            transform: translate(-3px, -3px);
            box-shadow: 8px 8px 0px var(--pk-blue);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            border-bottom: 3px solid var(--pk-gray);
            padding-bottom: 10px;
        }

        .card-icon {
            font-size: 1.8rem;
            color: var(--pk-blue);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 900;
            color: var(--pk-black);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed var(--pk-gray);
        }

        .info-label {
            font-weight: 700;
            color: #777;
        }

        .info-value {
            font-weight: 800;
            color: var(--pk-blue);
        }

        .card-content {
            flex: 1;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card-link {
            text-align: center;
            background-color: var(--pk-yellow);
            color: var(--pk-black);
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            border: 3px solid var(--pk-black);
            font-weight: 900;
            transition: 0.1s;
        }

        .card-link:hover {
            background-color: var(--pk-white);
        }

        /* 底部 */
        footer {
            background-color: var(--pk-black);
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }

        footer p {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <!-- 頭部 -->
    <header>
        <div class="logo">
            <div class="logo-icon">🔴</div>
            <span>TRAINER CENTER</span>
        </div>
        <form method="GET" style="margin: 0;">
            <a href='07-login-get.php' class="logout-btn">結束冒險</a>
        </form>
    </header>

    <!-- 主內容 -->
    <div class="main-container">
        <!-- 歡迎區 -->
        <div class="welcome-section">
            <div class="welcome-emoji">⚡</div>
            <h2>WELCOME BACK, TRAINER!</h2>
            <p>
                <?php
                $username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '探險者';
                echo $username;
                ?>
            </p>
            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">準備好今天的對戰了嗎？ ⚔️</p>
        </div>

        <div class="decorative-line"></div>

        <!-- 內容區域 -->
        <div class="content-grid">
            <!-- 用戶信息卡片 -->
            <div class="card user-info-card">
                <div class="card-header">
                    <div class="card-icon">🪪</div>
                    <div class="card-title">訓練家資訊</div>
                </div>
                <div class="info-item">
                    <div class="info-label">ID / 帳號</div>
                    <div class="info-value">
                        <?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'UNKNOWN'; ?>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-label">訓練家等級</div>
                    <div class="info-value">🏆 精英訓練家</div>
                </div>
                <div class="info-item">
                    <div class="info-label">冒險開始日期</div>
                    <div class="info-value">2026.05.01</div>
                </div>
            </div>

            <!-- 功能卡片 1 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">📈</div>
                    <div class="card-title">我的成就</div>
                </div>
                <div class="card-content">
                    查看你的徽章收集進度、對戰勝率，以及在冒險中達成的各項里程碑。
                </div>
                <a href="#" class="card-link">查看圖鑑</a>
            </div>

            <!-- 功能卡片 2 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">⚙️</div>
                    <div class="card-title">系統設定</div>
                </div>
                <div class="card-content">
                    調整你的傳送裝置設置、更改密碼，或更新你的個人訓練家頭像。
                </div>
                <a href="#" class="card-link">進入設定</a>
            </div>

            <!-- 功能卡片 3 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">💰</div>
                    <div class="card-title">聯盟積分</div>
                </div>
                <div class="card-content">
                    你在對戰中獲得的積分，可以在聯盟商店兌換大師球或各類藥劑。
                </div>
                <a href="#" class="card-link">前往商店</a>
            </div>

            <!-- 功能卡片 4 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">📩</div>
                    <div class="card-title">聯盟訊息</div>
                </div>
                <div class="card-content">
                    來自寶可夢中心或聯盟官方的重要通知，別錯過任何限時活動！
                </div>
                <a href="#" class="card-link">讀取郵件</a>
            </div>

            <!-- 功能卡片 5 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">⭐</div>
                    <div class="card-title">重要收藏</div>
                </div>
                <div class="card-content">
                    管理你標記為最愛的寶可夢數據，或是你特別珍藏的冒險筆記。
                </div>
                <a href="#" class="card-link">查看收藏</a>
            </div>

            <!-- 功能卡片 6 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">🆘</div>
                    <div class="card-title">中心服務</div>
                </div>
                <div class="card-content">
                    冒險中遇到困難了嗎？寶可夢中心專員將隨時為你提供支援服務。
                </div>
                <a href="#" class="card-link">連線客服</a>
            </div>
        </div>
    </div>

    <!-- 底部 -->
    <footer>
        <p>© 2026 POKÉMON TRAINER CENTER · GO FOR IT! ⚡</p>
    </footer>
</body>
</html>