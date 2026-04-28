<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天干地支轉換 - 努比的全端筆記</title>
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
            <span class="category-tag">綜合練習</span>
            <h2 class="note-title">天干地支年別轉換</h2>
            <p class="hero-desc">以西元 1024 年為基準，利用程式邏輯推算六十甲子循環。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">天干地支轉換器</h3>
            <div class="custom-list">
                <p>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</p>
                <ul>
                    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
                    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
                    <li>配對方式：甲子、乙丑...六十年一循環</li>
                </ul>
            </div>
            <pre><code><?php
// 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
// 在此處實作迴圈計算邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <?php 
                    // 執行結果預留位置
                ?>
            </div>
        </div>
    </div>
</body>

</html>