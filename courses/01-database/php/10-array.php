<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列基礎 - 努比的全端筆記</title>
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
            <h2 class="note-title">陣列基礎</h2>
            <p class="hero-desc">學習如何將多筆零散數據整合，建立系統化的資料索引。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">學生的成績資料</h3>
            <div class="ques-section">
                設計一個陣列(一維或多維)來存放學生的成績資料並以表格呈現。
                <img src="images/10-1.png">
            </div>

            <!-- 1. 程式碼練習 -->
            <pre><code><?php
$code = <<<'EOD'
$students = [
    "judy"  => ["國文" => 95, "英文" => 64, "數學" => 70, "地理" => 90, "歷史" => 84],
    "amo"   => ["國文" => 88, "英文" => 78, "數學" => 54, "地理" => 81, "歷史" => 71],
    "john"  => ["國文" => 45, "英文" => 60, "數學" => 68, "地理" => 70, "歷史" => 62],
    "peter" => ["國文" => 59, "英文" => 32, "數學" => 77, "地理" => 54, "歷史" => 42],
    "hebe"  => ["國文" => 71, "英文" => 62, "數學" => 80, "地理" => 62, "歷史" => 64],
];

echo "<table>";
echo "<tr><td></td><td>國文</td><td>英文</td><td>數學</td><td>地理</td><td>歷史</td></tr>";
foreach ($students as $student => $scores) {
    echo "<tr><td>$student</td>";
    foreach ($scores as $score) {
        echo "<td>$score</td>";
    }
    echo "</tr>";
}
echo "</table>";
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <!-- 2. 執行結果 -->
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span>
                <?php
                $students = [
                    "judy" => ["國文" => 95, "英文" => 64, "數學" => 70, "地理" => 90, "歷史" => 84],
                    "amo" => ["國文" => 88, "英文" => 78, "數學" => 54, "地理" => 81, "歷史" => 71],
                    "john" => ["國文" => 45, "英文" => 60, "數學" => 68, "地理" => 70, "歷史" => 62],
                    "peter" => ["國文" => 59, "英文" => 32, "數學" => 77, "地理" => 54, "歷史" => 42],
                    "hebe" => ["國文" => 71, "英文" => 62, "數學" => 80, "地理" => 62, "歷史" => 64],
                ];

                echo "<table>";
                echo "<tr><td></td><td>國文</td><td>英文</td><td>數學</td><td>地理</td><td>歷史</td></tr>";
                foreach ($students as $student => $scores) {
                    echo "<tr><td>$student</td>";
                    foreach ($scores as $score) {
                        echo "<td>$score</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- 3. 學習重點 -->
            <div class="learning-point-box">
                <p class="learning-point-title">學習重點</p>
                <ul class="custom-list">
                    <li>使用關聯陣列 (Associative Array) 巢狀結構儲存複雜資料。</li>
                    <li>運用 foreach 雙層迴圈拆解多維陣列的鍵 (Key) 與值 (Value)。</li>
                    <li>在迴圈中動態產生 HTML Table 標籤以結構化呈現數據。</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>