<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">PHP 基礎</span>
            <!-- 在此處呈現題目分類-->
            <h2 class="note-title">流程控制實作練習</h2>
            <!-- 在此處呈現題目描述-->
            <p class="hero-desc">題目描述</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <!-- 在此處呈現練習題目及題目需求-->
            <h3 class="note-subtitle">題目名稱</h3>
            <div class="ques-section">
                <strong>題目需求：</strong>
                題目需求內容
            </div>
            <!-- 1. 程式碼練習（標題以註解寫在黑底區塊第一行；與底下練習空一至兩行） -->
            <pre><code><?php
$code = <<<'EOD'
// 【 程式碼練習 】
//
//

// 在此處呈現練習思路及程式碼內容
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <!-- 2. 執行結果：與他頁相同，僅 code-section 一層區塊樣式；輸出依題目而定（表格／純文字皆可） -->
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span>
                <?php // 實際練習區 執行結果在此呈現?>
            </div>

            <!-- 3. 學習重點 -->
            <div class="learning-point-box">
                <p class="learning-point-title">學習重點</p>
                <ul class="custom-list">
                    <!-- 在此紀錄關鍵函式或邏輯思維 標記需要特別注意的語法細節-->
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
