<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習五｜尋找字元（while）- 努比的全端筆記</title>
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
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">綜合練習五：尋找字元（while）</h2>
            <p class="hero-desc">在一句話中用 while 逐一比對指定單字或字母，並印出找到的內容在句子中的索引位置。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>尋找字元（while）</h3>
            
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                <ul class="custom-list">
                    <li><strong>尋找字元（使用 while）</strong>：以 while 為主體走完字串並比對目標。</li>
                    <li>給定一個<strong>字串句子</strong>。</li>
                    <li>再給定要搜尋的<strong>單字或單一字元</strong>。</li>
                    <li>在句子中<strong>找出所有相符部份</strong>（依你的實作可為連續片段或逐一字元，與講師要求一致）。</li>
                    <li>將<strong>找到時在句子中的「位置」（索引）</strong>印出來，便於對照結果。</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="08-pra05"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>