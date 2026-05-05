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
        }

        body {
            background-color: #dcedc8; /* 森林背景色 */
            background-image: linear-gradient(rgba(255,255,255,0.3) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,0.3) 1px, transparent 1px);
            background-size: 50px 50px; /* 輕微的格紋感 */
            font-family: 'Noto Sans TC', sans-serif;
            color: var(--soil-brown);
            margin: 0;
            height: 100vh;
            overflow: hidden; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* 頂部標題：森林車站木牌感 */
        .totoro-header {
            margin-top: 25px;
            background: var(--forest-green);
            padding: 8px 50px;
            border-radius: 10px;
            border: 3px solid white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .totoro-header h1 {
            margin: 0;
            color: white;
            font-size: 1.4rem;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* 主容器 */
        .totoro-main-container {
            flex: 1;
            display: flex;
            gap: 25px;
            padding: 30px;
            width: 90vw;
            max-width: 1200px;
            box-sizing: border-box;
        }

        /* 左側資訊：手寫筆記感 */
        .totoro-sidebar {
            flex: 1;
            background-color: var(--paper-white);
            border-radius: var(--radius-lg);
            box-shadow: 5px 5px 0px rgba(0,0,0,0.05);
            padding: 30px;
            display: flex;
            flex-direction: column;
            border-left: 8px solid var(--forest-green); /* 筆記本裝訂邊感 */
        }

        .totoro-sidebar h3 {
            margin: 0 0 20px 0;
            font-size: 1.1rem;
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
            padding: 12px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
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
            flex: 2.5;
            background-color: var(--paper-white);
            border-radius: var(--radius-xl);
            box-shadow: 8px 8px 0px rgba(0,0,0,0.05);
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            color: var(--forest-green);
            font-size: 1.3rem;
            margin: 0 0 20px 0;
            font-weight: 900;
        }

        /* 表格樣式 */
        table {
            width: 100%;
            height: 100%;
            border-collapse: separate;
            border-spacing: 8px;
            table-layout: fixed;
        }

        th {
            color: #aaa;
            font-size: 0.8rem;
            padding-bottom: 10px;
            text-transform: uppercase;
        }

        td {
            background-color: var(--soft-green);
            text-align: center;
            font-size: 1.3rem;
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
    </style>
</head>
<body>

    <!-- 頂部標題 -->
    <div class="totoro-header">
        <h1><i class="fa-solid fa-seedling"></i> 努比的森林萬年曆</h1>
    </div>

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