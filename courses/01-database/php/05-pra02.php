<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷 - 努比的全端筆記</title>
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
            <h2 class="note-title">閏年判斷實戰</h2>
            <p class="hero-desc">運用邏輯運算子，實作精準的閏年週期判定邏輯。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">閏年判斷</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <p>地球對太陽的公轉一年的真實時間大約是 365 天 5 小時 48 分 46 秒，因此以 365 天定為一年的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</p>
                <br>
                <p>1. 公元年分除以 4 不可整除，為平年。<br>
                2. 公元年分除以 4 可整除但除以 100 不可整除，為閏年。<br>
                3. 公元年分除以 100 可整除但除以 400 不可整除，為平年。</p>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處實作練習邏輯
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
                <?php // 執行結果預留位置
                // $year=2020;
                // if($year % 4 != 0;){
                //     echo "平年";
                //     else($year % 4)
                // }




                // 我想的
                // if($year % 4==0){
                //     // $result = "閏年";
                //     if($year % 100 !=0){
                //         $result = "閏年";
                //     }
                //     }
                // else{
                //     // $result = "平年";
                //     if($year % 400 !=0){
                //         $result = "平年";   
                //     }
                // }

                //巢狀判斷
                // if($year % 4 == 0){
                //     // $result = "閏年";
                //     if($)
                //     else{
                //         $result = "平年";
                //     };                   
                // }

                
                //echo "西元 $year 年是 $result";
                //
              ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>在此紀錄關鍵函式或邏輯思維</li>
                    <li>標記需要特別注意的語法細節</li>
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
                    <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/05-pra02.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（05-pra02.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="05-pra02"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
