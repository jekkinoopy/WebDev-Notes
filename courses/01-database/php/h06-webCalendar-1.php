<?php
$noteIndexHref = 'index.html';
$h = static fn (string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$prevLessonHref = 'h06-webCalendar.php';
$nextLessonHref = 'h06-webCalendar-2.php';
$prevLessonLabel = '講義萬年曆';
$nextLessonLabel = '森林萬年曆';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>努比的動森萬年曆</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --ac-green: #78d64b;      
            --ac-leaf: #5eb130;       
            --ac-beige: #f9f5e1;      
            --ac-brown: #8d6e63;      
            --ac-yellow: #ffeb3b;     
            --ac-card-bg: #fffdf0;    
            --radius-lg: 1.5rem;
        }

        /* 關鍵：強制 100vh 且隱藏捲軸 */
        html { height: 100%; box-sizing: border-box; }
        *, *::before, *::after { box-sizing: inherit; }

        body {
            background-color: #a5d6a7; 
            background-image: radial-gradient(#81c784 10%, transparent 10%);
            background-size: 30px 30px;
            font-family: 'Noto Sans TC', sans-serif;
            color: var(--ac-brown);
            margin: 0;
            height: 100%;
            max-height: 100vh;
            overflow: hidden; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* 頂橫列：上一則｜返回｜標題｜下一則 */
        .ac-top-row {
            flex-shrink: 0;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            gap: clamp(6px, 1.2vw, 12px);
            width: min(98vw, 1400px);
            margin: 4px auto 8px;
            padding: 0 clamp(6px, 1.6vw, 12px);
            z-index: 10;
        }

        a.ac-nav-btn {
            flex: 0 0 auto;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            text-decoration: none;
            font-weight: 900;
            font-size: clamp(0.68rem, 1.55vw, 0.82rem);
            padding: 8px 12px;
            border-radius: 50px;
            border: 3px solid #5d4037;
            white-space: nowrap;
            max-width: min(30vw, 9.5rem);
            box-shadow: 0 3px 0 #5d4037;
            transition: transform 0.12s, filter 0.12s;
            color: #4a3728;
        }

        .ac-nav-btn .ac-nav-ellip {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        a.ac-nav-btn:hover { filter: brightness(1.04); }

        a.ac-nav-btn:active {
            transform: translateY(2px);
            box-shadow: 0 1px 0 #5d4037;
        }

        a.ac-nav-prev { background-color: #90caf9; }
        a.ac-nav-next { background-color: var(--ac-yellow); }

        .ac-top-center {
            flex: 1 1 auto;
            min-width: 0;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: center;
            gap: clamp(6px, 1.6vw, 12px);
        }

        /* 標題區塊：木頭吊牌感 */
        .ac-header {
            margin-top: 0;
            flex: 1 1 auto;
            min-width: 0;
            background: #b68d68; /* 木頭色 */
            padding: 8px clamp(14px, 4vw, 36px);
            border-radius: 50px;
            border: 4px solid #8d6e63;
            box-shadow: 0 4px 0px #5d4037;
            position: relative;
            z-index: 10;
        }

        .ac-header h1 {
            margin: 0;
            color: white;
            font-size: clamp(0.92rem, 2.8vw, 1.42rem);
            text-shadow: 2px 2px 0px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: clamp(6px, 2vw, 12px);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* 主容器：利用左右空間 */
        .ac-main-container {
            flex: 1 1 auto;
            min-height: 0;
            overflow: hidden;
            display: flex;
            gap: clamp(12px, 2vw, 18px);
            padding: clamp(8px, 1.5vh, 14px);
            width: min(98vw, 1400px);
            max-width: 1400px;
            align-items: stretch;
        }

        /* 左側：資訊區塊 */
        .ac-sidebar {
            flex: 1 1 22%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--ac-beige);
            border-radius: var(--radius-lg);
            border: 4px solid #e0dbba;
            padding: clamp(12px, 2.2vh, 24px);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        /* 右側：月曆主體 */
        .ac-calendar-card {
            flex: 3 1 55%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--ac-card-bg);
            border-radius: var(--radius-lg);
            border: 6px solid #e0dbba;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            padding: clamp(8px, 1.6vh, 14px);
            display: flex;
            flex-direction: column;
            position: relative;
        }

        h2 {
            flex-shrink: 0;
            text-align: center;
            background-color: var(--ac-green);
            color: white;
            padding: 6px 10px;
            border-radius: 50px;
            font-size: clamp(0.86rem, 2.6vw, 1.08rem);
            margin: 0 0 clamp(6px, 1.6vh, 12px);
            box-shadow: 0 3px 0px #5ea53b;
        }

.ac-sidebar h3 {
    margin: 0 0 clamp(10px, 2vh, 18px);
    font-size: clamp(0.9rem, 2.6vw, 1.08rem);
    color: var(--ac-brown);
    border-bottom: 2px solid rgba(141, 110, 99, 0.2);
    padding-bottom: 10px;
}

/* 清單對齊優化 */
.ques-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.ques-section li {
    padding: clamp(4px, 1.2vh, 9px) 0;
    display: flex;
    align-items: center; /* 讓葉子與文字垂直對齊 */
    justify-content: space-between; /* 讓數據靠右，名稱靠左，達成完美對齊 */
    font-size: clamp(0.75rem, 2.1vw, 0.9rem);
    color: var(--ac-brown);
    border-bottom: 1px solid rgba(141, 110, 99, 0.05); /* 輕微的分割線 */
}

/* 針對冒號後的數據進行美化 */
.ques-section li span.data-label {
    display: flex;
    align-items: center;
    gap: 8px;
}

.ques-section li span.data-value {
    font-weight: 800;
    color: var(--ac-leaf); /* 只有數字用深綠色點綴，其他維持咖啡色 */
}

/* 統一葉子圖示顏色 */
.ques-section li i {
    font-size: 0.8rem;
    color: var(--ac-leaf);
}

        /* 表格：撐滿剩餘高度、略縮字避免超出視窗 */
        .ac-calendar-card table {
            flex: 1 1 auto;
            min-height: 0;
            width: 100%;
            border-collapse: separate;
            border-spacing: clamp(3px, 0.8vmin, 6px);
            table-layout: fixed;
        }

        th {
            background-color: #ffcc80;
            color: white;
            border-radius: 10px;
            height: clamp(24px, 5.5vh, 34px);
            font-size: clamp(0.68rem, 2vw, 0.85rem);
        }

        th:first-child { background-color: #ef9a9a; }
        th:last-child { background-color: #90caf9; }

        td {
            background-color: white;
            text-align: center;
            font-size: clamp(0.72rem, 2.5vmin, 1.12rem);
            font-weight: bold;
            border-radius: 12px;
            border-bottom: 3px solid #eee;
            transition: 0.2s;
        }

        .is-today {
            background-color: var(--ac-yellow) !important;
            border-bottom-color: #fdd835 !important;
            transform: scale(1.02);
        }

        td:empty { background: transparent; border: none; }

        a.btn-back-notes {
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            text-decoration: none;
            font-weight: 800;
            font-size: clamp(0.65rem, 1.55vw, 0.82rem);
            padding: 8px 12px;
            border-radius: 50px;
            background: var(--ac-beige);
            color: var(--ac-brown);
            border: 4px solid #8d6e63;
            box-shadow: 0 4px 0 #5d4037;
            transition: transform 0.15s, filter 0.15s;
        }

        a.btn-back-notes:hover {
            filter: brightness(1.05);
            transform: translateY(-1px);
        }

        a.btn-back-notes:active {
            transform: translateY(2px);
            box-shadow: 0 2px 0 #5d4037;
        }

        a.btn-back-notes i {
            color: var(--ac-leaf);
        }
    </style>
</head>
<body>

    <nav class="ac-top-row" aria-label="單元導覽">
        <a href="<?php echo $h($prevLessonHref); ?>" class="ac-nav-btn ac-nav-prev" title="上一則：<?php echo $h($prevLessonLabel); ?>"><span aria-hidden="true">‹</span> <span class="ac-nav-ellip"><?php echo $h($prevLessonLabel); ?></span></a>
        <div class="ac-top-center">
            <a href="<?php echo $h($noteIndexHref); ?>" class="btn-back-notes">
                <i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記
            </a>
            <div class="ac-header">
                <h1><i class="fa-solid fa-calendar-check" aria-hidden="true"></i> 動森萬年曆</h1>
            </div>
        </div>
        <a href="<?php echo $h($nextLessonHref); ?>" class="ac-nav-btn ac-nav-next" title="下一則：<?php echo $h($nextLessonLabel); ?>"><span class="ac-nav-ellip"><?php echo $h($nextLessonLabel); ?></span> <span aria-hidden="true">›</span></a>
    </nav>

    <?php 
        // --- 保持原始程式內容 ---
        $today=date("Y-m-d");
        $monthDays=date("t");
        $firstDayWeek=date("w",strtotime(date("Y-m-01")));
        $lastDay=date("Y-m-$monthDays");
        $lastDayWeek=date("w",strtotime(date($lastDay)));
        $TotalDays=$monthDays+$firstDayWeek+(6-$lastDayWeek);
        $TotalWeeks=$TotalDays/7;
    ?>

    <div class="ac-main-container">
        <!-- 左側資訊 -->
        <div class="ac-sidebar">
            <h3 style="margin-top:0;"><i class="fa-solid fa-circle-info"></i> 本月概要</h3>
<div class="ques-section">
    <ul>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 本月天數</span>
            <span class="data-value"><?= $monthDays?> 天</span>
        </li>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 第一天</span>
            <span class="data-value"><?=date("Y-m-01") ?></span>
        </li>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 首日星期</span>
            <span class="data-value"><?= $firstDayWeek;?></span>
        </li>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 最後一天</span>
            <span class="data-value"><?=$lastDay?></span>
        </li>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 末日星期</span>
            <span class="data-value"><?=$lastDayWeek?></span>
        </li>
        <li>
            <span class="data-label"><i class="fa-solid fa-leaf"></i> 總格數</span>
            <span class="data-value"><?=$TotalDays?> 格</span>
        </li>
    </ul>
</div>
        </div>

        <!-- 右側月曆 -->
        <div class="ac-calendar-card">
            <h2>今天是 <?= $today; ?></h2>

            <table>
                <tr>
                    <th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th>
                </tr>
                <?php
                    for($i=0;$i<$TotalWeeks;$i++){
                        echo "<tr>";
                        for($j=0;$j<7;$j++){
                            // [備註：此處稍微調整 td 輸出以加入 Class，但不變動運算邏輯]
                            $DayNumber=($i*7+$j)-($firstDayWeek-1);
                            
                            $currentDate = date("Y-m-") . sprintf("%02d", $DayNumber);
                            $todayClass = ($currentDate == $today) ? "is-today" : "";

                            echo "<td class='$todayClass'>";
                            if($DayNumber>0 && $DayNumber<=$monthDays){
                                echo $DayNumber;
                            };
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>

</body>
</html>