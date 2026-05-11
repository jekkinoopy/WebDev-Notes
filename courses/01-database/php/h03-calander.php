<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆製作 - 努比的全端筆記</title>
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
            <span class="category-tag">實戰專題</span>
            <h2 class="note-title">線上月曆製作</h2>
            <p class="hero-desc">將日期邏輯轉化為視覺排版，挑戰多種佈局方式與資料顯示。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 基礎重點：日期與月曆邏輯 -->
        <div class="note-card">
            <h3 class="note-subtitle">基礎重點：日期與月曆邏輯</h3>
            <div class="learning-point-box" style="margin-top: 0;">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
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
                <strong class="is-bracket-heading">【題目需求】</strong>使用 HTML <code>&lt;table&gt;</code> 標籤配合 PHP 迴圈，動態產生當月的日曆網格。
                <img src="images/basic-lesson-05-001.jpg" alt="月曆範例圖" style="max-width: 280px; margin-top: 10px; border: 1px solid #eee;">
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>
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
                <strong class="is-bracket-heading">【題目需求】</strong>動態產生萬年曆練習(可調整月)。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>
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
            <h3 class="note-subtitle">重點複習：月曆核心邏輯</h3>
            <div class="learning-point-box" style="margin-top: 0;">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
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
                <strong class="is-bracket-heading">【題目需求】</strong>動態產生無限月份的日曆網格。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作 Table 迴圈產生日曆邏輯
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>
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
                <strong class="is-bracket-heading">【題目需求】</strong>在迴圈中加入條件判斷，當日期符合指定條件時，顯示如「假日」或「紀念日」等自定義資訊。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作 if 判斷特殊日期顯示邏輯
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>
            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php // 預留練習空間 ?>
            </div>
        </div>

        <!-- 需求 3：Flexbox 佈局挑戰 -->
        <div class="note-card">
            <h3 class="note-subtitle">嘗試以 Block box 或 Flex box 方式製作</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>捨棄傳統表格，改用現代 CSS 佈局（如 Flexbox 或 Grid）來重新構建月曆結構，提升響應式效果。
                <br><br>
            </div>
            <?php
$code = <<<'EOD'
/* 【樣式建議】 */
/* CSS 建議方向：
.calendar { display: flex; flex-wrap: wrap; }
.day { width: calc(100% / 7); }
*/
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-css"><code class="language-css"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>
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

            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/h03-calander.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（h03-calander.php）</a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-css.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="h03-calander"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>