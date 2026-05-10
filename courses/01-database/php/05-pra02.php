<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷 - 努比的全端筆記</title>
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
            <h2 class="note-title">閏年判斷實戰</h2>
            <p class="hero-desc">運用邏輯運算子，實作精準的閏年週期判定邏輯。</p>
            <div class="hero-divider"></div>
        </div>
        </div>
    </section>
    <div class="note-container">
    <div class="note-card">
        <h3 class="note-subtitle">閏年判斷</h3>
        <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                地球對太陽的公轉一年的真實時間大約是 365 天 5 小時 48 分 46 秒，因此以 365 天定為一年的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。
                <br><br>
                1. 公元年分除以 4 不可整除，為平年。<br>
                2. 公元年分除以 4 可整除但除以 100 不可整除，為閏年。<br>
                3. 公元年分除以 100 可整除但除以 400 不可整除，為平年。
            </div>
        <!-- 1. 程式碼練習 -->
        <pre><code><?php
$code = <<<'EOD'
// 在此處實作練習邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>

        <!-- 2. 執行結果 -->
        <div class="code-section">
            <span class="section-label is-bracket-heading">【執行結果】</span>
            <?php // 執行結果預留位置
                // $year=2020;
                // if($year % 4 != 0;){
                //     echo "平年";
                //     else($year % 4)
                // }




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

                
                //echo "西元 $year 年是 $result";
                //
              ?>
        </div>

        <!-- 3. 學習重點 (使用妳優化後的獨立區塊) -->
        <div class="learning-point-box">
            <p class="learning-point-title is-bracket-heading">【學習重點】</p>
            <ul class="custom-list">
                <li>在此紀錄關鍵函式或邏輯思維</li>
                <li>標記需要特別注意的語法細節</li>
            </ul>
        </div>
    </div>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="05-pra02"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>