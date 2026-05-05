<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>訓練家登入 - 努比的全端筆記</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --pk-red: #f17171;         /* 經典紅 */
            --pk-blue: #6890e6;        /* 標題藍 */
            --pk-yellow: #ffeb6c;      /* 閃電黃 */
            --pk-white: #ffffff;
            --pk-black: #333333;
            --pk-gray: #f0f0f0;
            --radius-poke: 20px;
        }

        body {
            background-color: #e0e0e0;
            background-image: radial-gradient(var(--pk-gray) 20%, transparent 20%),
                              radial-gradient(var(--pk-gray) 20%, transparent 20%);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            font-family: 'Noto Sans TC', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* 容器：精靈球造型 */
        .container {
            background: var(--pk-white);
            width: 100%;
            max-width: 420px;
            border-radius: var(--radius-poke);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            border: 8px solid var(--pk-black);
            position: relative;
        }

        /* 頂部紅色區塊 */
        .header {
            background-color: var(--pk-red);
            padding: 40px 20px;
            text-align: center;
            color: white;
            border-bottom: 8px solid var(--pk-black);
            position: relative;
        }

        /* 精靈球中心按鈕裝飾 */
        .header::after {
            content: '';
            position: absolute;
            bottom: -24px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border: 8px solid var(--pk-black);
            border-radius: 50%;
            z-index: 10;
        }

        .header-icon {
            font-size: 3rem;
            margin-bottom: 10px;
            filter: drop-shadow(2px 2px 0px var(--pk-black));
        }

        .header h1 {
            margin: 0;
            font-size: 1.8rem;
            letter-spacing: 2px;
            text-shadow: 3px 3px 0px var(--pk-black);
        }

        .subtitle {
            margin-top: 10px;
            font-weight: 600;
            color: var(--pk-yellow);
            text-shadow: 1px 1px 0px var(--pk-black);
            font-size: 1rem;
        }

        /* 表單內容區 */
        form {
            padding: 50px 35px 30px 35px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: var(--pk-black);
            font-weight: 800;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 4px solid var(--pk-black);
            border-radius: 10px;
            background-color: var(--pk-gray);
            font-size: 1rem;
            box-sizing: border-box;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--pk-blue);
            background-color: white;
        }

        /* 登入按鈕：對戰感 */
        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: var(--pk-blue);
            color: white;
            border: 4px solid var(--pk-black);
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 900;
            cursor: pointer;
            box-shadow: 0 5px 0px var(--pk-black);
            transition: 0.1s;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #6a7af1;
        }

        .submit-btn:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0px var(--pk-black);
        }

        /* 分隔線 */
        .divider {
            display: flex;
            align-items: center;
            padding: 0 35px;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 4px;
            background-color: var(--pk-black);
        }

        .divider-text {
            padding: 0 15px;
            font-weight: 900;
            color: var(--pk-black);
        }

        .footer-link {
            text-align: center;
            padding-bottom: 30px;
            font-weight: 600;
            color: var(--pk-black);
        }

        .footer-link a {
            color: var(--pk-red);
            text-decoration: none;
            border-bottom: 2px solid transparent;
        }

        .footer-link a:hover {
            border-bottom-color: var(--pk-red);
        }
    </style>
</head>
<body>

    <!-- 登入表單容器 -->
    <div class="container">
        <div class="header">
            <!-- 🌿 這裡可以改成一顆精靈球的圖示 -->
            <div class="header-icon"><img src="./images/h07-1.png" width="100px"></div>
            <h1>歡迎登入(COOKIE)</h1>
            <p class="subtitle">開始你的冒險旅程</p>
        </div>

        <form action="h07-login-1Cookie.php" method="post">
            <div class="form-group">
                <label for="username">訓練家帳號</label>
                <input type="text" id="username" name="username" placeholder="請輸入帳號" required>
            </div>

            <div class="form-group">
                <label for="password">安全密碼</label>
                <input type="password" id="password" name="password" placeholder="請輸入密碼" required>
            </div>

            <button type="submit" class="submit-btn">進入對戰系統</button>
        </form>

        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">OR</span>
            <div class="divider-line"></div>
        </div>

        <div class="footer-link">
            新手訓練家？ <a href="#">領取新手禮包(註冊)</a>
        </div>
    </div>

</body>
</html>