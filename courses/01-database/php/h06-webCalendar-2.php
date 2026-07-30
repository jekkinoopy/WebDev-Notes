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
            --forest-green: #3f5d3a;   /* 森林深綠 */
            --forest-moss: #7fa66d;    /* 龍貓森林的苔蘚綠，做為 hover 互動色 */
            --soft-green: #eaf1de;     /* 淡淡草綠背景 */
            --soil-brown: #5b4636;     /* 泥土棕 */
            --paper-white: #fdf8ee;    /* 手寫紙張米白（偏暖，不是死白） */
            --totoro-fur: #83786a;     /* 龍貓灰棕色皮毛 */
            --totoro-belly: #f3ead9;   /* 龍貓米白肚皮 */
            --acorn-brown: #9a6a3c;    /* 橡實棕 */
            --mei-accent: #e8927c;     /* 小梅裙子的珊瑚粉（取代原本螢光粉） */
            --soot-black: #2b2b28;     /* 煤炭精靈黑 */
            --radius-lg: 1.4rem;
            --radius-xl: 1.6rem;

            /* 手繪龍貓剪影（純 CSS/SVG 原創幾何構成，非引用官方圖檔） */
            --totoro-silhouette: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 220'%3E%3Cellipse cx='100' cy='132' rx='86' ry='92' fill='%2383786a'/%3E%3Cpolygon points='52,58 34,8 78,52' fill='%2383786a'/%3E%3Cpolygon points='148,58 166,8 122,52' fill='%2383786a'/%3E%3Cellipse cx='100' cy='152' rx='56' ry='62' fill='%23f3ead9'/%3E%3Cpath d='M60 140 Q100 158 140 140' stroke='%23d9c7a4' stroke-width='4' fill='none'/%3E%3Cpath d='M64 160 Q100 176 136 160' stroke='%23d9c7a4' stroke-width='4' fill='none'/%3E%3Cellipse cx='74' cy='112' rx='15' ry='17' fill='%23fffdf7'/%3E%3Cellipse cx='126' cy='112' rx='15' ry='17' fill='%23fffdf7'/%3E%3Ccircle cx='76' cy='115' r='6.5' fill='%232b2b28'/%3E%3Ccircle cx='124' cy='115' r='6.5' fill='%232b2b28'/%3E%3Cellipse cx='100' cy='131' rx='6' ry='5' fill='%232b2b28'/%3E%3Cpath d='M20 128 L58 122 M20 138 L58 132 M20 148 L58 142' stroke='%232b2b28' stroke-width='2' opacity='0.5'/%3E%3Cpath d='M180 128 L142 122 M180 138 L142 132 M180 148 L142 142' stroke='%232b2b28' stroke-width='2' opacity='0.5'/%3E%3C/svg%3E");

            /* 煤炭精靈（ススワタリ）剪影，同樣是原創幾何構成 */
            --soot-sprite: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Cpath d='M20 4 L24 12 L33 9 L28 17 L36 20 L28 23 L33 31 L24 28 L20 36 L16 28 L7 31 L12 23 L4 20 L12 17 L7 9 L16 12 Z' fill='%232b2b28'/%3E%3Ccircle cx='15' cy='18' r='3' fill='white'/%3E%3Ccircle cx='25' cy='18' r='3' fill='white'/%3E%3Ccircle cx='15' cy='18' r='1.3' fill='%23111'/%3E%3Ccircle cx='25' cy='18' r='1.3' fill='%23111'/%3E%3C/svg%3E");
        }

        html { height: 100%; box-sizing: border-box; }
        *, *::before, *::after { box-sizing: inherit; }

        @keyframes totoro-bob {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        body {
            background-color: #dde9cd; /* 森林背景色 */
            background-image:
                radial-gradient(circle at 12% 18%, rgba(255,255,255,0.55), transparent 45%),
                radial-gradient(circle at 88% 12%, rgba(255,255,255,0.4), transparent 42%),
                radial-gradient(circle at 50% 105%, rgba(63,93,58,0.14), transparent 60%),
                linear-gradient(180deg, #e6efd9 0%, #d6e5c3 100%); /* 林間灑落的光斑，取代原本的死板格線 */
            background-attachment: fixed;
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
            box-shadow: 4px 4px 0 rgba(63, 93, 58, 0.2);
            transition: transform 0.12s, filter 0.12s;
        }

        .fr-nav-btn .fr-nav-ellip {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        a.fr-nav-btn:hover { filter: brightness(1.03); }

        a.fr-nav-btn:active {
            transform: translateY(2px);
            box-shadow: 2px 2px 0 rgba(63, 93, 58, 0.15);
        }

        a.fr-nav-prev {
            background: var(--mei-accent);
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
            background: linear-gradient(135deg, var(--forest-green), var(--forest-moss));
            padding: 7px clamp(16px, 4vw, 44px);
            border-radius: 14px 14px 14px 4px;
            border: 3px solid var(--totoro-belly);
            box-shadow: 0 4px 15px rgba(63, 93, 58, 0.25);
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
            position: relative;
            flex: 1 1 28%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--paper-white);
            border-radius: var(--radius-lg);
            box-shadow: 0 12px 26px rgba(63, 93, 58, 0.14);
            padding: clamp(14px, 2.2vh, 26px);
            display: flex;
            flex-direction: column;
            border-left: 8px solid var(--totoro-fur); /* 筆記本裝訂邊感，換成龍貓皮毛色 */
        }

        /* 兩隻探頭的煤炭精靈，裝飾用、不影響版面 */
        .totoro-sidebar::before,
        .totoro-sidebar::after {
            content: "";
            position: absolute;
            background-image: var(--soot-sprite);
            background-size: contain;
            background-repeat: no-repeat;
            pointer-events: none;
        }

        .totoro-sidebar::before {
            top: 12px;
            right: 14px;
            width: 24px;
            height: 24px;
            opacity: 0.55;
        }

        .totoro-sidebar::after {
            bottom: 10px;
            left: -6px;
            width: 18px;
            height: 18px;
            opacity: 0.35;
            transform: rotate(-14deg);
        }

        .totoro-sidebar h3 {
            margin: 0 0 clamp(10px, 2vh, 18px);
            font-size: clamp(0.88rem, 2.6vw, 1.05rem);
            color: var(--forest-green);
            border-bottom: 1px dashed var(--totoro-fur);
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
            color: var(--totoro-fur);
            font-size: 0.8rem;
        }

        .data-value {
            font-weight: 700;
            color: var(--soil-brown);
        }

        /* 右側月曆 */
        .totoro-calendar-card {
            position: relative;
            flex: 2.5 1 58%;
            min-width: 0;
            min-height: 0;
            overflow: hidden;
            background-color: var(--paper-white);
            border-radius: var(--radius-xl);
            box-shadow: 0 16px 34px rgba(63, 93, 58, 0.16);
            padding: clamp(10px, 2vh, 18px);
            display: flex;
            flex-direction: column;
        }

        /* 卡片頂端的森林漸層色帶 */
        .totoro-calendar-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--forest-moss), var(--acorn-brown), var(--mei-accent));
            opacity: 0.85;
        }

        /* 角落探頭的龍貓水印，z-index 為負才會沉到內容下方 */
        .totoro-calendar-card::after {
            content: "";
            position: absolute;
            right: -8px;
            bottom: -12px;
            width: 150px;
            height: 165px;
            background-image: var(--totoro-silhouette);
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.15;
            z-index: -1;
            pointer-events: none;
            animation: totoro-bob 6s ease-in-out infinite;
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
            color: var(--totoro-fur);
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

        /* 今天：小梅的裙子珊瑚粉標記 */
        .is-today {
            background-color: var(--mei-accent) !important;
            color: white !important;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(232, 146, 124, 0.45);
        }

        td:hover:not(:empty) {
            background-color: var(--forest-moss);
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
            box-shadow: 4px 4px 0 rgba(63, 93, 58, 0.15);
            transition: transform 0.15s, box-shadow 0.15s;
        }

        a.btn-back-notes:hover {
            transform: translateY(-2px);
            box-shadow: 6px 6px 0 rgba(63, 93, 58, 0.2);
        }

        a.btn-back-notes:active {
            transform: translateY(0);
            box-shadow: 2px 2px 0 rgba(63, 93, 58, 0.15);
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
                <h1><i class="fa-solid fa-tree" aria-hidden="true"></i> 森林萬年曆</h1>
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
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 本月天數</span>
                        <span class="data-value"><?= $monthDays?> 天</span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 第一天</span>
                        <span class="data-value"><?=date("Y-m-01") ?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 首日星期</span>
                        <span class="data-value"><?= $firstDayWeek;?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 最後一天</span>
                        <span class="data-value"><?=$lastDay?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 末日星期</span>
                        <span class="data-value"><?=$lastDayWeek?></span>
                    </li>
                    <li>
                        <span class="data-label"><i class="fa-solid fa-paw"></i> 總格數</span>
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