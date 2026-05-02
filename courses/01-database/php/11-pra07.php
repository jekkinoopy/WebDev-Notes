<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表陣列 - 努比的全端筆記</title>
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
            <h2 class="note-title">九九乘法表：陣列產生與輸出</h2>
            <p class="hero-desc">實作資料預處理邏輯，將運算結果封裝於陣列中以便後續調用。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">利用程式產生陣列</h3>
            <ul class="custom-list">
                <li>以迴圈的方式產生一個九九乘法表</li>
                <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                <li>再以迴圈方式將陣列內容印出</li>
            </ul>
            <pre><code><?php
// 使用 Heredoc (<<<EOD) 定義字串，確保展示區不報錯
$code = <<<'EOD'
// 在此處實作雙層迴圈儲存至陣列與輸出邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>
            <div class="code-section"> 
                <?php

                    for($i=1;$i<=9;$i++){
                        for($j=1;$j<=9;$j++){
                            echo "$i*$j" . "=" . $i*$j . "&nbsp&nbsp&nbsp";
                        }
                        echo "<br>";
                    };



                ?>
                
            </div> 
        </div>
    </div>
</body>

</html>