<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>綜合練習一 - 努比的全端筆記</title>
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
      <span class="category-tag">程式基礎概念</span>
      <h2 class="note-title">成績等級判定</h2>
      <p class="hero-desc">運用 <code>if...else</code> 多重分支邏輯，實作自動化成績等級分類系統。</p>
      <div class="hero-divider"></div>
    </div>
  </section>
  <div class="note-container">
    <div class="note-card">
      <h3>分配成績等級</h3>
      <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
$score = 71;
$level = '';
if($score >=0 && $score <60){
    $level = 'E';
}else if($score >=60 && $score <70){
    $level = 'D';
}else if($score >=70 && $score <80){
    $level ='C';
}else if($score >=80 && $score <90){
    $level = 'B';
}else if($score >=90 && $score <=100){
    $level = 'A';
}else{
    $level = '成績輸入錯誤';
}
echo "您的成績是: <strong>" . $score . "</strong> → 等級: <strong>" . $level . "</strong>";
EOD;
echo htmlspecialchars($code); 
?></code></pre>
      <div class="code-section">
        給定一個成績數字，根據成績所在的區間，給定等級：<br>
        0 ~ 59 => E <br>
        60 ~ 69 => D <br>
        70 ~ 79 => C <br>
        80 ~ 89 => B <br>
        90 ~ 100 => A <br><br>
        <?php
                $score = 71;
                $level = '';
                if($score >=0 && $score <60){
                    $level = 'E';
                }else if($score >=60 && $score <70){
                    $level = 'D';
                }else if($score >=70 && $score <80){
                    $level ='C';
                }else if($score >=80 && $score <90){
                    $level = 'B';
                }else if($score >=90 && $score <=100){
                    $level = 'A';
                }else{
                    $level = '成績輸入錯誤';
                }
                echo "您的成績是: <strong>" . $score . "</strong> → 等級: <strong>" . $level . "</strong>";
                ?>
      </div>
    </div>
  </div>

    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="04-pra01"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>