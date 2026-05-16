<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間及日期處理 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">流程控制</span>
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
        </div>
        <!-- 練習 1：間隔天數 -->
        <div class="note-card">
            <h3 class="note-subtitle">給定兩個日期，計算中間間隔天數</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>實作邏輯計算兩個指定日期之間相差的天數。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作間隔天數計算
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
        </div>

        <!-- 練習 2：生日天數 -->
        <div class="note-card">
            <h3 class="note-subtitle">計算距離自己下一次生日還有幾天</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>根據當前日期，算出下一次生日的倒數天數。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作生日倒數計算
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
                <?php // 待實作 ?>
            </div>
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
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作各式格式呈現
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
                <?php // 待實作 ?>
            </div>
            </div>
        </div>

        <!-- 練習 4：連續周一 -->
        <div class="note-card">
            <h3 class="note-subtitle">利用迴圈來計算連續五個周一的日期</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                例：2021-10-04 星期一 ... 2021-11-01 星期一。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此實作週一日期迴圈
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
                <?php // 待實作 ?>
            </div>
            </div>
        </div>


        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-html/blob/main/02-datetime.php" target="_blank" rel="noopener noreferrer">115 HTML 課程：對照原始碼（02-datetime.php）</a>
                </li>
            </ul>
        </aside>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="h02-date"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>