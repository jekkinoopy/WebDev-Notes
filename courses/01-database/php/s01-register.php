<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易註冊系統 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-php.css">
</head>

<body class="note-page-s01-register">
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">實戰</span>
            <h2 class="note-title">簡易註冊系統</h2>
            <p class="hero-desc">建立 members 資料表、註冊表單，並以 POST 將資料寫入資料庫。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">註冊表單與資料表</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>建立資料表存放使用者的帳號、密碼及個人資料。</li>
                    <li>建立網頁表單，讓使用者輸入帳號、密碼及個人資料。</li>
                    <li>送出表單後將資料存入資料表。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 1. CREATE TABLE members（id, account, password, tel, birthday, email）
// 2. 註冊表單 HTML（method="post" action="s02-api_register.php"）
// 3. s02-api_register.php：讀取 $_POST 並 INSERT
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
                <?php
                //第一部分：資料庫連線 
                    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
                    //$data sourse name 資料來源="使用的資料庫:提供服務的主機=本機;編碼=通用萬國碼;資料庫名=$";
                    $pdo = new PDO($dsn,'root','');
                    //核心變數 連線機器人 = 新執行 設計圖($dsn,'帳號','密碼'); 
                //第二部分：查詢資料 (Read)
                    $sql = " select * from  `dept`";
                    //資料庫(以指令內容生出來的)="選擇全部直欄 從 `資料表`
                    $depts = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                    //A -> B，去執行 A物件 的 B功能 或 抓取 A物件 的 B屬性
                    //$pdo->query($sql) ➔ 【發射並帶回成果包】
                    //拿取全部->fetchAll()
                    //PDO::FETCH_ASSOC 直接翻閱 PDO 總部字典裡的 FETCH_ASSOC 條目

                    echo "<pre>";
                    print_r($depts);
                    echo "</pre>";
                //第三部分：新增資料 (Create)
                
?>
                <section class="reg-demo-wrap" aria-label="註冊表單示範">
                    <header class="form-header">
                        <h4>會員註冊</h4>
                        <p>歡迎加入</p>
                    </header>
                    <form action="s02-api_register.php" method="post">
                        <div class="reg-form-group">
                            <label for="account">帳號 *</label>
                            <input type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username">
                        </div>
                        <div class="reg-form-group">
                            <label for="password">密碼 *</label>
                            <input type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="new-password">
                        </div>
                        <div class="reg-form-group">
                            <label for="email">電郵 *</label>
                            <input type="email" id="email" name="email" placeholder="請輸入電郵" required autocomplete="email">
                        </div>
                        <div class="reg-form-group">
                            <label for="tel">電話 *</label>
                            <input type="tel" id="tel" name="tel" placeholder="請輸入電話" required autocomplete="tel">
                        </div>
                        <div class="reg-form-group">
                            <label for="birthday">生日 *</label>
                            <input type="date" id="birthday" name="birthday" required>
                        </div>
                        <div class="reg-form-actions">
                            <button type="submit" class="reg-btn-submit">註冊</button>
                            <button type="reset" class="reg-btn-reset">清空</button>
                        </div>
                    </form>
                    <p class="reg-info-text">* 表示必填；送出目標為 <code>s02-api_register.php</code></p>
                </section>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>members 欄位：</strong><code>id</code>、<code>account</code>、<code>password</code>、<code>tel</code>、<code>birthday</code>、<code>email</code>。</li>
                    <li><strong>表單：</strong><code>method="post"</code>、<code>action</code> 指向接收程式。</li>
                    <li><strong>接收端：</strong>以 <code>$_POST['欄位名']</code> 讀取送出值，再寫入資料庫。</li>
                    <li><strong>版面：</strong>淺綠底、橘黃標題與按鈕、圓角輸入（見【執行結果】示範）。</li>
                </ul>
            </div>

        </div>
        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-04/" target="_blank" rel="noopener noreferrer">[PHP] Lesson 4 PHP + MySQL（含簡易註冊系統）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-PHP/blob/main/02-register.php" target="_blank" rel="noopener noreferrer">115 PHP 課程：對照原始碼（02-register.php）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-PHP/blob/main/api_register.php" target="_blank" rel="noopener noreferrer">115 PHP 課程：對照原始碼（api_register.php）</a>
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
        <div id="note-lesson-nav-root" data-lesson-id="s01-register"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
