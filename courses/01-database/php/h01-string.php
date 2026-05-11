<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理 - 努比的全端筆記</title>
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
            <span class="category-tag">基礎課程</span>
            <h2 class="note-title">字串處理</h2>
            <p class="hero-desc">掌握字串操作函式，實現精準的數據處理與頁面呈現。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <!-- 函式參考表 -->
        <div class="note-card">
            <h3 class="note-subtitle">常用字串函式表</h3>
            <div class="learning-point-box">
                <table>
                    <tr>
                        <th>函式</th>
                        <th>功能說明</th>
                    </tr>
                    <tr><td>substr() / mb_substr()</td><td>從原字串中取出部份字串</td></tr>
                    <tr><td>trim()</td><td>去除頭尾空白</td></tr>
                    <tr><td>str_repeat()</td><td>重覆特定字元</td></tr>
                    <tr><td>str_replace()</td><td>取代字串</td></tr>
                    <tr><td>explode()</td><td>以特定字串/字元/符號分割字串</td></tr>
                    <tr><td>implode() / join()</td><td>以特定字串/字元/符號將陣列元素合併成字串</td></tr>
                    <tr><td>strpos()</td><td>返回某字元在字串中首次出現的位置</td></tr>
                    <tr><td>strlen()</td><td>取得字串長度</td></tr>
                </table>
            </div>
        </div>

        <!-- 練習 1：字串取代與分割 -->
        <div class="note-card">
            <h3 class="note-subtitle">字串取代、分割與組合</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                1. 將 ”aaddw1123” 改成 ”*********”。<br>
                2. 將 ”this,is,a,book” 依 ”,” 切割後成為陣列。<br>
                3. 將上例陣列重新組合成 “this is a book”。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 1. 將 ”aaddw1123” 改成 ”*********”

// 2. 將 ”this,is,a,book” 依 ”,” 切割後成為陣列

// 3. 將上例陣列重新組合成 “this is a book”

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
                    echo "1.";
                    $str="aaddw1123";
                    $str=str_replace(["a","d","w"],"*",$str);
                    echo "$str";


                ?>
            </div>
        </div>

        <!-- 練習 2：子字串取用與 HTML 整合 -->
        <div class="note-card">
            <h3 class="note-subtitle">子字串取用與 HTML 關鍵字整合</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                1. 將 ”The reason why a great man is great is that he resolves to be a great man” 只取前十字成為 ”The reason…”。<br>
                2. 給定一句子，將指定關鍵字 “程式設計” 放大字型或變色。
            </div>
            <?php
$code = <<<'EOD'
// 【程式碼練習】
$quote = "The reason why a great man is great is that he resolves to be a great man";
$sentence = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword = "程式設計";

// 1. 子字串取用

// 2. 關鍵字與 HTML/CSS 整合應用

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
                $str="喜歡水晶男孩，是因為在他們身上能看見「時間的溫柔」。作為元祖偶像，他們擁有跨越世代的實力與金曲，旋律朗朗上口，讓不同年齡層都能共情。

更迷人的是那份從未改變的真誠。即便歲月更迭，成員間相處依舊像大男孩般純粹，既有成熟男人的內斂與擔當，又保有調皮反差的魅力。這種不刻意包裝的「真」，讓老粉絲重拾青春回憶，也讓新一代被他們專業卻不失溫度的精神吸引。他們不只是偶像，更是一種陪伴與堅持的象徵。";
echo "$str";
$keyword="水晶男孩";
$tmp="<a href='#' style='color:yellow;'>$keyword</a>";
if(strpos($str)
    ){};
echo "$str";
            
                
                ?>
            </div>

            <!-- 學習重點 -->
            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>處理中文字串（全形字）時，應優先使用 `mb_` 系列函式避免長度計算錯誤。</li>
                    <li>字串取代函式是將後端數據與前端 CSS 樣式結合的常用手段。</li>
                </ul>
            </div>

            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-01/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 1（變數與字串）</a>
                    </li>
                    <li>
                        <a href="https://github.com/mackliu/11501-FULL-BASIC/blob/main/h01-string.php" target="_blank" rel="noopener noreferrer">11501 全端班：本題對照原始碼（h01-string.php）</a>
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
        <div id="note-lesson-nav-root" data-lesson-id="h01-string"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>