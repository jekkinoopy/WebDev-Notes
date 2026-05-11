<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表陣列 - 努比的全端筆記</title>
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
            <span class="category-tag">綜合練習</span>
            <h2 class="note-title">九九乘法表：陣列產生與輸出</h2>
            <p class="hero-desc">實作資料預處理邏輯，將運算結果封裝於陣列中以便後續調用。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 練習一：產生與偵錯 -->
        <div class="note-card">
            <h3 class="note-subtitle">利用程式產生陣列</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>以迴圈的方式產生一個九九乘法表</li>
                    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                    <li>使用偵錯工具觀察資料結構</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 建立空陣列
$nine = [];

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        // 使用花括號變數解析
        $nine[] = "{$i}x{$j}=" . ($i * $j);
    }
}

// 使用 pre 標籤配合 print_r 觀察陣列結構
echo "<pre>";
print_r($nine);
echo "</pre>";
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
                $nine = [];
                for ($i = 1; $i <= 9; $i++) {
                    for ($j = 1; $j <= 9; $j++) {
                        $nine[] = "{$i}x{$j}=" . ($i * $j);
                    }
                }
                echo "<pre style='background: transparent; color: inherit; overflow: auto; max-height: 400px; padding: 10px; border: 1px solid #ddd;'>";
                print_r($nine);
                echo "</pre>";
                ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>變數解析：</strong>`{$i}` 可以讓變數在字串中清晰定位，避免與後續字元混淆。</li>
                    <li><strong>記憶體共享：</strong>在同一個 PHP 檔案中，不論開多少次標籤，變數記憶體都是共享的。</li>
                    <li><strong>陣列封裝：</strong>將運算結果存入陣列，是實現「資料與顯示分離」的第一步。</li>
                </ul>
            </div>
        </div>

        <!-- 練習二：表格呈現 -->
        <div class="note-card" style="margin-top: 40px;">
            <h3 class="note-subtitle">表格視覺化顯示</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>運用 `foreach` 拆解陣列內容，並配合 `%` 取餘數邏輯進行 HTML 表格換行。</p>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
echo "<table><tr>";
foreach ($nine as $idx => $item) {
    // 判斷是否需要換行：索引大於 0 且為 9 的倍數
    if ($idx > 0 && $idx % 9 == 0) {
        echo "</tr><tr>";
    }
    echo "<td>$item</td>";
}
echo "</tr></table>";
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
                <table>
                    <tr>
                        <?php
                        foreach ($nine as $idx => $item) {
                            if ($idx > 0 && $idx % 9 == 0) {
                                echo "</tr><tr>";
                            }
                            echo "<td>$item</td>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li><strong>foreach 結構：</strong>`$idx` 代表索引（0-80），`$item` 代表內容（如 "1x1=1"）。</li>
                    <li><strong>換行邏輯：</strong>利用 `$idx % 9 == 0` 來判斷每一列的結束點。</li>
                    <li><strong>邏輯與視圖：</strong>實現了「一次計算、多處使用」的資料共享邏輯。</li>
                </ul>
            </div>

        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-03/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 3 陣列</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/11-pra07.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（11-pra07.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="11-pra07"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
