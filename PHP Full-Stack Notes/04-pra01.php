<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習一 - WebDev Notes</title>
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
        <h2 class="note-title">綜合練習一</h2>
        
        <div class="code-section">
            <h3>💡 分配成績等級</h3>
            <div class="output-box">
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
</body>
</html>
    }else if($score <=100){
        $level = 'A';
    }
    echo $level;
    ?>    
    </body>
</html>