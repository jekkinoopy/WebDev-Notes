<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <style>
        /* ================================================
           直接調用努比的 CSS 變數
           ================================================ */


/* 卡片容器佈局：讓兩張卡片並排 */
        .cards-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: var(--spacing-xl);
            justify-content: center;
            padding: var(--spacing-lg) 0;
        }

        /* 卡片主體 */
        .card {
            background-color: var(--white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 350px;
            overflow: hidden;
            border: 1px solid var(--border-light);
            transition: var(--transition-base);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .card-content {
            padding: var(--spacing-xl);
            position: relative;
        }

        /* 頂部 Icon */
        .icon-top {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            margin: 0 auto var(--spacing-md);
            box-shadow: var(--shadow-md);
        }

        .card-content h2 {
            font-size: 1.25rem;
            text-align: center;
            margin-bottom: var(--spacing-xl);
            color: var(--text-primary);
        }

        /* 輸入框組群 (含 Icon) */
        .input-group {
            position: relative;
            margin-bottom: var(--spacing-lg);
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            font-size: 1.1rem;
        }

        .input-group input {
            width: 100%;
            padding: var(--spacing-md) var(--spacing-md) var(--spacing-md) 45px; /* 左邊留空間給 Icon */
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            background-color: var(--gray-50);
            font-family: var(--font-sans);
            transition: var(--transition-fast);
            box-sizing: border-box;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: var(--white);
            box-shadow: 0 0 0 3px rgba(86, 204, 242, 0.1);
        }

        /* 送出按鈕 */
        button {
            width: 100%;
            padding: var(--spacing-md);
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            border-radius: var(--radius-md);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            transition: var(--transition-base);
            box-shadow: var(--shadow-md);
        }

        button:hover {
            filter: brightness(1.08);
            box-shadow: var(--shadow-lg);
        }

        button i {
            font-size: 0.9rem;
        }

    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">網頁傳值練習</span>
            <h2 class="note-title">BMI 計算實作</h2>
            <p class="hero-desc">練習透過 Form 表單傳遞數據至後端進行運算並顯示結果。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">BMI 計算</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                1. 建立一個可以輸入身高和體重的表單畫面。<br>
                2. 按下「計算BMI」按鈕後，在另一個頁面顯示 BMI 值。
            </div>

            <pre><code><?php
$code = <<<'EOD'
// 在此處實作表單與 BMI 運算邏輯
EOD;
echo htmlspecialchars($code);
?></code></pre>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>

<!-- 表單卡片區 -->
    <div class="cards-wrapper">
        
        <!-- 卡片 1: GET -->
        <div class="card">
            <div class="card-content">
                <div class="icon-top">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h2>BMI 計算表單(GET)</h2>

                <form action="h04-bmi-1.php" method="get">
                    <div class="input-group">
                        <i class="fa-solid fa-ruler-vertical"></i>
                        <input type="number" name="height" placeholder="請輸入身高 (cm)" step="0.1" required>
                    </div>

                    <div class="input-group">
                        <i class="fa-solid fa-weight-scale"></i>
                        <input type="number" name="weight" placeholder="請輸入體重 (kg)" step="0.1" required>
                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-calculator"></i> 送出計算
                    </button>
                </form>
            </div>
        </div>

        <!-- 卡片 2: POST -->
        <div class="card">
            <div class="card-content">
                <div class="icon-top">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h2>BMI 計算表單(POST)</h2>

                <form action="h04-bmi-1.php" method="post">
                    <div class="input-group">
                        <i class="fa-solid fa-ruler-vertical"></i>
                        <input type="number" name="height" placeholder="請輸入身高 (cm)" step="0.1" required>
                    </div>

                    <div class="input-group">
                        <i class="fa-solid fa-weight-scale"></i>
                        <input type="number" name="weight" placeholder="請輸入體重 (kg)" step="0.1" required>
                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-calculator"></i> 送出計算
                    </button>
                </form>
            </div>
        </div>

    </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>在此紀錄關鍵函式或邏輯思維</li>
                    <li>標記需要特別注意的語法細節</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="h04-bmi"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>