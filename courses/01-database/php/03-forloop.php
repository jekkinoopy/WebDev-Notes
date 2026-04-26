<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop 迴圈 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">

</head>
<body>
    <header class="header">
        <nav class="navbar"></nav>
<script src="/WebDev-Notes/assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">程式基礎概念</span>
            <h2 class="note-title">For Loop 迴圈</h2>
            <p class="hero-desc">掌握 <code>for</code>、<code>while</code> 與 <code>foreach</code>，學會自動化重複任務與陣列資料處理。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>For Loop 練習 1</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
for($i=1;$i<=10;$i=$i+1){
        echo "$i => ";
        echo $i * 10 ."<br>";
    }
    echo "最終 i 值: " . $i;
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                for($i=1;$i<=10;$i=$i+1){
                    echo "$i => ";
                    echo $i * 10 ."<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>
        <div class="note-card">
            <h3>For Loop 練習 2 (遞增為2)</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
for($i=1;$i<=10;$i=$i+2){
    echo "$i => ";
    echo $i * 10 ."<br>";
}
echo "最終 i 值: " . $i;
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                for($i=1;$i<=10;$i=$i+2){
                    echo "$i => ";
                    echo $i * 10 ."<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>
        <div class="note-card">
            <h3>For Loop 練習 3 (顯示為偶數)</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
for($i=0;$i<=10;$i=$i+1){
    echo "$i => ";
    echo $i * 2 ."<br>";
    if($i*2>=10){
        break;
    }
}
echo "最終 i 值: " . $i;
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                for($i=0;$i<=10;$i=$i+1){
                    echo "$i => ";
                    echo $i * 2 ."<br>";
                    if($i*2>=10){
                        break;
                    }
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>

        <div class="note-card">
            <h3>For Loop 練習 4 (顯示為奇數)</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
for($i=0;$i<=10;$i=$i+1){
    echo "$i => ";
    echo $i * 2 +1  ."<br>";
    if(($i*2+1)>=10){
        break;
    }
}
echo "最終 i 值: " . $i;

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                for($i=0;$i<=10;$i=$i+1){
                    echo "$i => ";
                    echo $i * 2 +1  ."<br>";
                    if(($i*2+1)>=10){
                        break;
                    }
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>

        <div class="note-card">
            <h3>While Loop 練習</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
$score = 10;
echo "初始成績: " . $score ."分 <br>";
$count = 0;
while($score < 60){
    $score = $score + 10;
    $count = $count +1;
}    
echo "提升後成績: " .$score . "分 <br>";
echo "迴圈執行次數: " .$count . "次 <br>";
EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                $score = 10;
                echo "初始成績: " . $score ."分 <br>";
                $count = 0;
                while($score < 60){
                    $score = $score + 10;
                    $count = $count +1;
                }    
                echo "提升後成績: " .$score . "分 <br>";
                echo "迴圈執行次數: " .$count . "次 <br>";
                ?>
            </div>
        </div>

        <div class="note-card">
            <h3>Foreach 練習</h3>
                        <pre><code><?php
        // 使用 Heredoc (<<<EOD) 定義字串，這樣裡面放單引號或雙引號都不會出錯
$code = <<<'EOD'
$scores = [60,70,80,90,100];
foreach($scores as $idx => $val){
echo "第" .($idx+1) ."位同學的成績為: " .$val ."分<br>";

EOD;
echo htmlspecialchars($code); 
?></code></pre>
            <div class="code-section">
                <?php
                $scores = [60,70,80,90,100];
                foreach($scores as $idx => $val){
                    echo "第" .($idx+1) ."位同學的成績為: " .$val ."分<br>";
                }
                ?>
            </div>
        </div>

    </div>
</body>
</html>