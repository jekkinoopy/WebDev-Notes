<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習一｜成績等級判定 - 努比的全端筆記</title>
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
            <h2 class="note-title">成績等級判定</h2>
            <p class="hero-desc">運用 <code>if...else</code> 多重分支邏輯，實作自動化成績等級分類系統。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">分配成績等級</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>給定一個成績數字，依所在區間給定等級。</li>
                    <li>0 ~ 59 => E；60 ~ 69 => D；70 ~ 79 => C；80 ~ 89 => B；90 ~ 100 => A。</li>
                    <li>不在合理範圍內時應視為輸入錯誤並另行處理。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 依成績區間給定等級（E / D / C / B / A），範圍外視為輸入錯誤。

$score = 71;
$level = '';
if ($score >= 0 && $score < 60) {
    $level = 'E';
} else if ($score >= 60 && $score < 70) {
    $level = 'D';
} else if ($score >= 70 && $score < 80) {
    $level = 'C';
} else if ($score >= 80 && $score < 90) {
    $level = 'B';
} else if ($score >= 90 && $score <= 100) {
    $level = 'A';
} else {
    $level = '成績輸入錯誤';
}

echo "您的成績是: <strong>" . $score . "</strong> → 等級: <strong>" . $level . "</strong>";
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
                // 【程式碼練習】
                // 與上方 note-code-window 對應之可執行碼

                $score = 71;
                $level = '';
                if ($score >= 0 && $score < 60) {
                    $level = 'E';
                } else if ($score >= 60 && $score < 70) {
                    $level = 'D';
                } else if ($score >= 70 && $score < 80) {
                    $level = 'C';
                } else if ($score >= 80 && $score < 90) {
                    $level = 'B';
                } else if ($score >= 90 && $score <= 100) {
                    $level = 'A';
                } else {
                    $level = '成績輸入錯誤';
                }

                echo "您的成績是: <strong>" . $score . "</strong> → 等級: <strong>" . $level . "</strong>";
                ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>
                        <strong>流程總結：</strong>
                        <ul class="custom-list learning-sublist">
                            <li><strong>區間判斷：</strong>以 <code>&&</code> 結合上下界，讓分數落在正確範圍才指定等級。</li>
                            <li><strong>多重分支：</strong><code>else if</code> 由上而下檢查，上一個不成立才繼續。</li>
                            <li><strong>例外處理：</strong>最後 <code>else</code> 承接負數、超過 100 等不合理輸入。</li>
                            <li>細節見上方程式註解。</li>
                        </ul>
                    </li>
                    <li>
                        <strong>概念補充</strong>
                        <ul class="custom-list learning-sublist">
                            <li>
                                <strong>區間直覺：</strong><br>
                                例如 <code>70 &lt;= $score &lt; 80</code> 對應 C 級（實作時仍以兩段比較式寫成條件）。
                            </li>
                            <li>
                                <strong>撰寫習慣：</strong><br>
                                條件式內建議加空白（如 <code>$score &gt;= 0</code>）以利閱讀與除錯。
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制（含區間與多重分支）</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/04-pra01.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（04-pra01.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="04-pra01"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
