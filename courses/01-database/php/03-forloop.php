<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop 迴圈 - 努比的全端筆記</title>
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
            <h2 class="note-title">For Loop 迴圈</h2>
            <p class="hero-desc">掌握 <code>for</code>、<code>while</code> 與 <code>foreach</code>，學會自動化重複任務與陣列資料處理。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">For Loop 練習 1</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>以 <code>for</code> 從 1 印到 10，每行顯示 <code>$i</code> 與 <code>$i * 10</code>。</li>
                    <li>迴圈結束後輸出最終的 <code>$i</code>。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
for ($i = 1; $i <= 10; $i = $i + 1) {
    echo "$i => ";
    echo $i * 10 . "<br>";
}
echo "最終 i 值: " . $i;
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
                for ($i = 1; $i <= 10; $i = $i + 1) {
                    echo "$i => ";
                    echo $i * 10 . "<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">For Loop 練習 2（遞增為 2）</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>每次迴圈 <code>$i</code> 加 2，觀察輸出與最後的 <code>$i</code>。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
for ($i = 1; $i <= 10; $i = $i + 2) {
    echo "$i => ";
    echo $i * 10 . "<br>";
}
echo "最終 i 值: " . $i;
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
                for ($i = 1; $i <= 10; $i = $i + 2) {
                    echo "$i => ";
                    echo $i * 10 . "<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">For Loop 練習 3（顯示為偶數）</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>以 <code>$i * 2</code> 當作輸出值；當偶數值 <code>&gt;= 10</code> 時以 <code>break</code> 結束迴圈。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
for ($i = 0; $i <= 10; $i = $i + 1) {
    echo "$i => ";
    echo $i * 2 . "<br>";
    if ($i * 2 >= 10) {
        break;
    }
}
echo "最終 i 值: " . $i;
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
                for ($i = 0; $i <= 10; $i = $i + 1) {
                    echo "$i => ";
                    echo $i * 2 . "<br>";
                    if ($i * 2 >= 10) {
                        break;
                    }
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">For Loop 練習 4（顯示為奇數）</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>以 <code>$i * 2 + 1</code> 當作奇數輸出；當值 <code>&gt;= 10</code> 時 <code>break</code>。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
for ($i = 0; $i <= 10; $i = $i + 1) {
    echo "$i => ";
    echo $i * 2 + 1 . "<br>";
    if (($i * 2 + 1) >= 10) {
        break;
    }
}
echo "最終 i 值: " . $i;
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
                for ($i = 0; $i <= 10; $i = $i + 1) {
                    echo "$i => ";
                    echo $i * 2 + 1 . "<br>";
                    if (($i * 2 + 1) >= 10) {
                        break;
                    }
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">While Loop 練習</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>成績未滿 60 分時每次加 10 分，統計迴圈執行次數與最後分數。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
$score = 10;
echo "初始成績: " . $score . "分 <br>";
$count = 0;
while ($score < 60) {
    $score = $score + 10;
    $count = $count + 1;
}
echo "提升後成績: " . $score . "分 <br>";
echo "迴圈執行次數: " . $count . "次 <br>";
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
                $score = 10;
                echo "初始成績: " . $score . "分 <br>";
                $count = 0;
                while ($score < 60) {
                    $score = $score + 10;
                    $count = $count + 1;
                }
                echo "提升後成績: " . $score . "分 <br>";
                echo "迴圈執行次數: " . $count . "次 <br>";
                ?>
            </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">Foreach 練習</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>走訪成績陣列，以索引加 1 當「第幾位同學」輸出每位分數。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
$scores = [60, 70, 80, 90, 100];
foreach ($scores as $idx => $val) {
    echo "第" . ($idx + 1) . "位同學的成績為: " . $val . "分<br>";
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
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <?php
                $scores = [60, 70, 80, 90, 100];
                foreach ($scores as $idx => $val) {
                    echo "第" . ($idx + 1) . "位同學的成績為: " . $val . "分<br>";
                }
                ?>
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
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/03-forloop.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（03-forloop.php）</a>
                </li>
            </ul>
        </aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="03-forloop"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
