<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎概念 - 努比的全端筆記</title>
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
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">變數、字串引號與變數交換</h2>
            <p class="hero-desc">以範例理解單引號／雙引號與變數展開，並用「三杯水」思路交換兩變數。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">變數：單雙引號對照</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>觀察單引號字串是否解析變數、雙引號字串是否解析變數。</li>
                    <li>對照上方程式碼區與下方【執行結果】輸出。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
$a = 10;
$b = 50;
echo '$a=' . $a . '<br>'; // 單引號：不解析變數，顯示 $a=10
echo "$b=" . $b; // 雙引號：解析變數，顯示 50=50
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
                //
                //

                $a = 10;
                $b = 50;
                // 1. 這裡用單引號，會印出字串 "$a="
                echo '$a=' . $a . '<br>';

                // 2. 這裡用雙引號，PHP 會把 "$b" 換成 "50"，所以印出 "50="
                echo "$b=" . $b;
                ?>
            </div>
            </div>
        </div>
        <div class="note-card">
            <h3 class="note-subtitle">變數交換練習：三杯水交換法</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>沿用上一區塊的 <code>$a</code>、<code>$b</code>，以暫存變數完成兩數對調。</li>
                    <li>確認輸出為交換後的數值。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
$temp=$a;   // A 的值先備份到 Temp，防止數據遺失
$a=$b;      //$b的值 (50) 賦予給$a，第一步對調將 B 的內容移至 A
$b=$temp;   //把原本備份在$temp的 10 拿出來，放進$b 完成最後對調


echo '$a=' . $a;
echo '<br>';
echo '$b=' . $b;
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
                //
                //

                $temp=$a;
                $a=$b;
                $b=$temp;

                echo '$a=' . $a;
                echo '<br>';
                echo '$b=' . $b;
                ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>單雙引號：</strong>對照第一區：單引號字串內的 <code>$</code> 不當變數解析；雙引號內會解析，再與字串後方 <code>.</code> 串接的值一起看輸出。</li>
                    <li><strong>變數交換：</strong>用暫存（<code>$temp</code>），避免兩邊直接互指定時覆蓋掉其中一個原值。</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="01-basic"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
