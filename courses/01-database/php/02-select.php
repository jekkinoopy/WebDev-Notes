<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程控制 - WebDev Notes</title>
    <link rel="stylesheet" href="../assets/css/main.css">
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
        <h2 class="note-title">流程控制：條件判斷與迴圈</h2>
        
        <div class="code-section">
            <h3>⚡ 成績等級分配</h3>
            <div class="output-box">
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
                echo "成績: " . $score . " → 等級: " . $level;
                ?>
            </div>
        </div>
    </div>
</body>
</html>
