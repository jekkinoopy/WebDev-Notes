<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎概念 - WebDev Notes</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <style>
        /* .note-container {
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

        }*/
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
                    <ul class="nav-links">
                        <li><a href="../../../index.html">首頁</a></li>
                        <li><a href="index.html">HTML 課程</a></li>
                    </ul>
            </div>
        </nav>
    </header>

    <div class="note-container">
        <a href="../index.html" class="back-link">← 返回首頁</a>
        <h2 class="note-title">程式基礎概念</h2>
        
        <div class="note-card">
            <h3>變數交換練習</h3>
            <pre><code><?php
            $code = '<?php
            $a = 10;
            $b = 50;
            echo "$a=" . $a;
            ?>';

            echo htmlspecialchars($code); 
            ?>
            </code></pre>
            <div class="code-section">
                <?php
                $a=10;
                $b=50;
                echo "$a=" . $a . "<br>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>