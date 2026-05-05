<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>小小兵會員中心 - 努比的全端筆記</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --mn-yellow: #f3da60;      /* 小小兵亮黃色 */
            --mn-blue: #4277eb;        /* 經典吊帶褲藍 */
            --mn-black: #333333;       /* 護目鏡黑帶 */
            --mn-gray: #9ca3af;        /* 護目鏡金屬框 */
            --mn-white: #ffffff;
            --radius-mn: 25px;
        }

        body {
            background-color: #fefce8;
            font-family: 'Noto Sans TC', sans-serif;
            margin: 0;
        }

        /* 導航欄：吊帶褲藍 */
        header {
            background-color: var(--mn-blue);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            border-bottom: 8px solid var(--mn-yellow);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 1.4rem;
            font-weight: 900;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout-btn {
            background: var(--mn-yellow);
            color: var(--mn-black);
            text-decoration: none;
            padding: 8px 25px;
            border-radius: 50px;
            font-weight: 900;
            border: 3px solid var(--mn-black);
        }

        /* 主容器 */
        .main-container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        /* 歡迎區 */
/* 1. 父層容器必須設定 relative */
.welcome-section {
    position: relative; /* 這讓內部的 absolute 圖片能以它為基準 */
    background-color: var(--mn-yellow);
    border: 5px solid var(--mn-black);
    border-radius: var(--radius-mn);
    padding: 40px;
    text-align: center;
    overflow: visible; /* CRITICAL: 必須是 visible 圖片才能超出邊框 */
}

/* 2. 針對圖片進行定位 */
.welcome-emoji img {
    position: absolute;
    top: -60px;       /* 向上移動，數值負越多圖片冒出來越多 */
    left: 25%;        /* 水平置中第一步 */
    transform: translateX(-50%); /* 水平置中第二步 */
    width: 30%;     /* 調整成適合的大小 */
    z-index: 10;      /* 確保它在邊框上方 */
    filter: drop-shadow(5px 5px 0px rgba(0,0,0,0.1)); /* 增加一點立體感 */
}

        .decorative-line {
            height: 10px;
            background: repeating-linear-gradient(45deg, var(--mn-blue), var(--mn-blue) 10px, var(--mn-yellow) 10px, var(--mn-yellow) 20px);
            margin: 40px 0;
            border-radius: 50px;
        }

        /* 網格系統 */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: var(--radius-mn);
            border: 4px solid var(--mn-blue);
            padding: 25px;
            transition: transform 0.2s;
            box-shadow: 8px 8px 0px var(--mn-blue);
        }

        .card:hover {
            transform: rotate(1deg) scale(1.02);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: var(--mn-blue);
        }

        .card-title {
            font-weight: 900;
            font-size: 1.2rem;
        }

        .info-item {
            background: #eff6ff;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .info-label { font-weight: 700; color: var(--mn-blue); }
        .info-value { font-weight: 900; }

        .card-link {
            display: block;
            text-align: center;
            background: var(--mn-yellow);
            color: var(--mn-black);
            text-decoration: none;
            padding: 12px;
            border-radius: 15px;
            border: 3px solid var(--mn-black);
            font-weight: 900;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            padding: 40px;
            font-weight: 900;
            color: var(--mn-blue);
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">🍌 MINION CENTER</div>
        <a href="h08-loginSession.php" class="logout-btn">POOPAYE! (登出)</a>
    </header>

    <div class="main-container">
        <div class="welcome-section">
            <div class="welcome-emoji"><img src="./images/h08-1.png" alt=""></div>
            <h2>Bello! <?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '小小兵'; ?></h2>
            <p>香蕉準備好了，今天也要開心地搗蛋喔！</p>
        </div>

        <div class="decorative-line"></div>

        <div class="content-grid">
            <!-- 用戶卡片 -->
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-id-badge fa-2x"></i>
                    <div class="card-title">小小兵資訊</div>
                </div>
                <div class="info-item">
                    <span class="info-label">代號</span>
                    <span class="info-value"><?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'N/A'; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">香蕉等級</span>
                    <span class="info-value">🍌 專業搗蛋家</span>
                </div>
            </div>

            <!-- 任務卡片 -->
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-rocket fa-2x"></i>
                    <div class="card-title">今日任務</div>
                </div>
                <div class="card-content">
                    今天的任務是：找到三個香蕉並成功捉弄格魯。
                </div>
                <a href="#" class="card-link">領取任務</a>
            </div>

            <!-- 收藏卡片 -->
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-star fa-2x"></i>
                    <div class="card-title">香蕉收藏</div>
                </div>
                <div class="card-content">
                    查看你儲存在實驗室裡的秘密收藏品與香蕉貼紙。
                </div>
                <a href="#" class="card-link">查看收藏</a>
            </div>
        </div>
    </div>

    <footer>
        <p>BANANA! © 2026 小小兵中心 · 搗蛋無罪 🍌</p>
    </footer>

</body>
</html>