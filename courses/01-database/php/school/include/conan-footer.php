<?php
require_once __DIR__ . '/conan-config.php';
?>
<footer id="contact" class="conan-site-footer">
  <h2 class="conan-footer-title">米花町偵探學園</h2>
  <nav class="conan-footer-nav" aria-label="頁尾連結">
    <a href="01-register.php">註冊練習</a>
    <a href="../s02-register.php">註冊筆記</a>
    <a href="../s03-login.php">登入筆記</a>
    <a href="../index.html">PHP 課程索引</a>
  </nav>
  <ul class="conan-contact-list">
    <li>
      <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
      米花町 · 偵辦室練習專區（school）
    </li>
    <li>
      <i class="fa-solid fa-server" aria-hidden="true"></i>
      資料庫：localhost / school
    </li>
    <li>
      <i class="fa-solid fa-file-export" aria-hidden="true"></i>
      移送 API：02-api_register.php
    </li>
  </ul>
  <div class="conan-footer-bottom">
    <p class="conan-copy">&copy; 2026 努比的全端筆記 · 真相只有一個</p>
    <p class="conan-footer-meta">
      <a href="../index.html">回到筆記首頁</a>
      <span aria-hidden="true">|</span>
      <a href="<?php echo htmlspecialchars(conan_nav_href('#top'), ENT_QUOTES, 'UTF-8'); ?>">回到頂部</a>
    </p>
  </div>
</footer>
