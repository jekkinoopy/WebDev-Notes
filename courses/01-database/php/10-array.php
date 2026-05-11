<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列基礎 - 努比的全端筆記</title>
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
            <h2 class="note-title">陣列基礎</h2>
            <p class="hero-desc">學習如何將多筆零散數據整合，建立系統化的資料索引。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">學生的成績資料</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>設計一個陣列(一維或多維)來存放學生的成績資料並以表格呈現。</p>
                <img src="images/10-1.png" alt="">
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
$students = [
    "judy"  => ["國文" => 95, "英文" => 64, "數學" => 70, "地理" => 90, "歷史" => 84],
    "amo"   => ["國文" => 88, "英文" => 78, "數學" => 54, "地理" => 81, "歷史" => 71],
    "john"  => ["國文" => 45, "英文" => 60, "數學" => 68, "地理" => 70, "歷史" => 62],
    "peter" => ["國文" => 59, "英文" => 32, "數學" => 77, "地理" => 54, "歷史" => 42],
    "hebe"  => ["國文" => 71, "英文" => 62, "數學" => 80, "地理" => 62, "歷史" => 64],
];

echo "<table>";
echo "<tr><td></td><td>國文</td><td>英文</td><td>數學</td><td>地理</td><td>歷史</td></tr>";
foreach ($students as $student => $scores) {
    echo "<tr><td>$student</td>";
    foreach ($scores as $score) {
        echo "<td>$score</td>";
    }
    echo "</tr>";
}
echo "</table>";
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
                $students = [
                    "judy" => ["國文" => 95, "英文" => 64, "數學" => 70, "地理" => 90, "歷史" => 84],
                    "amo" => ["國文" => 88, "英文" => 78, "數學" => 54, "地理" => 81, "歷史" => 71],
                    "john" => ["國文" => 45, "英文" => 60, "數學" => 68, "地理" => 70, "歷史" => 62],
                    "peter" => ["國文" => 59, "英文" => 32, "數學" => 77, "地理" => 54, "歷史" => 42],
                    "hebe" => ["國文" => 71, "英文" => 62, "數學" => 80, "地理" => 62, "歷史" => 64],
                ];

                echo "<table>";
                echo "<tr><td></td><td>國文</td><td>英文</td><td>數學</td><td>地理</td><td>歷史</td></tr>";
                foreach ($students as $student => $scores) {
                    echo "<tr><td>$student</td>";
                    foreach ($scores as $score) {
                        echo "<td>$score</td>";
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
                    <li>使用關聯陣列 (Associative Array) 巢狀結構儲存複雜資料。</li>
                    <li>運用 foreach 雙層迴圈拆解多維陣列的鍵 (Key) 與值 (Value)。</li>
                    <li>在迴圈中動態產生 HTML Table 標籤以結構化呈現數據。</li>
                </ul>
            </div>

            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-03/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 3 陣列</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/10-array.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（10-array.php）</a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="10-array"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
