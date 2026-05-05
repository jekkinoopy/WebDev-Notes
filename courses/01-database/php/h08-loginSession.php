<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Bello! 訓練師登入 - 小小兵中心</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --mn-yellow: #f3da60;      /* 小小兵亮黃色 */
            --mn-blue: #4277eb;        /* 經典吊帶褲藍 */
            --mn-black: #333333;       /* 護目鏡黑帶 */
            --mn-gray: #9ca3af;        /* 護目鏡金屬框 */
            --mn-white: #ffffff;
        }

        body {
            background-color: var(--mn-yellow);
            background-image: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.2) 0%, transparent 20%);
            font-family: 'Noto Sans TC', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* 容器：護目鏡造型 */
        .container {
            background: var(--mn-white);
            width: 100%;
            max-width: 400px;
            border-radius: 50px; /* 大圓角增加可愛感 */
            box-shadow: 0 20px 0px rgba(0,0,0,0.1);
            overflow: hidden;
            border: 10px solid var(--mn-gray);
            position: relative;
        }

        /* 頂部裝飾：小小兵眼睛帶子 */
        .header {
            background-color: var(--mn-black);
            padding: 30px 20px;
            text-align: center;
            color: var(--mn-yellow);
            position: relative;
        }

        .header h1 {
            margin: 0;
            font-size: 1.6rem;
            letter-spacing: 2px;
            font-weight: 900;
        }

        .subtitle {
            margin-top: 5px;
            color: white;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* 表單內容 */
        form {
            padding: 40px 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: var(--mn-blue);
            font-weight: 900;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 3px solid var(--mn-blue);
            border-radius: 15px;
            background-color: #fefce8;
            font-size: 1rem;
            box-sizing: border-box;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
        }

        /* 登入按鈕：香蕉色 */
        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: var(--mn-yellow);
            color: var(--mn-black);
            border: 4px solid var(--mn-black);
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 900;
            cursor: pointer;
            transition: transform 0.1s;
        }

        .submit-btn:hover {
            transform: scale(1.05) rotate(-2deg);
            background-color: #facc15;
        }

        .footer-link {
            text-align: center;
            padding-bottom: 30px;
            color: var(--mn-blue);
            font-weight: 700;
        }

        .footer-link a {
            color: var(--mn-black);
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>BELLO! 登入</h1>
            <p class="subtitle">香蕉萬歲！一起去冒險吧 🍌</p>
        </div>

        <form action="h08-login-1Session.php" method="post">
            <div class="form-group">
                <label>帳號 (Minion ID)</label>
                <input type="text" name="username" placeholder="請輸入帳號" required>
            </div>

            <div class="form-group">
                <label>密碼 (Banana Password)</label>
                <input type="password" name="password" placeholder="請輸入密碼" required>
            </div>

            <button type="submit" class="submit-btn">POOPAYE! (登入)</button>
        </form>

        <div class="footer-link">
            還沒加入小小兵？ <a href="#">立即加入</a>
        </div>
    </div>

</body>
</html>