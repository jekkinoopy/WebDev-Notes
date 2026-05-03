<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>瑪利歐金幣牆 - 努比的全端筆記</title>
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
            <span class="category-tag">程式基礎概念</span>
            <h2 class="note-title">瑪利歐金幣牆</h2>
            <p class="hero-desc">使用 PHP 巢狀迴圈建構幾何圖形與金幣陣列應用。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 練習 1：直角三角形 (已完成保留) -->
        <div class="note-card">
            <h3 class="note-subtitle">直角三角形</h3>
            <div class="ques-section">
                控制內層迴圈邊界，使其隨外層行數遞增。
            </div>
            <pre><code><?php
$code = <<<'EOD'
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<img src='images/09-1.png' style='width:30px'>";
    }
    echo "<br>";
}
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span><br>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "<img src='images/09-1.png' style='width:30px'>";
                    }
                    echo "<br>";
                }
                ?>
            </div>
        </div>

        <!-- 練習 2：正三角形 (已完成保留) -->
        <div class="note-card">
            <h3 class="note-subtitle">正三角形 (金字塔)</h3>
            <div class="ques-section">
                邏輯：先印空格，再印金幣。
            </div>
            <pre><code><?php
$code = <<<'EOD'
$totalRows = 5;
for ($i = 1; $i <= $totalRows; $i++) {
    for ($j = 1; $j <= ($totalRows - $i); $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "<img src='images/09-1.png' style='width:30px; vertical-align: middle;'>";
    }
    echo "<br>";
}
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span><br>
                <?php
                $totalRows = 5;
                for ($i = 1; $i <= $totalRows; $i++) {
                    for ($j = 1; $j <= ($totalRows - $i); $j++) {
                        echo "&nbsp;&nbsp;&nbsp;";
                    }
                    for ($k = 1; $k <= (2 * $i - 1); $k++) {
                        echo "<img src='images/09-1.png' style='width:30px; vertical-align: middle;'>";
                    }
                    echo "<br>";
                }
                ?>
            </div>
        </div>

        <!-- 練習 3：空心矩形 (已清空等待填寫) -->
        <div class="note-card">
            <h3 class="note-subtitle">空心矩形</h3>
            <div class="ques-section">
                <strong>挑戰需求：</strong>實作出只有邊框有金幣的 5x5 矩形。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此處實作迴圈與 if 判斷邊界邏輯

EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span><br>
                <?php // 預留位置 ?>
            </div>
        </div>

        <!-- 練習 4：內含對角線矩形 (已清空等待填寫) -->
        <div class="note-card">
            <h3 class="note-subtitle">對角線矩形</h3>
            <div class="ques-section">
                <strong>挑戰需求：</strong>除了矩形邊框，還要包含中間的「X」對角線。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此處實作對角線判斷邏輯 (提示：i 與 j 的關係)

EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span><br>
                <?php // 預留位置 ?>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title">學習重點</p>
                <ul class="custom-list">
                    <li>座標判定：思考矩形四條邊與對角線在座標 (i, j) 上的數學特徵。</li>
                    <li>巢狀結構：外層控制列，內層控制行。</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>