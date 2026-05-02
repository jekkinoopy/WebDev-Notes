<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎概念 - 努比的全端筆記</title>
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
            <h2 class="note-title">HTML Table：儲存格合併實戰</h2>
            <p class="hero-desc">掌握 <code>rowspan</code> 與 <code>colspan</code>，建構複雜且精緻的數據表格與課表排版。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>變數</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
$a = 10;
$b = 50;
echo '$a=' . $a; // 單引號：不解析變數，顯示 $a=10
echo "$b=" . $b; // 雙引號：解析變數，顯示 50=50
EOD;
echo htmlspecialchars($code); 
?></code></pre>

            <div class="code-section">
                <?php
                $a = 10;
                $b = 50;
                // 1. 這裡用單引號，會印出字串 "$a="
                echo '$a=' . $a . "<br>"; 
                
                // 2. 這裡用雙引號，PHP 會把 "$b" 換成 "50"，所以印出 "50="
                echo "$b=" . $b;
                ?>
            </div>
        </div>
        <div class="note-card">
            <h3>變數交換練習：三杯水交換法）</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
$temp=$a;   // A 的值先備份到 Temp，防止數據遺失
$a=$b;      //$b的值 (50) 賦予給$a，第一步對調將 B 的內容移至 A
$b=$temp;   //把原本備份在$temp的 10 拿出來，放進$b 完成最後對調


echo '$a=' . $a;
echo '<br>';
echo '$b=' . $b;
EOD;

echo htmlspecialchars($code); 
?></code></pre>

            <div class="code-section">
                <?php 

                $temp=$a;
                $a=$b;
                $b=$temp;


                echo '$a=' . $a;
                echo '<br>';
                echo '$b=' . $b;

                ?>
            </div>
        </div>
    </div>
</body>

</html>