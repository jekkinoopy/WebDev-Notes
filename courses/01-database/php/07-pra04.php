<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表（表格／交叉）- 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/note-code-window.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">九九乘法表（表格／交叉）</h2>
            <p class="hero-desc">製作表格版（含完整算式）與交叉乘積版兩種呈現；可對照題圖與解題參考驗證。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">以表格排列的九九乘法表</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>使用巢狀 <code>for</code> 迴圈輸出 1〜9 的<strong>九九乘法表</strong>。</li>
                    <li>每一格需顯示完整算式與結果（例如 <code>2x4=8</code>）。</li>
                    <li>請用 HTML <strong>表格（table）</strong>排列，行列對齊與對照以題目示意圖為準。</li>
                    <li>可搭配下方的<strong>九九乘法解題參考</strong>題圖確認排版與內容是否正確。</li>
                </ul>
                <img src="images/07-1.png" alt="九九乘法表表格版題目示意">
            </div>

            <?php
$code1 = <<<'EOD'
// 【程式碼練習】
echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "{$i}x{$j}=" . $i*$j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
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
                    // 【程式碼練習】
                    //
                    //
                    echo "<table>";
                    for($j=1;$j<=9;$j++){
                        echo "<tr>";
                        for($i=1;$i<=9;$i++){
                            echo "<td>";
                            echo "{$i}x{$j}=" . $i*$j;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>巢狀迴圈可同時控制列與欄：外層跑列、內層跑欄。</li>
                    <li>表格輸出時，要對應補上 <code>&lt;tr&gt;</code> 與 <code>&lt;td&gt;</code> 的開關標籤，避免版面錯位。</li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">以交叉計算結果呈現的九九乘法表</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>以<strong>乘積數值（交叉計算結果）</strong>呈現對照矩陣。</li>
                    <li>依題意的行列方向與標頭對齊題目。</li>
                    <li>每一格需顯示對應兩數相乘的結果，不顯示完整文字算式。</li>
                    <li>請對照下列示意圖，並可復核<strong>九九乘法解題參考</strong>確認每一格結果。</li>
                </ul>
                <img src="images/07-2.png" alt="九九乘法交叉表題目示意">
            </div>

            <?php
$code2 = <<<'EOD'
// 【程式碼練習】
echo "<table>";
echo "<tr>";
for($h=1;$h<=9;$h++){
    echo "<td>{$h}</td>";
}
echo "</tr>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo $i*$j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "<tr>";
for($h=1;$h<=9;$h++){
    echo "<td>{$h}</td>";
}
echo "</tr>";
echo "</table>";
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
                    // 【程式碼練習】
                    //
                    //
                    echo "<table>";
                    echo "<tr>";
                    for($h=1;$h<=9;$h++){
                        echo "<td>{$h}</td>";
                    }
                    echo "</tr>";
                    for($j=1;$j<=9;$j++){
                        echo "<tr>";
                        for($i=1;$i<=9;$i++){
                            echo "<td>";
                            echo $i*$j;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "<tr>";
                    for($h=1;$h<=9;$h++){
                        echo "<td>{$h}</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    ?>
                </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>交叉矩陣只顯示乘積，內容與算式版的差異在儲存格文案。</li>
                    <li>可先建立表頭再跑主體列，最後再補一列對照，讓版面更容易核對。</li>
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
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/07-pra04.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（07-pra04.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="07-pra04"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
