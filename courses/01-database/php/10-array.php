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
            <h3>學生的成績資料</h3>
            <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <strong>題目需求：設計一個陣列(一維或多維)來存放學生的成績資料</strong><br>
                <img src="images/10-1.png">
                <?php 
                    $students=[
                        "judy"=>[
                            "國文"=>95,
                            "英文"=>64,
                            "數學"=>70,
                            "地理"=>90,
                            "歷史"=>84,
                        ],
                        "amo"=>["國文"=>88,"英文"=>78,"數學"=>54,"地理"=>81,"歷史"=>71],
                        "john"=>["國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62],
                        "peter"=>["國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42],
                        "hebe"=>["國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64],
                    ];
                    foreach($students as $student => $scores){
                        echo "$students";
                    };
                ?>
            </div>
        </div>
    </div>
</body>

</html>