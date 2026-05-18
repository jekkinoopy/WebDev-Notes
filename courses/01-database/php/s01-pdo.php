<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO 資料庫連線 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
</head>

<body class="note-page-s01-pdo">
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">實戰</span>
            <h2 class="note-title">PDO 資料庫連線</h2>
            <p class="hero-desc">以 PDO 連線 MySQL、查詢 <code>dept</code> 資料表，並預留新增資料（Create）段落。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">連線、查詢與輸出</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【學習段落】</strong>
                <ul class="custom-list">
                    <li><strong>第一部分：</strong>設定 <code>$dsn</code>，以 <code>new PDO()</code> 建立連線。</li>
                    <li><strong>第二部分：</strong>撰寫 <code>SELECT</code>，以 <code>query()</code>、<code>fetchAll(PDO::FETCH_ASSOC)</code> 讀取 <code>dept</code>。</li>
                    <li><strong>第三部分：</strong>新增資料（Create）— 待續實作。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
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
                    $sql_insert="insert into`dept`(`code`,`name`)
                                                values('601','中餐科')";
                    echo "<h2>新增資料</h2>";
                    echo $sql_insert;
                    echo "<hr>";
                    //$pdo->exec($sql_insert);重整就會新增一筆 所以關掉                    
                    //要從資料庫「撈資料、看畫面」 ➔ 用 query()
                    //要對資料庫「新增、修改、刪除」 ➔ 用 exec()
                //第四部分：更新資料 (Update)
                    echo "<h2>更新資料</h2>";

                    $sql_update="update `dept` 
                                 set `code`='602',`name`='西餐科'     
                                 where `id`='8'";
                    $pdo->exec($sql_update);
                    echo $sql_update;
                    echo "<hr>";
              
                //第五部分：刪除資料 (Delete)
                    $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                    echo "<pre>";
                    print_r($depts);
                    echo "</pre>";
                    echo "<h2>刪除資料</h2>";
                    $sql_delete= "delete from `dept` where `id`='2'";
                    $pdo->exec($sql_delete);
                    echo $sql_delete;
                    echo "<hr>";
                    $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                    echo "<pre>";
                    print_r($depts);
                    echo "</pre>";


                
?>          
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>$dsn：</strong>資料來源名稱，指定主機、編碼與資料庫名（範例為 <code>school</code>）。</li>
                    <li><strong>$pdo：</strong><code>new PDO($dsn, 帳號, 密碼)</code> 建立連線物件。</li>
                    <li><strong>查詢：</strong><code>$pdo->query($sql)</code> 執行 SQL；<code>fetchAll(PDO::FETCH_ASSOC)</code> 以關聯陣列取回全部列。</li>
                    <li><strong>輸出：</strong><code>print_r()</code> 搭配 <code>&lt;pre&gt;</code> 檢視查詢結果。</li>
                </ul>
            </div>

        </div>
        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-04/" target="_blank" rel="noopener noreferrer">[PHP] Lesson 4 PHP + MySQL</a>
                </li>
                <li>
                    <a href="../SQL/03-sql-syntax.html" target="_blank" rel="noopener noreferrer">本站：SQL 語法與 school 資料庫</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-SQL/blob/main/school.sql" target="_blank" rel="noopener noreferrer">115 SQL 課程：對照原始碼（school.sql）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="s01-pdo"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
