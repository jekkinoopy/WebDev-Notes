<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆製作 - 努比的全端筆記</title>
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
            <span class="category-tag">實戰專題</span>
            <h2 class="note-title">線上月曆製作</h2>
            <p class="hero-desc">將日期邏輯轉化為視覺排版，挑戰多種佈局方式與資料顯示。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 基礎重點：日期與月曆邏輯 -->
        <div class="note-card">
            <div class="learning-point-box" style="margin-top: 0;">
                <p class="learning-point-title is-bracket-heading">【月曆實作核心邏輯】</p>
                <ul class="custom-list">
                    <li><strong>時區設定：</strong><code>date_default_timezone_set("Asia/Taipei")</code> 確保日期精確。</li>
                    <li><strong>關鍵資料：</strong>需取得「當月 1 號是星期幾」及「當月總共有幾天」。</li>
                    <li><strong>排版計算：</strong>首週的空白格數取決於 1 號的星期索引。</li>
                </ul>
            </div>
        </div>
        
        <!-- 需求：表格排版 萬年曆練習(當月) -->
        <div class="note-card">
            <h3 class="note-subtitle">以表格方式呈現整個月份的日期(當月)</h3>
            <div class="ques-section">
                <strong>開發需求：</strong>使用 HTML <code>&lt;table&gt;</code> 標籤配合 PHP 迴圈，動態產生當月的日曆網格。
                <img src="images/basic-lesson-05-001.jpg" alt="月曆範例圖" style="max-width: 280px; margin-top: 10px; border: 1px solid #eee;">
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php 
                    $today=date("Y-m-d");
                    $monthDays=date("t");
                    $firstDayWeek=date("w",strtotime(date("Y-m-01")));
                    $lastDay=date("Y-m-$monthDays");
                    $lastDayWeek=date("w",strtotime(date($lastDay)));
                    $TotalDays=$monthDays+$firstDayWeek+(6-$lastDayWeek);
                    $TotalWeeks=$TotalDays/7;
                ?>
                <h2>今天是<?= $today; ?></h2><br>
                <div class="ques-section">
                    <ul>
                        <li>這個月的天數一共有<?= $monthDays?>天</li>
                        <li>這個月的第一天是<?=date("Y-m-01") ?></li>
                        <li>這個月的第一天是星期<?= $firstDayWeek;?></li>
                        <li>這個月的最後一天是<?=$lastDay?></li>
                        <li>這個月的最後一天是星期<?=$lastDayWeek?></li>
                        <li>這個月曆一共要畫出<?=$TotalDays?>個格子(含空白)</li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                    </tr>
                <?php
                    for($i=0;$i<$TotalWeeks;$i++){
                        echo "<tr>";
                        for($j=0;$j<7;$j++){
                            echo "<td>";
                            $DayNumber=($i*7+$j)-($firstDayWeek-1);
                            if($DayNumber>0 && $DayNumber<=$monthDays){
                                echo $DayNumber;
                                };echo "</td>";
                                };
                                echo "</tr>";
                            };
                        ?>

                </table>
            </div>
        </div>

        
        <!-- 需求：萬年曆練習(可調整月) -->
        <div class="note-card">
            <h3 class="note-subtitle">以表格方式呈現整個月份的日期</h3>
            <div class="ques-section">
                <strong>開發需求：</strong>動態產生萬年曆練習(可調整月)。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php 
                    $today=date("Y-m-d");
                    $monthDays=date("t");
                    $firstDayWeek=date("w",strtotime(date("Y-m-01")));
                    $lastDay=date("Y-m-$monthDays");
                    $lastDayWeek=date("w",strtotime(date($lastDay)));
                    $TotalDays=$monthDays+$firstDayWeek+(6-$lastDayWeek);
                    $TotalWeeks=$TotalDays/7;
                ?>
                <h2>今天是<?= $today; ?></h2><br>
                <div class="ques-section">
                    <ul>
                        <li>這個月的天數一共有<?= $monthDays?>天</li>
                        <li>這個月的第一天是<?=date("Y-m-01") ?></li>
                        <li>這個月的第一天是星期<?= $firstDayWeek;?></li>
                        <li>這個月的最後一天是<?=$lastDay?></li>
                        <li>這個月的最後一天是星期<?=$lastDayWeek?></li>
                        <li>這個月曆一共要畫出<?=$TotalDays?>個格子(含空白)</li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                    </tr>
                <?php
                    for($i=0;$i<$TotalWeeks;$i++){
                        echo "<tr>";
                        for($j=0;$j<7;$j++){
                            echo "<td>";
                            $DayNumber=($i*7+$j)-($firstDayWeek-1);
                            if($DayNumber>0 && $DayNumber<=$monthDays){
                                echo $DayNumber;
                                };echo "</td>";
                                };
                                echo "</tr>";
                            };
                        ?>

                </table>
            </div>
        </div>
        <div class="note-card">
            <div class="learning-point-box" style="margin-top: 0;">
                <p class="learning-point-title is-bracket-heading">【月曆實作核心邏輯】</p>
                <ul class="custom-list">
                    <li><strong>時區設定：</strong><code>date_default_timezone_set("Asia/Taipei")</code> 確保日期精確。</li>
                    <li><strong>關鍵資料：</strong>需取得「當月 1 號是星期幾」及「當月總共有幾天」。</li>
                    <li><strong>排版計算：</strong>首週的空白格數取決於 1 號的星期索引。</li>
                </ul>
            </div>
        </div>
        
        <!-- 需求：萬年曆練習(無限月份) -->
        <div class="note-card">
            <h3 class="note-subtitle">以表格方式呈現整個月份的日期</h3>
            <div class="ques-section">
                <strong>開發需求：</strong>動態產生無限月份的日曆網格。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php 
                    $today=date("Y-m-d");
                    $monthDays=date("t");
                    $firstDayWeek=date("w",strtotime(date("Y-m-01")));
                    $lastDay=date("Y-m-$monthDays");
                    $lastDayWeek=date("w",strtotime(date($lastDay)));
                    $TotalDays=$monthDays+$firstDayWeek+(6-$lastDayWeek);
                    $TotalWeeks=$TotalDays/7;
                ?>
                <h2>今天是<?= $today; ?></h2><br>
                <div class="ques-section">
                    <ul>
                        <li>這個月的天數一共有<?= $monthDays?>天</li>
                        <li>這個月的第一天是<?=date("Y-m-01") ?></li>
                        <li>這個月的第一天是星期<?= $firstDayWeek;?></li>
                        <li>這個月的最後一天是<?=$lastDay?></li>
                        <li>這個月的最後一天是星期<?=$lastDayWeek?></li>
                        <li>這個月曆一共要畫出<?=$TotalDays?>個格子(含空白)</li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                    </tr>
                <?php
                    for($i=0;$i<$TotalWeeks;$i++){
                        echo "<tr>";
                        for($j=0;$j<7;$j++){
                            echo "<td>";
                            $DayNumber=($i*7+$j)-($firstDayWeek-1);
                            if($DayNumber>0 && $DayNumber<=$monthDays){
                                echo $DayNumber;
                                };echo "</td>";
                                };
                                echo "</tr>";
                            };
                        ?>

                </table>
            </div>
        </div>

        <!-- 需求 2：特殊日期標註 -->
        <div class="note-card">
            <h3 class="note-subtitle">在特殊日期中顯示資訊 (假日或紀念日)</h3>
            <div class="ques-section">
                <strong>開發需求：</strong>在迴圈中加入條件判斷，當日期符合指定條件時，顯示如「假日」或「紀念日」等自定義資訊。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 在此實作 if 判斷特殊日期顯示邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 預留練習空間 ?>
            </div>
        </div>

        <!-- 需求 3：Flexbox 佈局挑戰 -->
        <div class="note-card">
            <h3 class="note-subtitle">嘗試以 Block box 或 Flex box 方式製作</h3>
            <div class="ques-section">
                <strong>開發需求：</strong>捨棄傳統表格，改用現代 CSS 佈局（如 Flexbox 或 Grid）來重新構建月曆結構，提升響應式效果。
                <br><br>
            </div>
            <pre><code><?php
$code = <<<'EOD'
/* CSS 建議方向：
.calendar { display: flex; flex-wrap: wrap; }
.day { width: calc(100% / 7); }
*/
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 預留練習空間 ?>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【實作建議】</p>
                <ul class="custom-list">
                    <li><strong>資料分離：</strong>可以先用陣列存儲特殊日期資料，再於顯示層比對，讓代碼更乾淨。</li>
                    <li><strong>視覺強化：</strong>利用 CSS 選擇器（如 <code>:nth-child</code>）快速標記週六、週日的顏色。</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>