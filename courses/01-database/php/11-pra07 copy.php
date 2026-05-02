<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表陣列 - 努比的全端筆記</title>
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
            <h2 class="note-title">九九乘法表：陣列產生與輸出</h2>
            <p class="hero-desc">實作資料預處理邏輯，將運算結果封裝於陣列中以便後續調用。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">利用程式產生陣列</h3>
            <div class="ques-section">
                <ul class="custom-list">
                    <li>以迴圈的方式產生一個九九乘法表</li>
                    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                    <li>再以迴圈方式將陣列內容印出</li>
                </ul>
            </div>

            <!-- 1. 程式碼練習 -->
            <pre><code><?php
$code = <<<'EOD'
$nine = [];

// 1. 產生資料並存入陣列
for ($i = 1; $i <= 9; $i++) {
    foreach (range(1, 9) as $j) {
        $nine[] = "$i * $j = " . ($i * $j);
    }
}

// 2. 輸出陣列內容
echo "<table>";
for ($i = 0; $i < 9; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 9; $j++) {
        // 計算對應的一維陣列索引
        echo "<td>" . $nine[$i * 9 + $j] . "</td>";
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
                $nine = [];
                for ($i = 1; $i <= 9; $i++) {
                    for ($j = 1; $j <= 9; $j++) {
                        $nine[] = "$i * $j = " . ($i * $j);
                    }
                }

                echo "<table>";
                for ($i = 0; $i < 9; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 9; $j++) {
                        echo "<td>" . $nine[$i * 9 + $j] . "</td>";
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
                    <li><strong>資料預處理：</strong>先將計算結果存入陣列（Data），再處理視覺呈現（View）。</li>
                    <li><strong>一維與二維轉換：</strong>練習如何透過 `$i * 總寬度 + $j` 的公式定位一維陣列中的二維坐標。</li>
                    <li><strong>字串拼接：</strong>利用點運算子 `.` 結合運算結果與展示字串。</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>