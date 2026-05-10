<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁版萬年曆 - 努比的全端筆記</title>
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
            <span class="category-tag">網頁傳值練習</span>
            <h2 class="note-title">網頁版萬年曆</h2>
            <p class="hero-desc">利用 URL 傳值實現月份切換功能，並強化視覺樣式判斷。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">萬年曆製作</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                1. 設計一個網頁版萬年曆，只需顯示西元年月日，並以月為單位顯示日期。<br>
                2. 有上一個月，下一個月的連結來切換月份。<br>
                3. 可以不同的顏色或樣式來強調當日或週末。
            </div>

            <pre><code><?php
$code = <<<'EOD'
// 在此處實作萬年曆切換與樣式顯示邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 執行結果預留位置 ?>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>在此紀錄關鍵函式或邏輯思維</li>
                    <li>標記需要特別注意的語法細節</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>