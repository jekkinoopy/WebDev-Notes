<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .result-card {
            background-color: var(--white);
            width: 100%;
            max-width: 400px;
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-xl);
            overflow: hidden;
            border: 1px solid var(--border-light);
            text-align: center;
        }

        .result-header {
            height: 8px;
            background: var(--gradient-primary);
        }

        .result-body {
            padding: var(--spacing-2xl) var(--spacing-xl);
        }

        .result-body h4 {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: var(--spacing-xl);
            letter-spacing: 1px;
        }

        /* 數據清單 */
        .data-list {
            display: flex;
            justify-content: space-around;
            margin-bottom: var(--spacing-2xl);
            padding: var(--spacing-md);
            background-color: var(--gray-50);
            border-radius: var(--radius-lg);
        }

        .data-item span {
            display: block;
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .data-item strong {
            font-size: 1.2rem;
            color: var(--text-primary);
        }

        /* BMI 數字主視覺 */
        .bmi-display {
            margin-bottom: var(--spacing-lg);
        }

        .bmi-value {
            font-size: 4rem;
            font-weight: 800;
            color: var(--primary-dark);
            line-height: 1;
        }

        .bmi-unit {
            font-size: 1rem;
            color: var(--text-light);
            margin-left: 5px;
        }

        /* 體態標籤 */
        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: var(--spacing-2xl);
        }

        /* 狀態色動態套用 */
        .status-normal { background-color: rgba(7, 219, 209, 0.1); color: var(--success); }
        .status-warning { background-color: rgba(231, 189, 134, 0.1); color: var(--warning); }
        .status-overweight { background-color: rgba(211, 106, 120, 0.1); color: var(--secondary); }
        .status-danger { background-color: rgba(218, 108, 108, 0.1); color: var(--danger); }

        /* 返回按鈕 */
        .btn-back {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 600;
            transition: var(--transition-base);
            padding: var(--spacing-md);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
        }

        .btn-back:hover {
            background-color: var(--gray-100);
            color: var(--primary-dark);
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET['weight'])){
            // $_GET('weight') 這就是那個印有 height 標籤的包裹，裡面裝著身高數字
            // isset($_GET('weight')) 白話解釋：這是在問：「門口有沒有一個叫做 height 的包裹？」。零件功能：它會給你一個答案（True 或 False），但它還不會去拆包裹。
            $weight=$_GET['weight'];
        };
        if(isset($_GET['height'])){
            $height=$_GET['height'];
        };
        if(isset($_POST['weight'])){
            // $_POST('weight') 這就是那個印有 height 標籤的包裹，裡面裝著身高數字
            // isset($_POST('weight')) 白話解釋：這是在問：「門口有沒有一個叫做 height 的包裹？」。零件功能：它會給你一個答案（True 或 False），但它還不會去拆包裹。
            $weight=$_POST['weight'];
        };
        if(isset($_POST['height'])){
            $height=$_POST['height'];
        };
        $bmi=round($weight/(($height/100)*($height/100)));
        if($bmi>=27){
            $status="肥胖";
            }
            elseif($bmi>=24){
                $status="過重";
                }
                elseif($bmi>18){
                    $status="正常";
                    }
                    else{
                        $status="過輕";
                    }
    ?>
    
    <div class="result-card">
        <div class="result-header"></div>
        <div class="result-body">
            <h4>您的健康指數分析</h4>

            <div class="data-list">
                <div class="data-item">
                    <span>身高</span>
                    <strong><?= htmlspecialchars($height); ?> cm</strong>
                </div>
                <div class="data-item">
                    <span>體重</span>
                    <strong><?= htmlspecialchars($weight); ?> kg</strong>
                </div>
            </div>

            <div class="bmi-display">
                <span class="bmi-value"><?= $bmi; ?></span>
                <span class="bmi-unit">BMI</span>
            </div>

            <div class="status-badge">
                你的體態為：<?= $status; ?>
            </div>

            <a href="h04-bmi.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> 重新計算
            </a>
        </div>
    </div>
</body>
</html>