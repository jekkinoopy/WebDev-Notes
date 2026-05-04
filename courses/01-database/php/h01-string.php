<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理 - 努比的全端筆記</title>
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
                <strong>練習需求：</strong><br>
                1. 將 ”aaddw1123” 改成 ”*********”。<br>
                2. 將 ”this,is,a,book” 依 ”,” 切割後成為陣列。<br>
                3. 將上例陣列重新組合成 “this is a book”。
            </div>
            <pre><code><?php
$code = <<<'EOD'
// 1. 將 ”aaddw1123” 改成 ”*********”

// 2. 將 ”this,is,a,book” 依 ”,” 切割後成為陣列

// 3. 將上例陣列重新組合成 “this is a book”

EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span>
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
                <strong>練習需求：</strong><br>
                1. 將 ”The reason why a great man is great is that he resolves to be a great man” 只取前十字成為 ”The reason…”。<br>
                2. 給定一句子，將指定關鍵字 “程式設計” 放大字型或變色。
            </div>
            <pre><code><?php
$code = <<<'EOD'
$quote = "The reason why a great man is great is that he resolves to be a great man";
$sentence = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword = "程式設計";

// 1. 子字串取用

// 2. 關鍵字與 HTML/CSS 整合應用

EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section">
                <span class="section-label">【 執行結果 】</span>
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
                <p class="learning-point-title">學習重點</p>
                <ul class="custom-list">
                    <li>處理中文字串（全形字）時，應優先使用 `mb_` 系列函式避免長度計算錯誤。</li>
                    <li>字串取代函式是將後端數據與前端 CSS 樣式結合的常用手段。</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>