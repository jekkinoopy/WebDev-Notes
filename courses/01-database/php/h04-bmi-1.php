<?php
declare(strict_types=1);

$heightRaw = null;
$weightRaw = null;
if (isset($_GET['height'], $_GET['weight'])) {
    $heightRaw = $_GET['height'];
    $weightRaw = $_GET['weight'];
} elseif (isset($_POST['height'], $_POST['weight'])) {
    $heightRaw = $_POST['height'];
    $weightRaw = $_POST['weight'];
}

if ($heightRaw === null || $weightRaw === null) {
    header('Location: h04-bmi.php', true, 302);
    exit;
}

$height = filter_var($heightRaw, FILTER_VALIDATE_FLOAT);
$weight = filter_var($weightRaw, FILTER_VALIDATE_FLOAT);

if ($height === false || $weight === false || $height <= 0) {
    header('Location: h04-bmi.php', true, 302);
    exit;
}

$bmi = (int) round($weight / (($height / 100) * ($height / 100)));

if ($bmi >= 27) {
    $status = '肥胖';
} elseif ($bmi >= 24) {
    $status = '過重';
} elseif ($bmi > 18) {
    $status = '正常';
} else {
    $status = '過輕';
}

$heightDisplay = htmlspecialchars((string) $height, ENT_QUOTES, 'UTF-8');
$weightDisplay = htmlspecialchars((string) $weight, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算結果 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <div class="result-card">
        <div class="result-header"></div>
        <div class="result-body">
            <h4>您的健康指數分析</h4>

            <div class="data-list">
                <div class="data-item">
                    <span>身高</span>
                    <strong><?php echo $heightDisplay; ?> cm</strong>
                </div>
                <div class="data-item">
                    <span>體重</span>
                    <strong><?php echo $weightDisplay; ?> kg</strong>
                </div>
            </div>

            <div class="bmi-display">
                <span class="bmi-value"><?php echo (int) $bmi; ?></span>
                <span class="bmi-unit">BMI</span>
            </div>

            <div class="status-badge">
                你的體態為：<?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?>
            </div>

            <a href="h04-bmi.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> 重新計算
            </a>
        </div>
    </div>

    <div class="note-container" style="padding: 1.5rem; max-width: 32rem; margin: 0 auto;">
        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-html/blob/main/06-BMI.php" target="_blank" rel="noopener noreferrer">115 HTML 課程：對照原始碼（06-BMI.php）</a>
                </li>
            </ul>
        </aside>
    </div>
</body>
</html>
