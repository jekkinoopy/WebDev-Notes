<?php
$conanPage = 'home';
$pageTitle = '米花町偵探學園｜學生管理系統製作練習';
?>
<!doctype html>
<html lang="zh-TW">

<head>
  <?php require __DIR__ . '/include/conan-head.php'; ?>
</head>

<body class="conan-school">
  <?php require __DIR__ . '/include/conan-header.php'; ?>

  <main id="top">
    <section class="conan-hero" aria-labelledby="hero-title">
      <img class="conan-hero-bg" src="magnific_3012340186.jpeg" alt="" width="2544" height="1456" decoding="async" />
      <div class="conan-hero-inner">
        <p class="conan-hero-tag">Milky Way Detective</p>
        <h1 id="hero-title">漏洞，只有一個。</h1>
        <p class="conan-hero-lead">雖然在米花町上課總是充滿挑戰，但後端的防禦絕對不容質疑。以 PDO 連線 school 資料庫，展開嚴密的 CRUD 偵辦。</p>
        <a class="conan-cta" href="#features"><i class="fa-solid fa-folder-open" aria-hidden="true"></i> 調閱機密檔案</a>
      </div>
    </section>

    <section id="features" class="conan-section" aria-labelledby="features-title">
      <h2 id="features-title" class="conan-section-title">大腦的命案現場</h2>
      <p class="conan-section-desc">雖然是學生管理系統，但請確保學生還有存活。</p>
      <div class="conan-feature-grid">
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">頭腦撞牆</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-user-plus"></i></span>
          <span class="conan-feature-label">會員註冊</span>
          <h3>嫌疑犯名冊</h3>
          <p>請確實填寫身分，這將成為你完美的「不在場證明」。</p>
          <a href="01-register.php" class="conan-feature-link">建立表單 <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </article>
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">意識迷茫</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-gavel"></i></span>
          <span class="conan-feature-label">API 寫入</span>
          <h3>移送法辦／監獄資料庫</h3>
          <p>資料一送出，直接 INSERT 鎖進檔案室，絕對不留痕跡。</p>
          <a href="02-api_register.php" class="conan-feature-link">開啟 API <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </article>
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">智商火葬</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-plug"></i></span>
          <span class="conan-feature-label">PDO 連線</span>
          <h3>沉睡的小五郎</h3>
          <p>幕後默默運作的實力派。連線失敗？就射麻醉針重試。</p>
          <a href="../s01-pdo.html" class="conan-feature-link">複習 PDO <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </article>
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">批欸取批</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-user-check"></i></span>
          <span class="conan-feature-label">登入驗證</span>
          <h3>身分對質</h3>
          <p>比對 members 帳密，通過才准進入安全屋，否則退回現場。</p>
          <a href="../s03-login.php" class="conan-feature-link">登入練習 <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </article>
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">看到頭暈</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-folder-tree"></i></span>
          <span class="conan-feature-label">資料表</span>
          <h3>機密檔案櫃</h3>
          <p>
            members：<code>account</code>、<code>password</code>、<code>tel</code>、<code>birthday</code>、<code>email</code>。
          </p>
        </article>
        <article class="conan-feature-card">
          <div class="conan-badge badge-danger">老師救命</div>
          <span class="conan-feature-icon" aria-hidden="true"><i class="fa-solid fa-book"></i></span>
          <span class="conan-feature-label">對照筆記</span>
          <h3>辦案手冊</h3>
          <p>回到 PHP 課程索引，翻閱 s01～s03 卷宗。</p>
          <a href="../index.html" class="conan-feature-link">PHP 索引 <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </article>
      </div>
    </section>

    <section id="news" class="conan-section" aria-labelledby="news-title">
      <h2 id="news-title" class="conan-section-title">米花町最新事件簿</h2>
      <div class="conan-news-panel">
        <ul class="conan-news-list">
          <li>
            <span class="conan-news-icon" aria-hidden="true"><i class="fa-solid fa-bell"></i></span>
            <span class="conan-news-text">重大進度：01-register.php 嫌疑犯名冊（表單）已開放</span>
            <time class="conan-news-date" datetime="2026-05-19">2026-05-19</time>
          </li>
          <li>
            <span class="conan-news-icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
            <span class="conan-news-text">02-api_register.php 已可接收 POST，移送檔案室</span>
            <time class="conan-news-date" datetime="2026-05-19">2026-05-19</time>
          </li>
          <li>
            <span class="conan-news-icon" aria-hidden="true"><i class="fa-solid fa-database"></i></span>
            <span class="conan-news-text">提醒：請先匯入 school 資料庫與 members 資料表</span>
            <time class="conan-news-date" datetime="2026-05-18">2026-05-18</time>
          </li>
          <li>
            <span class="conan-news-icon" aria-hidden="true"><i class="fa-solid fa-user-secret"></i></span>
            <span class="conan-news-text">沉睡的小五郎：PDO 請對照 s01-pdo 筆記</span>
            <time class="conan-news-date" datetime="2026-05-18">2026-05-18</time>
          </li>
          <li>
            <span class="conan-news-icon" aria-hidden="true"><i class="fa-solid fa-star"></i></span>
            <span class="conan-news-text">身分對質練習：s03-login.php</span>
            <time class="conan-news-date" datetime="2026-05-17">2026-05-17</time>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/include/conan-footer.php'; ?>
</body>

</html>
