<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩選號 - 努比的全端筆記</title>
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
            <h2 class="note-title">威力彩電腦選號</h2>
            <p class="hero-desc">實作不重複隨機數演算法，確保每一組選號符合邏輯規範。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">不重複電腦選號</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>使用亂數函式 rand($a, $b) 來產生號碼</li>
                    <li>將產生的號碼順序存入陣列中</li>
                    <li>每次存入前先檢查陣列資料是否重複 (in_array)</li>
                    <li>完成選號後將陣列內容印出</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處呈現練習思路及程式碼內容

$lotto=[];
// 1. 初始化空陣列(從零開始)
// 2. 進入迴圈：只要數量少於 6 就重複執行

while(count($lotto)<6){
    // count()：項目總數
    // 隨機取號
    $tmp=rand(1,38);
    // rand(1, 38)： PHP 的隨機數產生。第一個參數 1 是最小值。第二個參數 38 是最大值。
    // $tmp：這是一個暫存變數  

      echo '這是$tmp:' . "$tmp," . '<br>';
    if(!in_array($tmp,$lotto)){
        // !in_array檢查$tmp是不是已經在$lotto裡面(有沒有重複)
        $lotto[]=$tmp;
        // 沒有在$lotto[]裡面 就放進去$lotto[]
        
        
        // 如果寫if(in_array($tmp,$lotto)){
            //     如果在裡面就???? 
            //     }else{
                //         $lotto[]=$tmp;
                // }
                //if ture沒有明確指令在裡面 所以在判斷式加!反轉 不用else
        echo nl2br(print_r($lotto, true));
    }
}
echo "<hr>";
foreach($lotto as $num){
    echo '這是$num' . "$num,";
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
                // 【程式碼練習】
                //
                //

                $lotto = [];
                // 1. 初始化空陣列(從零開始)

                // 2. 進入迴圈：只要數量少於 6 就重複執行

                while (count($lotto) < 6) {
                    // count()：項目總數
                    // 隨機取號
                    $tmp = rand(1, 38);
                    // rand(1, 38)： PHP 的隨機數產生。第一個參數 1 是最小值。第二個參數 38 是最大值。
                    // $tmp：這是一個暫存變數

                    echo '這是$tmp:' . "$tmp," . '<br>';
                    if (!in_array($tmp, $lotto)) {
                        // !in_array檢查$tmp是不是已經在$lotto裡面(有沒有重複)
                        $lotto[] = $tmp;
                        // 沒有在$lotto[]裡面 就放進去$lotto[]

                        // 如果寫if(in_array($tmp,$lotto)){
                        //     如果在裡面就????
                        // }else{
                        //         $lotto[]=$tmp;
                        // }
                        //if ture沒有明確指令在裡面 所以在判斷式加!反轉 不用else
                        echo nl2br(print_r($lotto, true));
                    }
                }
                echo "<hr>";
                foreach ($lotto as $num) {
                    echo '這是$num' . "$num,";
                }
                ?>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <!-- 影片1122 -->
                <ul class="custom-list">
                    <li>
                        <strong>流程總結：</strong>
                        <ul class="custom-list learning-sublist">
                            <li><strong>迴圈條件：</strong>用 <code>while (count($lotto) &lt; 6)</code>，湊滿 6 個號碼才結束。</li>
                            <li><strong>隨機取號：</strong>每次 <code>rand(1, 38)</code> 產生一個暫存 <code>$tmp</code>。</li>
                            <li><strong>擋重複：</strong><code>!in_array($tmp, $lotto)</code> 為真才表示這個號還沒出現過。</li>
                            <li><strong>寫入陣列：</strong>通過檢查後執行 <code>$lotto[] = $tmp</code>。</li>
                            <li>細節見上方程式註解。</li>
                        </ul>
                    </li>
                    <li>
                        <strong>if 與 while 的差別</strong>
                        <ul class="custom-list learning-sublist">
                            <li>
                                <strong>if</strong>（只執行一次）：<br>
                                它像是一個路口警衛。當你經過時，他檢查你的證件（條件），符號就讓你進去走一次，不符合就叫你繞路走。他不會抓著你叫你重複走。
                            </li>
                            <li>
                                <strong>while</strong>（重複執行直到不符）：<br>
                                它像是一個迴圈操場。當你符合條件時，他會叫你進去跑一圈。跑完後，他會立刻把你抓回起點再檢查一次條件。只要條件還成立，你就要一直跑下去，直到你死去為止。
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <aside class="note-reference-box" aria-label="延伸閱讀">
                <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
                <ul class="note-reference-list">
                    <li>
                        <a href="https://hackmd.io/@egXmVFKSSCCUA8IhBuQ7Gw/rk9rjYX0Wl" target="_blank" rel="noopener noreferrer">樂透不重複抽號邏輯</a>
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
