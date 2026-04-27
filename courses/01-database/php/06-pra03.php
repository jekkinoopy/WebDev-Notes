<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 努比的全端筆記</title>
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
            <h2 class="note-title">綜合練習三</h2>
            <p class="hero-desc"></p>
            <div class="hero-divider"></div>
        </div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>綜合練習三</h3>
            <div class="code-section">
                <strong>題目需求：</strong><br>
                使用for迴圈來產生以下的數列<br>
                <br>
                1,3,5,7,9……n<br>
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
                10,20,30,40,50,60……n<br>
                <pre><code><?php
            // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
    $code = <<<'EOD'
                <?php
                $n=100;
                for($i=10;$i<=$n;$i+=10){
                    echo $i . ",";}
                ?> <>
    EOD;
    echo htmlspecialchars($code); 
    ?></code></pre>
                <?php
                $n=100;
                for($i=10;$i<=$n;$i+=10){
                    echo $i . ",";}
                ?> <br><br>
                3,5,7,11,13,17……97<br>
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
            </div>
        </div>
    </div>
</body>

</html>
</body>

</html>