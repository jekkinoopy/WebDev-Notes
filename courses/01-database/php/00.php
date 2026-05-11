<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>題目範本名稱 - 努比的全端筆記</title>
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
            <h2 class="note-title">流程控制實作練習</h2>
            <p class="hero-desc">題目描述（與 12-pra08.php 同層級之 hero）</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">題目名稱</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>條列題目／需求要點一</li>
                    <li>條列題目／需求要點二</li>
                    <li>可增刪項目</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處呈現練習思路及程式碼內容

// （與上兩行之間空一至兩行後再寫主程式）

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

                // 與上方 note-code-window 對應之可執行碼；輸出在下方。
                ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>
                        <strong>流程總結：</strong>
                        <ul class="custom-list learning-sublist">
                            <li><strong>步驟一：</strong>說明（可含 <code>…</code>）</li>
                            <li><strong>步驟二：</strong>說明</li>
                            <li>細節見上方程式註解。</li>
                        </ul>
                    </li>
                    <li>
                        <strong>概念補充</strong>
                        <ul class="custom-list learning-sublist">
                            <li>
                                <strong>A</strong>：<br>
                                短文。
                            </li>
                            <li>
                                <strong>B</strong>：<br>
                                短文。
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!--
              延伸閱讀（三相關站點請對應到「本頁主題」，勿連無關文章）：
              1）php-book：換成該課對應的單篇文章（例：威力彩題見 Lesson 3 陣列
                 https://mackliu.github.io/php-book/2021/09/19/basic-lesson-03/ ）
              2）11501-FULL-BASIC：https://github.com/mackliu/11501-FULL-BASIC/blob/main/本頁同名.php
              3）115-html：有對應檔可改為 blob／raw 連結；否則可先連 repo 首頁
              無需此區時整段刪除；連結多 aside 可加 class note-reference-box--scroll
            -->
            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://mackliu.github.io/php-book/" target="_blank" rel="noopener noreferrer">月光林地教材（請改為本主題對應單篇）</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/11501-FULL-BASIC" target="_blank" rel="noopener noreferrer">11501 程式基礎（請改為 blob/main/本頁檔名.php）</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/115-html" target="_blank" rel="noopener noreferrer">115 HTML 課程範例（有對應檔請換成該檔連結）</a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
</body>

</html>
