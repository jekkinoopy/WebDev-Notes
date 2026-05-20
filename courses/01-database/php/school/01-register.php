<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>嫌疑犯名冊｜米花町偵探學園</title>
    <link rel="stylesheet" href="Conan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="conan-school">
    <header class="conan-topbar">
        <a class="conan-logo" href="index.html">米花町偵探學園</a>
        <nav class="conan-nav" aria-label="主選單">
            <a href="index.html">首頁</a>
            <a href="index.html#features">辦案機能</a>
            <a href="index.html#news">事件簿</a>
        </nav>
        <div class="conan-auth">
            <a href="../s03-login.php" class="conan-btn conan-btn-login">登入</a>
            <a href="01-register.php" class="conan-btn conan-btn-register" aria-current="page">註冊</a>
        </div>
    </header>

    <main class="conan-page-main">
        <a class="conan-back-link" href="index.html">← 返回偵辦室</a>
        <article class="conan-form-card">
            <p class="conan-form-label">會員註冊</p>
            <h1>嫌疑犯名冊</h1>
            <p class="conan-form-sub">請確實填寫身分，這將成為你完美的「不在場證明」。</p>
            <form action="02-api_register.php" method="post">
                <div class="conan-form-field">
                    <label for="account">帳號</label>
                    <input type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username">
                </div>
                <div class="conan-form-field">
                    <label for="password">密碼</label>
                    <input type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="new-password">
                </div>
                <div class="conan-form-field">
                    <label for="email">信箱</label>
                    <input type="email" id="email" name="email" placeholder="請輸入信箱" required autocomplete="email">
                </div>
                <div class="conan-form-field">
                    <label for="tel">電話</label>
                    <input type="tel" id="tel" name="tel" placeholder="請輸入電話" required autocomplete="tel">
                </div>
                <div class="conan-form-field">
                    <label for="birthday">生日</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="conan-form-actions">
                    <button type="submit">移送法辦</button>
                    <button type="reset">清空紀錄</button>
                </div>
            </form>
        </article>
    </main>

    <footer class="conan-site-footer conan-site-footer--compact">
        <p class="conan-copy">&copy; 2026 努比的全端筆記 · 米花町偵探學園</p>
        <p class="conan-footer-meta">
            <a href="index.html">回到首頁</a>
        </p>
    </footer>
</body>

</html>
