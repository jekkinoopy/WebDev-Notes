<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年閏年搜尋 - 努比的全端筆記</title>
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
            <h2 class="note-title">找出五百年內的閏年</h2>
            <p class="hero-desc">透過年份運算規律練習陣列封裝，實現特定條件數據的批次處理。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">閏年判定與儲存</h3>
            <ul class="custom-list">
                <li>請依照閏年公式找出五百年內的閏年</li>
                <li>使用陣列來儲存閏年</li>
                <li>使用迴圈來印出閏年</li>
            </ul>
            <pre><code><?php
// 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
// 在此處開始你的練習
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <?php 

                    $year = 2000;
                    $result = "";

                    if(($year % 4== 0 && $year % 100 != 0) OR $year %400 ==0){
                        $result= "閏年";
                    }else{
                        $result="平年";
                    }

                    echo "<div class='result'>西元 $year 年是 $result</div>";
                ?>
            </div>
        </div>
    </div>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="13-pra09"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>