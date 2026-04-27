<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習二 - 努比的全端筆記</title>
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
            <h2 class="note-title">綜合練習二</h2>
            <p class="hero-desc"></p>
            <div class="hero-divider"></div>
        </div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>閏年判斷</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <strong>題目需求：</strong><br>
                閏年判斷，給定一個西元年份，判斷是否為閏年<br>
                <br>
                地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。<br>
                公元年分除以4不可整除，為平年。<br>
                公元年分除以4可整除但除以100不可整除，為閏年。<br>
                公元年分除以100可整除但除以400不可整除，為平年。<br>
                <?php
                $year = 1997;

                $result = "";

                // 我想的
                // if($year % 4==0){
                //     // $result = "閏年";
                //     if($year % 100 !=0){
                //         $result = "閏年";
                //     }
                //     }
                // else{
                //     // $result = "平年";
                //     if($year % 400 !=0){
                //         $result = "平年";   
                //     }
                // }

                //巢狀判斷
                // if($year % 4 == 0){
                //     // $result = "閏年";
                //     if($)
                //     else{
                //         $result = "平年";
                //     };                   
                // }

                
                echo "西元 $year 年是 $result";
                ?>
            </div>
        </div>
    </div>
</body>

</html>
</body>

</html>