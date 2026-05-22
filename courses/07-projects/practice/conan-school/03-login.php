<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>身分對質登錄｜米花町偵探學園</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="Conan.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="conan-school">
  <header class="conan-topbar">
    <a class="conan-logo" href="index.html">米花町偵探學園</a>
    <nav class="conan-nav" aria-label="主選單">
      <a href="index.html#top">關於我們</a>
      <a href="index.html#features">辦案機能</a>
      <a href="index.html#news">事件簿</a>
      <a href="case-notes.html">辦案筆記</a>
      <a href="index.html#contact">聯絡方式</a>
    </nav>
    <div class="conan-auth">
      <a href="03-login.php" class="conan-btn conan-btn-login" aria-current="page">登入</a>
      <a href="01-register.html" class="conan-btn conan-btn-register">註冊</a>
    </div>
  </header>

  <main class="conan-page-main">
    <a class="conan-back-link" href="index.html"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> 返回偵辦室</a>
    <article class="conan-form-card">
      <p class="conan-form-label"><i class="fa-solid fa-user-check" aria-hidden="true"></i> 會員登入</p>
      <h1>身分對質登錄</h1>
      <p class="conan-form-sub">請出示帳號與密碼，接受偵辦室驗證。帳密不符者，恕不發放破案許可。</p>
      <form action="04-api_login.php" method="post">
        <div class="conan-form-field">
          <label for="account"><i class="fa-solid fa-user" aria-hidden="true"></i> 帳號</label>
          <input type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username" />
        </div>
        <div class="conan-form-field">
          <label for="password"><i class="fa-solid fa-lock" aria-hidden="true"></i> 密碼</label>
          <input type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="current-password" />
        </div>
        <div class="conan-form-actions">
          <button type="submit"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i> 強制偵訊</button>
        </div>
      </form>
      <p class="conan-form-foot">
        尚未登記嫌疑犯名冊？<a href="01-register.html">前往註冊</a>
      </p>
    </article>
  </main>

  <footer id="contact" class="conan-site-footer">
    <h2 class="conan-footer-title">米花町偵探學園</h2>
    <nav class="conan-footer-nav" aria-label="頁尾連結">
      <a href="01-register.html">註冊練習</a>
      <a href="case-notes.html">辦案筆記</a>
      <a href="../../../01-database/php/s02-register.php">註冊筆記</a>
      <a href="../../../01-database/php/s03-login.php">登入筆記</a>
      <a href="../../../01-database/php/index.html">PHP 課程索引</a>
    </nav>
    <ul class="conan-contact-list">
      <li>
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
        米花町 · 偵辦室練習專區（conan-school）
      </li>
      <li>
        <i class="fa-solid fa-server" aria-hidden="true"></i>
        資料庫：localhost / school
      </li>
      <li>
        <i class="fa-solid fa-file-export" aria-hidden="true"></i>
        移送 API：04-api_login.php
      </li>
    </ul>
    <div class="conan-footer-bottom">
      <p class="conan-copy">&copy; 2026 努比的全端筆記 · 真相只有一個</p>
      <p class="conan-footer-meta">
        <a href="../../../01-database/php/index.html">回到筆記首頁</a>
        <span aria-hidden="true">|</span>
        <a href="index.html#top">回到頂部</a>
      </p>
    </div>
  </footer>
</body>

</html>
