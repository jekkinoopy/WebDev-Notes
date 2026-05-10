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
        <!-- 練習一：產生與偵錯 -->
        <div class="note-card">
            <h3 class="note-subtitle">利用程式產生陣列</h3>
            <div class="ques-section">
                <ul class="custom-list">
                    <li>以迴圈的方式產生一個九九乘法表</li>
                    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                    <li>使用偵錯工具觀察資料結構</li>
                </ul>
            </div>

            <pre><code><?php
$code = <<<'EOD'
// 建立空陣列
$nine = [];

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        // 使用花括號變數解析
        $nine[] = "{$i}x{$j}=" . ($i * $j);
    }
}

// 使用 pre 標籤配合 print_r 觀察陣列結構
echo "<pre>";
print_r($nine);
echo "</pre>";
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php
                $nine = [];
                for ($i = 1; $i <= 9; $i++) {
                    for ($j = 1; $j <= 9; $j++) {
                        $nine[] = "{$i}x{$j}=" . ($i * $j);
                    }
                }
                echo "<pre style='background: transparent; color: inherit; overflow: auto; max-height: 400px; padding: 10px; border: 1px solid #ddd;'>";
                print_r($nine);
                echo "</pre>";
                ?>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>變數解析：</strong>`{$i}` 可以讓變數在字串中清晰定位，避免與後續字元混淆。</li>
                    <li><strong>記憶體共享：</strong>在同一個 PHP 檔案中，不論開多少次標籤，變數記憶體都是共享的。</li>
                    <li><strong>陣列封裝：</strong>將運算結果存入陣列，是實現「資料與顯示分離」的第一步。</li>
                </ul>
            </div>
        </div>

        <!-- 練習二：表格呈現 -->
        <div class="note-card" style="margin-top: 40px;">
            <h3 class="note-subtitle">表格視覺化顯示</h3>
            <div class="ques-section">
                <p>運用 `foreach` 拆解陣列內容，並配合 `%` 取餘數邏輯進行 HTML 表格換行。</p>
            </div>

            <pre><code><?php
$code = <<<'EOD'
echo "<table><tr>";
foreach ($nine as $idx => $item) {
    // 判斷是否需要換行：索引大於 0 且為 9 的倍數
    if ($idx > 0 && $idx % 9 == 0) {
        echo "</tr><tr>";
    }
    echo "<td>$item</td>";
}
echo "</tr></table>";
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <table>
                    <tr>
                        <?php
                        foreach ($nine as $idx => $item) {
                            if ($idx > 0 && $idx % 9 == 0) {
                                echo "</tr><tr>";
                            }
                            echo "<td>$item</td>";
                        }
                        ?>
                    </tr>
                </table>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>foreach 結構：</strong>`$idx` 代表索引（0-80），`$item` 代表內容（如 "1x1=1"）。</li>
                    <li><strong>換行邏輯：</strong>利用 `$idx % 9 == 0` 來判斷每一列的結束點。</li>
                    <li><strong>邏輯與視圖：</strong>實現了「一次計算、多處使用」的資料共享邏輯。</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>