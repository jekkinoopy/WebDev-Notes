<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>會員註冊</title>
    <link rel="stylesheet" href="doraemon-style.css">
</head>
<body>
    <div class="container">
        <h2>會員註冊</h2>
        <form action="02-api_register.php" method="post">
            <p>
                <label for="account">帳號：</label>
                <input type="text" id="account" name="account" placeholder="請輸入帳號" required>
            </p>
            <p>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password" placeholder="請輸入密碼" required>
            </p>
            <p>
                <label for="email">信箱：</label>
                <input type="email" id="email" name="email" placeholder="請輸入信箱" required>
            </p>
            <p>
                <label for="tel">電話：</label>
                <input type="tel" id="tel" name="tel" placeholder="請輸入電話" required>
            </p>
            <p>
                <label for="birthday">生日：</label>
                <input type="date" id="birthday" name="birthday" required>
            </p>
            <div class="button-group">
                <button type="submit">註冊</button>
                <button type="reset">清空</button>
            </div>
        </form>
    </div>
</body>
</html>