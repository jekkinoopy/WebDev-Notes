<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>規則數列（for）- 努比的全端筆記</title>
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
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">規則數列（for）</h2>
            <p class="hero-desc">以 for 迴圈產生指定規則的數列，含奇數、十的倍數與質數區間數列題型。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">奇數列</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>使用 <strong>for</strong> 與步長，輸出 1，3，5，7，9……至上限 <code>n</code>（範例 <code>n = 100</code>）。</li>
                </ul>
            </div>

            <?php
$code1 = <<<'EOD'
// 【程式碼練習】
$n = 100;
for ($i = 1; $i <= $n; $i += 2) {
    echo $i . ",";
}
EOD;
$codeLineCount1 = substr_count($code1, "\n") + 1;
$codeGutter1 = implode("\n", range(1, $codeLineCount1));
?>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount1; ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter1, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code1, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>

                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <?php
                    $n = 100;
                    for ($i = 1; $i <= $n; $i += 2) {
                        echo $i . ",";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">十的倍數列</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>使用 <strong>for</strong> 輸出 10，20，30……至上限 <code>n</code>（範例 <code>n = 100</code>）。</li>
                </ul>
            </div>

            <?php
$code2 = <<<'EOD'
// 【程式碼練習】
$n = 100;
for ($i = 10; $i <= $n; $i += 10) {
    echo $i . ",";
}
EOD;
$codeLineCount2 = substr_count($code2, "\n") + 1;
$codeGutter2 = implode("\n", range(1, $codeLineCount2));
?>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount2; ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter2, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code2, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>

                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <?php
                    $n = 100;
                    for ($i = 10; $i <= $n; $i += 10) {
                        echo $i . ",";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">質數區間列</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>在題目範圍內（範例：小於 100 的正整數）找出<strong>質數</strong>，依序列出（如 2，3，5，7……97）。</li>
                    <li>內層可用試除：若 <code>$i</code> 可被某個 <code>$j</code>（<code>2 ≤ j &lt; i</code>）整除則不是質數；可搭配 <code>break</code> 提前結束。</li>
                </ul>
            </div>

            <?php
$code3 = <<<'EOD'
// 【程式碼練習】
for ($i = 2; $i < 100; $i++) {
    $isPrime = true;
    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j === 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $i . ",";
    }
}
EOD;
$codeLineCount3 = substr_count($code3, "\n") + 1;
$codeGutter3 = implode("\n", range(1, $codeLineCount3));
?>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount3; ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter3, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code3, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>

                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <?php
                    for ($i = 2; $i < 100; $i++) {
                        $isPrime = true;
                        for ($j = 2; $j * $j <= $i; $j++) {
                            if ($i % $j === 0) {
                                $isPrime = false;
                                break;
                            }
                        }
                        if ($isPrime) {
                            echo $i . ",";
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>步長：</strong>奇數列用 <code>$i += 2</code>；十的倍數用 <code>$i += 10</code>，起點與上限要與題意一致。</li>
                    <li><strong>質數試除：</strong>若 <code>$i</code> 有因子則非質數；試除到 <code>√i</code> 即可（<code>$j * $j &lt;= $i</code>）。</li>
                    <li><strong>巢狀迴圈：</strong>外層掃每個候選數，內層負責檢查是否可整除。</li>
                    <li><strong>質數旗標：</strong>每個 <code>$i</code> 都要重新假設為質數再檢查；不可沿用上一輪的布林值，否則會誤判。</li>
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
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/06-pra03.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（06-pra03.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="06-pra03"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
