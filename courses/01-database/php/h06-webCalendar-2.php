<?php
$noteIndexHref = 'index.html';
$h = static fn (string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$prevLessonHref = 'h06-webCalendar-1.php';
$nextLessonHref = 'h04-bmi.php';
$prevLessonLabel = '動森萬年曆';
$nextLessonLabel = 'BMI 實作';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>努比的森林萬年曆</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --forest-green: #2d5a27;   /* 森林深綠 */
            --soft-green: #e8f5e9;     /* 淡淡草綠背景 */
            --soil-brown: #5d4037;     /* 泥土棕 */
            --paper-white: #fdfdfd;    /* 手寫紙張白 */
            --highlight-pink: #f8bbd0; /* 小梅的裙子粉 */
            --radius-lg: 1.2rem;
            --radius-xl: 1.2rem;
        }

        html { height: 100%; box-sizing: border-box; }
        *, *::before, *::after { box-sizing: inherit; }

        body {
            background-color: #dcedc8; /* 森林背景色 */
            background-image: linear-gradient(rgba(255,255,255,0.3) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,0.3) 1px, transparent 1px);
            background-size: 50px 50px; /* 輕微的格紋感 */
            font-family: 'Noto Sans TC', sans-serif;
            color: var(--soil-brown);
            margin: 0;
            height: 100%;
            max-height: 100vh;
            overflow: hidden; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* 頂橫列 */
        .totoro-top-row {
            flex-shrink: 0;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            gap: clamp(6px, 1.5vw, 12px);
            width: min(98vw, 1200px);
            margin: 4px auto 8px;
            padding: 0 clamp(6px, 1.6vw, 12px);
        }

        a.fr-nav-btn {
            flex: 0 0 auto;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            text-decoration: none;
            font-weight: 900;
            font-size: clamp(0.68rem, 1.55vw, 0.82rem);
            padding: 8px 12px;
            border-radius: 10px;
            white-space: nowrap;
            max-width: min(30vw, 9.5rem);
            border: 3px solid var(--forest-green);
            box-shadow: 4px 4px 0 rgba(45, 90, 39, 0.2);
            transition: transform 0.12s, filter 0.12s;
        }

        .fr-nav-btn .fr-nav-ellip {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        a.fr-nav-btn:hover { filter: brightness(1.03); }

        a.fr-nav-btn:active {
            transform: translateY(2px);
            box-shadow: 2px 2px 0 rgba(45, 90, 39, 0.15);
        }

        a.fr-nav-prev {
            background: var(--highlight-pink);
            color: white;
        }

        a.fr-nav-next {
            background: var(--paper-white);
            color: var(--forest-green);
        }

        .totoro-top-center {
            flex: 1 1 auto;
            min-width: 0;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: center;
            gap: clamp(8px, 2vw, 14px);
        }

        /* 頂部標題：森林車站木牌感 */
        .totoro-header {
            margin-top: 0;
            flex: 1 1 auto;
            min-width: 0;
            background: var(--forest-green);
            padding: 7px clamp(16px, 4vw, 44px);
            border-radius: 10px;
            border: 3px solid white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .totoro-header h1 {
            margin: 0;
            color: white;
            font-size: clamp(0.94rem, 2.9vw, 1.38rem);
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* 主容器 */
        .totoro-main-container {
            flex: 1 1 auto;
            min-height: 0;
            overflow: hidden;
            display: flex;
            gap: clamp(12px, 2vw, 22px);
            padding: clamp(8px, 1.5vh, 18px);
            width: min(98vw, 1200px);
            max-width: 1200px;
        }

        /* 左側資訊：手寫筆記感 */
        .totoro-sidebar {
            flex: 1 1 28%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--paper-white);
            border-radius: var(--radius-lg);
            box-shadow: 5px 5px 0px rgba(0,0,0,0.05);
            padding: clamp(14px, 2.2vh, 26px);
            display: flex;
            flex-direction: column;
            border-left: 8px solid var(--forest-green); /* 筆記本裝訂邊感 */
        }

        .totoro-sidebar h3 {
            margin: 0 0 clamp(10px, 2vh, 18px);
            font-size: clamp(0.88rem, 2.6vw, 1.05rem);
            color: var(--forest-green);
            border-bottom: 1px dashed var(--forest-green);
            padding-bottom: 10px;
        }

        /* 側邊欄對齊與減色優化 */
        .ques-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .ques-section li {
            padding: clamp(5px, 1.5vh, 11px) 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: clamp(0.75rem, 2.1vw, 0.9rem);
            border-bottom: 1px solid #f0f0f0;
        }

        .data-label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #777; /* 標籤淡色化 */
        }

        .data-label i {
            color: var(--forest-green);
            font-size: 0.8rem;
        }

        .data-value {
            font-weight: 700;
            color: var(--soil-brown);
        }

        /* 右側月曆 */
        .totoro-calendar-card {
            flex: 2.5 1 58%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--paper-white);
            border-radius: var(--radius-xl);
            box-shadow: 8px 8px 0px rgba(0,0,0,0.05);
            padding: clamp(10px, 2vh, 18px);
            display: flex;
            flex-direction: column;
        }

        h2 {
            flex-shrink: 0;
            text-align: center;
            color: var(--forest-green);
            font-size: clamp(0.88rem, 2.6vw, 1.22rem);
            margin: 0 0 clamp(8px, 2vh, 16px);
            font-weight: 900;
        }

        /* 表格樣式 */
        .totoro-calendar-card table {
            flex: 1 1 auto;
            min-height: 0;
            width: 100%;
            border-collapse: separate;
            border-spacing: clamp(4px, 1vmin, 8px);
            table-layout: fixed;
        }

        th {
            color: #aaa;
            font-size: clamp(0.62rem, 1.8vw, 0.76rem);
            padding-bottom: 6px;
            text-transform: uppercase;
        }

        td {
            background-color: var(--soft-green);
            text-align: center;
            font-size: clamp(0.72rem, 2.5vmin, 1.22rem);
            font-weight: 600;
            border-radius: 8px;
            color: var(--forest-green);
            transition: 0.3s;
        }

        /* 今天：小梅的粉紅色標記 */
        .is-today {
            background-color: var(--highlight-pink) !important;
            color: white !important;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(248, 187, 208, 0.4);
        }

        td:hover:not(:empty) {
            background-color: var(--forest-green);
            color: white;
            cursor: pointer;
        }

        td:empty { background: transparent; }

        a.btn-back-notes {
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            text-decoration: none;
            font-weight: 800;
            font-size: clamp(0.65rem, 1.55vw, 0.82rem);
            padding: 8px 12px;
            border-radius: 10px;
            background: var(--paper-white);
            color: var(--forest-green);
            border: 3px solid var(--forest-green);
            box-shadow: 4px 4px 0 rgba(45, 90, 39, 0.15);
            transition: transform 0.15s, box-shadow 0.15s;
        }

        a.btn-back-notes:hover {
            transform: translateY(-2px);
            box-shadow: 6px 6px 0 rgba(45, 90, 39, 0.2);
        }

        a.btn-back-notes:active {
            transform: translateY(0);
            box-shadow: 2px 2px 0 rgba(45, 90, 39, 0.15);
        }

        a.btn-back-notes i {
            color: var(--forest-green);
        }
    </style>
</head>
<body>

    <nav class="totoro-top-row" aria-label="單元導覽">
        <a href="<?php echo $h($prevLessonHref); ?>" class="fr-nav-btn fr-nav-prev" title="上一則：<?php echo $h($prevLessonLabel); ?>"><span aria-hidden="true">‹</span> <span class="fr-nav-ellip"><?php echo $h($prevLessonLabel); ?></span></a>
        <div class="totoro-top-center">
            <a href="<?php echo $h($noteIndexHref); ?>" class="btn-back-notes">
                <i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記
            </a>
            <div class="totoro-header">
                <h1><i class="fa-solid fa-seedling" aria-hidden="true"></i> 森林萬年曆</h1>
            </div>
        </div>
        <a href="<?php echo $h($nextLessonHref); ?>" class="fr-nav-btn fr-nav-next" title="下一則：<?php echo $h($nextLessonLabel); ?>"><span class="fr-nav-ellip"><?php echo $h($nextLessonLabel); ?></span> <span aria-hidden="true">›</span></a>
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

    <div class="totoro-main-container">
        <!-- 左側資訊 -->
        <div class="totoro-sidebar">
            <h3><i class="fa-solid fa-note-sticky"></i> 月份筆記</h3>
            <div class="ques-section">
                <ul>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 本月天數</span>
                        <span class="data-value"><?= $monthDays?> 天</span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 第一天</span>
                        <span class="data-value"><?=date("Y-m-01") ?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 首日星期</span>
                        <span class="data-value"><?= $firstDayWeek;?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 最後一天</span>
                        <span class="data-value"><?=$lastDay?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 末日星期</span>
                        <span class="data-value"><?=$lastDayWeek?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-sprout"></i> 總格數</span>
                        <span class="data-value"><?=$TotalDays?> 格</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 右側月曆 -->
        <div class="totoro-calendar-card">
            <h2><?= date("F Y"); ?></h2> <!-- 顯示英文月份增加設計感 -->

            <table>
                <tr>
                    <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
                </tr>
                <?php
                    for($i=0;$i<$TotalWeeks;$i++){
                        echo "<tr>";
                        for($j=0;$j<7;$j++){
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