<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩選號 - 努比的全端筆記</title>
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
                <strong>題目需求：</strong>
                <ul class="custom-list">
                    <li>使用亂數函式 rand($a, $b) 來產生號碼</li>
                    <li>將產生的號碼順序存入陣列中</li>
                    <li>每次存入前先檢查陣列資料是否重複 (in_array)</li>
                    <li>完成選號後將陣列內容印出</li>
                </ul>
            </div>

            <pre><code><?php
$code = <<<'EOD'
// 【 程式碼練習 】
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
echo htmlspecialchars($code);
?></code></pre>

            <div class="code-section">
                <span class="section-label">【 執行結果 】</span>
                <?php
                // 【 程式碼練習 】
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

            <div class="learning-point-box">
                <p class="learning-point-title">學習重點</p>
                <!-- 影片1122 -->
                <ul class="custom-list">
                    <li>
                        <strong>流程總結：</strong>用 <code>while (count($lotto) &lt; 6)</code> 湊齊數量；每次 <code>rand(1, 38)</code> 後用 <code>!in_array($tmp, $lotto)</code> 擋重複，再 <code>$lotto[] = $tmp</code>。細節見上方程式註解。
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
                    <li>
                        延伸閱讀：<a href="https://hackmd.io/@egXmVFKSSCCUA8IhBuQ7Gw/rk9rjYX0Wl">樂透不重複抽號邏輯</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
