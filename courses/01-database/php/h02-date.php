<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間及日期處理 - 努比的全端筆記</title>
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
            <span class="category-tag">基礎課程</span>
            <h2 class="note-title">時間及日期處理</h2>
            <p class="hero-desc">掌握時間戳運算與格式化參數，從基礎顯示到實作動態月曆。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 基礎知識區：套用學習重點樣式 -->
        <div class="note-card">
            <h3 class="note-subtitle">日期函式基本用法</h3>
            <div class="learning-point-box" style="margin-top: 0;">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><code>date_default_timezone_set()</code> - 設置程式執行期間的時區。</li>
                    <li><code>date("Y-m-d", $time)</code> - 將時間格式化輸出。</li>
                    <li><code>strtotime("+1 days", $date_string)</code> - 解析字串為時間戳。</li>
                    <li><strong>核心概念：</strong>PHP 處理時間的基本單位是「秒」，時間戳相減後需除以 86400 換算為天。</li>
                </ul>
            </div>
        </div><!-- 練習 1：間隔天數 -->
        <div class="note-card">
            <h3 class="note-subtitle">給定兩個日期，計算中間間隔天數</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>實作邏輯計算兩個指定日期之間相差的天數。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作間隔天數計算
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php 
                $start="2026-04-09";
                $end="2026-05-04";
                // 日期的字串無法計算，所以要轉換為可計算的格式
                $start_time=strtotime($start);
                $end_time=strtotime($end);
                $diff=($end_time-$start_time)/(60*60*24);
                echo $start . "到". $end ."間隔" . $diff ."天";
                

                ?>
            </div>
        </div>

        <!-- 練習 2：生日天數 -->
        <div class="note-card">
            <h3 class="note-subtitle">計算距離自己下一次生日還有幾天</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>根據當前日期，算出下一次生日的倒數天數。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作生日倒數計算
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 待實作 ?>
            </div>
        </div>

        <!-- 練習 3：日期格式呈現 -->
        <div class="note-card">
            <h3 class="note-subtitle">利用 date() 函式的格式化參數呈現</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                * 2021/10/05<br>
                * 10月5日 Tuesday<br>
                * 2021-10-5 12:9:5<br>
                * 2021-10-5 12:09:05<br>
                * 今天是西元2021年10月5日 上班日(或假日)
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作各式格式呈現
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 待實作 ?>
            </div>
        </div>

        <!-- 練習 4：連續周一 -->
        <div class="note-card">
            <h3 class="note-subtitle">利用迴圈來計算連續五個周一的日期</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                例：2021-10-04 星期一 ... 2021-11-01 星期一。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作週一日期迴圈
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 待實作 ?>
            </div>
        </div>


    </div>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="h02-date"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>