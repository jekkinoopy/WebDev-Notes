<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習三｜規則數列 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/note-code-window.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">綜合練習三：規則數列（for）</h2>
            <p class="hero-desc">以 for 迴圈產生指定規則的數列，含奇數、十的倍數與質數區間數列題型。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">綜合練習三</h3>
            <div class="code-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                <p>請使用 <strong>for 迴圈</strong>，依題意輸出下列數列類型（終點或上限可依題設為 n）；以下各段為對照區，請在對應位置撰寫與驗證程式。</p>
                <ul class="custom-list">
                    <li>奇數列：1，3，5，7，9……n</li>
                    <li>十的倍數列：10，20，30，40，50，60……n</li>
                    <li>質數區間列（示意題型）：3，5，7，11，13，17……97</li>
                </ul>
                <p><strong>（一）輸出奇數列 1，3，5，7，9……n</strong></p>
                <pre><code><?php
            // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
<?php
$n=100;
    for($i=1; $i<=$n; $i+=2){
    echo $i . ",";}
?> <br><br>
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <?php
            $n=100;
            for($i=1; $i<=$n; $i+=2){
                echo $i . ",";}
                ?> <br><br>
            <p><strong>（二）輸出十的倍數列 10，20，30，40，50……n</strong></p>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
            <?php
            $n=100;
            for($i=10;$i<=$n;$i+=10){
                echo $i . ",";}
            ?> 
EOD;
echo htmlspecialchars($code); 
    ?></code></pre>
                <?php
                $n=100;
                for($i=10;$i<=$n;$i+=10){
                    echo $i . ",";}
                ?> <br><br>
                <p><strong>（三）輸出在題目範圍內的質數區間數列示意</strong></p>
                <?php
                $n=100;
                $flag =true;
                for($i=1; $i<$n; $i++){
                    for($j=2;$j<$i;$j++){
                        if($i%$j==0){
                            $flag=false;
                            break;
                        }
                    }
                }

                ?>
        </div>
        </div>

            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/06-pra03.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（06-pra03.php）</a>
                    </li>
                </ul>
            </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="06-pra03"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>