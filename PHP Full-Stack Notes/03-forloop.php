<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop 迴圈 - WebDev Notes</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .note-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
        }
        .note-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #6366f1 0%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #6366f1;
            font-weight: 600;
            margin-bottom: 2rem;
            padding: 0.75rem 1.5rem;
            border: 2px solid #6366f1;
            border-radius: 0.5rem;
            transition: all 0.25s ease-in-out;
        }
        .back-link:hover {
            background-color: #6366f1;
            color: white;
            transform: translateX(-4px);
        }
        .code-section {
            background-color: #f9fafb;
            border-left: 4px solid #6366f1;
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .code-section h3 {
            color: #111827;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .output-box {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            padding: 1rem;
            font-family: 'Courier New', monospace;
            color: #374151;
            margin-top: 1rem;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <span class="logo-icon">📚</span>
                    <h1>WebDev Notes</h1>
                </div>
            </div>
        </nav>
    </header>

    <div class="note-container">
        <a href="../index.html" class="back-link">← 返回首頁</a>
        <h2 class="note-title">For Loop 迴圈</h2>
        
        <div class="code-section">
            <h3>🔄 For Loop 練習 1</h3>
            <div class="output-box">
                <?php
                for($i=1;$i<=10;$i=$i+1){
                    echo "$i => ";
                    echo $i * 10 ."<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>

        <div class="code-section">
            <h3>🔄 For Loop 練習 2 (遞增為2)</h3>
            <div class="output-box">
                <?php
                for($i=1;$i<=10;$i=$i+2){
                    echo "$i => ";
                    echo $i * 10 ."<br>";
                }
                echo "最終 i 值: " . $i;
                ?>
            </div>
        </div>

        <div class="code-section">
            <h3>🔄 For Loop 練習 3 (顯示為偶數)</h3>
            <div class="output-box">
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

        <div class="code-section">
            <h3>🔄 For Loop 練習 4 (顯示為奇數)</h3>
            <div class="output-box">
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

        <div class="code-section">
            <h3>🔄 While Loop 練習</h3>
            <div class="output-box">
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

        <div class="code-section">
            <h3>🔄 Foreach 練習</h3>
            <div class="output-box">
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