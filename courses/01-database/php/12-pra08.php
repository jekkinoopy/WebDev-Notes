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
            <ul class="custom-list">
                <li>使用亂數函式 rand($a, $b) 來產生號碼</li>
                <li>將產生的號碼順序存入陣列中</li>
                <li>每次存入前先檢查陣列資料是否重複 (in_array)</li>
                <li>完成選號後將陣列內容印出</li>
            </ul>
            <pre><code><?php
                    $lotto=[];// 1. 初始化空陣列(從零開始)

                    // 2. 進入迴圈：只要數量少於 6 就重複執行

    // while(count($lotto)<6){
    //     $tmp=rand(1,38);
    //     // 3. 隨機取號
    //     if(!in_array($tmp,$lotto)){
    //         $lotto[]=$tmp;
    //         }
    //     }            foreach($lotto)
                    
            ?></code></pre>
            <div class="code-section">
    
            </div>
<p>
    note:if (只執行一次)：
    它像是一個路口警衛。當你經過時，他檢查你的證件（條件），符號就讓你進去走一次，不符合就叫你繞路走。他不會抓著你叫你重複走。
    
    while (重複執行直到不符)：
    它像是一個迴圈操場。當你符合條件時，他會叫你進去跑一圈。跑完後，他會立刻把你抓回起點再檢查一次條件。只要條件還成立，你就要一直跑下去，直到你死去為止。
    
</p>
<div class="note-container">
    <!-- 加上 CSS 樣式來撐開高度 -->
    <iframe 
        src="https://hackmd.io/@egXmVFKSSCCUA8IhBuQ7Gw/rk9rjYX0Wl" 
        style="width: 100%; height: 600px; border: 1px solid #ddd; border-radius: 8px;"
        frameborder="0">
    </iframe>
</div>        </div>
    </div>
</body>

</html>