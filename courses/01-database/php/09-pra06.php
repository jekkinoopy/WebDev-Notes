<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="/,,/../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">程式基礎概念</span>
            <h2 class="note-title">畫星星</h2>
            <p class="hero-desc">使用 PHP 畫出不同樣式的星星</p>
            <div class="hero-divider"></div>
        </div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>直角三角形</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
<?php
echo "方法一";
echo "<br>";

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$";
    }
    echo "<br>";
}

echo "方法二";
echo "<br>";

for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j<=$i){
            echo "$";
            }
            }
            echo "<br>";
            }
?>
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                echo "方法一";
                echo "<br>";

                for($i=1;$i<=5;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo "$";
                    }
                    echo "<br>";
                }
                echo "<br>";
                echo "方法二";
                echo "<br>";
            
                for($i=1;$i<=5;$i++){
                    for($j=1;$j<=5;$j++){
                        if($j<=$i){
                            echo "$";
                            }
                            }
                            echo "<br>";
                            }
                ?>
            </div>
        </div>
        <div class="note-card">
            <h3>倒直角三角形</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
<?php 
/**
 * 倒三角形邏輯解析 (Thinking Process):
 * 1. 外層迴圈 ($i)：控制總行數。
 * - 從 5 開始，每次減 1 ($i--)，直到 1。
 * - 這代表我們是「由大到小」規劃每一行的內容。
 * 2. 內層迴圈 ($j)：控制每一行印出的星星數量。
 * - 條件是 $j < $i，這是一個「動態邊界」。
 * - 當 $i=5 時，內層跑 5 次；當 $i=1 時，內層只跑 1 次。
 * 3. 換行 (echo "<br>")：
 * - 必須放在內層迴圈結束後、外層迴圈結束前。
 */

for ($i = 5; $i > 0; $i--) {        // 外層：從第 5 行數回第 1 行

    for ($j = 0; $j < $i; $j++) {    // 內層：依照目前的行號 $i，決定印幾個星星
        echo "*";
    }

    echo "<br>";                    // 每一行印完星星後，執行換行
}
?>
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
<?php 
/**
 * 倒三角形邏輯解析 (Thinking Process):
 * 1. 外層迴圈 ($i)：控制總行數。
 * - 從 5 開始，每次減 1 ($i--)，直到 1。
 * - 這代表我們是「由大到小」規劃每一行的內容。
 * * 2. 內層迴圈 ($j)：控制每一行印出的星星數量。
 * - 條件是 $j < $i，這是一個「動態邊界」。
 * - 當 $i=5 時，內層跑 5 次；當 $i=1 時，內層只跑 1 次。
 * * 3. 換行 (echo "<br>")：
 * - 必須放在內層迴圈結束後、外層迴圈結束前。
 */

for ($i = 5; $i > 0; $i--) {        // 外層：從第 5 行數回第 1 行

    for ($j = 0; $j < $i; $j++) {    // 內層：依照目前的行號 $i，決定印幾個星星
        echo "$";
    }

    echo "<br>";                    // 每一行印完星星後，執行換行
}
?>
            </div>
        </div>
        <div class="note-card">
            <h3>正三角形</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
            </div>
        </div>
        <div class="note-card">
            <h3>菱型</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
            </div>
        </div>
        <div class="note-card">
            <h3>矩形</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
            </div>
        </div>
        <div class="note-card">
            <h3>內含對角線的矩形</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
            </div>
        </div>
    </div>
</body>
</html>