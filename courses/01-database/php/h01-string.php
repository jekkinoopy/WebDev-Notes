<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理綜合練習 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">字串處理</span>
            <h2 class="note-title">字串處理與應用</h2>
            <p class="hero-desc">掌握 PHP 內建字串函式，實現資料的靈活轉換與呈現。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">1. 字串取代</h3>
            <ul class="custom-list">
                <li>將 ”aaddw1123” 改成 ”*********”</li>
            </ul>
            <pre><code><?php
// 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code1 = <<<'EOD'
// 在此實作取代邏輯
EOD;
echo htmlspecialchars($code1);
?></code></pre>
            <div class="code-section">
                </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">2. 字串分割</h3>
            <ul class="custom-list">
                <li>將 ”this,is,a,book” 依 ”,” 切割後成為陣列</li>
            </ul>
            <pre><code><?php
$code2 = <<<'EOD'
// 在此實作分割邏輯
EOD;
echo htmlspecialchars($code2);
?></code></pre>
            <div class="code-section">
                </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">3. 字串組合</h3>
            <ul class="custom-list">
                <li>將上例陣列重新組合成 “this is a book”</li>
            </ul>
            <pre><code><?php
$code3 = <<<'EOD'
// 在此實作組合邏輯
EOD;
echo htmlspecialchars($code3);
?></code></pre>
            <div class="code-section">
                </div>
        </div>
    </div>
</body>

</html>