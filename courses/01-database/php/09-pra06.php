<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>瑪利歐金幣牆 - 努比的全端筆記</title>
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
            <span class="category-tag">實戰</span>
            <h2 class="note-title">瑪利歐金幣牆</h2>
            <p class="hero-desc">使用 PHP 巢狀迴圈建構幾何圖形與金幣陣列應用。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">直角三角形</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>控制內層迴圈邊界，使其隨外層行數遞增。</p>
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<img src='images/09-1.png' style='width:30px'>";
    }
    echo "<br>";
}
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
                <span class="section-label is-bracket-heading">【執行結果】</span><br>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "<img src='images/09-1.png' style='width:30px'>";
                    }
                    echo "<br>";
                }
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">正三角形 (金字塔)</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>邏輯：先印空格，再印金幣。</p>
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
$totalRows = 5;
for ($i = 1; $i <= $totalRows; $i++) {
    for ($j = 1; $j <= ($totalRows - $i); $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "<img src='images/09-1.png' style='width:30px; vertical-align: middle;'>";
    }
    echo "<br>";
}
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
                <span class="section-label is-bracket-heading">【執行結果】</span><br>
                <?php
                $totalRows = 5;
                for ($i = 1; $i <= $totalRows; $i++) {
                    for ($j = 1; $j <= ($totalRows - $i); $j++) {
                        echo "&nbsp;&nbsp;&nbsp;";
                    }
                    for ($k = 1; $k <= (2 * $i - 1); $k++) {
                        echo "<img src='images/09-1.png' style='width:30px; vertical-align: middle;'>";
                    }
                    echo "<br>";
                }
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">空心矩形</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>挑戰：實作出只有邊框有金幣的 5x5 矩形。</p>
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處實作迴圈與 if 判斷邊界邏輯

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
                <span class="section-label is-bracket-heading">【執行結果】</span><br>
                <?php // 預留位置 ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">對角線矩形</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>挑戰：除了矩形邊框，還要包含中間的「X」對角線。</p>
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處實作對角線判斷邏輯 (提示：i 與 j 的關係)

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
                <span class="section-label is-bracket-heading">【執行結果】</span><br>
                <?php // 預留位置 ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>座標判定：思考矩形四條邊與對角線在座標 (i, j) 上的數學特徵。</li>
                    <li>巢狀結構：外層控制列，內層控制行。</li>
                </ul>
            </div>

        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/09-pra06.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（09-pra06.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="09-pra06"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>
</html>
