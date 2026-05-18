<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易登入系統 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-php.css">
</head>

<body class="note-page-s02-login">
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">實戰</span>
            <h2 class="note-title">簡易登入系統</h2>
            <p class="hero-desc">以 members 資料表比對帳密；成功導向成功頁，失敗回到登入頁並顯示錯誤提示。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">登入表單與帳密比對</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>建立資料表存放使用者的帳號及密碼（可沿用註冊單元的 <code>members</code>）。</li>
                    <li>在網頁上輸入帳號、密碼後，向資料庫比對是否正確。</li>
                    <li>若正確則導向另一個頁面並顯示登入成功。</li>
                    <li>若錯誤則回到登入頁，並顯示「帳號或密碼錯誤，請重新輸入」的提示。</li>
                </ul>
            </div>

            <?php
$loginError = isset($_GET['error']);
$code = <<<'EOD'
// 【程式碼練習】
// 1. 登入表單（method="post" action="03-api_login.php"）
// 2. 03-api_login.php：PDO 查詢 members 比對 account、password
//    SELECT COUNT(*) ... 或 SELECT id ... LIMIT 1
// 3. 比對成功：header('Location: 04-login-success.php'); exit;
// 4. 比對失敗：header('Location: s02-login.php?error=1'); exit;
// 5. s02-login.php：若 $_GET['error'] 顯示錯誤訊息
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <section class="reg-demo-wrap" aria-label="登入表單示範">
                    <header class="form-header">
                        <h4>會員登入</h4>
                        <p>歡迎回來</p>
                    </header>
                    <?php if ($loginError) : ?>
                    <p class="reg-error-text" role="alert">帳號或密碼錯誤，請重新輸入</p>
                    <?php endif; ?>
                    <form action="03-api_login.php" method="post">
                        <div class="reg-form-group">
                            <label for="account">帳號 *</label>
                            <input type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username">
                        </div>
                        <div class="reg-form-group">
                            <label for="password">密碼 *</label>
                            <input type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="current-password">
                        </div>
                        <div class="reg-form-actions">
                            <button type="submit" class="reg-btn-submit">登入</button>
                            <button type="reset" class="reg-btn-reset">清空</button>
                        </div>
                    </form>
                    <p class="reg-info-text">* 表示必填；送出目標為 <code>03-api_login.php</code></p>
                </section>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>資料表：</strong>沿用 <code>members</code> 的 <code>account</code>、<code>password</code> 欄位（見 <a href="s01-register.php">簡易註冊系統</a>）。</li>
                    <li><strong>比對：</strong>以 SQL <code>WHERE account = ? AND password = ?</code> 查詢；<code>COUNT(*)</code> 為 1 代表登入成功。</li>
                    <li><strong>導向：</strong>成功用 <code>header('Location: 04-login-success.php')</code>；失敗導回 <code>s02-login.php?error=1</code>。</li>
                    <li><strong>錯誤提示：</strong>登入頁以 <code>isset($_GET['error'])</code> 決定是否顯示錯誤文字。</li>
                </ul>
            </div>

        </div>
        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-04/" target="_blank" rel="noopener noreferrer">[PHP] Lesson 4 PHP + MySQL（含簡易登入系統）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-PHP/blob/main/03-login.php" target="_blank" rel="noopener noreferrer">115 PHP 課程：對照原始碼（03-login.php）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-PHP/blob/main/api_login.php" target="_blank" rel="noopener noreferrer">115 PHP 課程：對照原始碼（api_login.php）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-PHP/blob/main/members.sql" target="_blank" rel="noopener noreferrer">115 PHP 課程：對照原始碼（members.sql）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="s02-login"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
