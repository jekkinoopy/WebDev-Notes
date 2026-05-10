<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習四｜九九乘法表 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
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
            <span class="category-tag">PHP 基礎</span>
            <h2 class="note-title">綜合練習四：九九乘法表</h2>
            <p class="hero-desc">製作表格版（含完整算式）與交叉乘積版兩種呈現；可對照題圖與解題參考驗證。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>以表格排列的九九乘法表</h3>
            <div class="code-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                <p>使用巢狀 for 迴圈輸出 1〜9 的<strong>九九乘法表</strong>，每一格為完整算式與結果（例如 2×4=8），並以 HTML <strong>表格（table）</strong>排列，行列對齊與對照請以題目示意圖為準。</p>
                <p>可搭配下方的<strong>九九乘法解題參考</strong>題圖確認排版與內容是否正確。</p>
                    <img src="images/07-1.png" alt="九九乘法表表格版題目示意">
                    <?php
                    //無表格版本 

                    // for($j=1;$j<=9;$j++)
                    //     {
                    //         for($i=1;$i<=9;$i++){
                    //             echo "{$i}x{$j}=" . $i*$j;
                    //             }
                    //             echo "<br>";
                    //             }
                    // ?>
                                        <?php
                    echo "<table>";
                    for($j=1;$j<=9;$j++)
                        {echo "<tr>";
                    for($i=1;$i<=9;$i++){
                        echo "<td>";
                        echo "{$i}x{$j}=" . $i*$j;
                        echo "</td>";
                        }
                        echo "</tr>";
                        }
                        echo "</table>";
                        ?>
        </div>
        <div class="note-card">
            <h3>以交叉計算結果呈現的九九乘法表</h3>
            <div class="code-section">
            <strong class="is-bracket-heading">【題目需求】</strong><br>
            <p>以<strong>乘積數值（交叉計算結果）</strong>呈現對照矩陣（依題意的行列方向與標頭對齊題目）；格內需為對應兩數相乘結果而非完整文字算式。</p>
            <p>請對照下列示意圖，並可復核<strong>九九乘法解題參考</strong>以確認每一格結果。</p>
            <img src="images/07-2.png" alt="九九乘法交叉表題目示意">
                                <?php
            echo "<table>";
            echo "<tr>";
            echo "<td>1</td>";
            echo "<td>2</td>";
            echo "<td>3</td>";
            echo "<td>4</td>";
            echo "<td>5</td>";
            echo "<td>6</td>";
            echo "<td>7</td>";
            echo "<td>8</td>";
            echo "<td>9</td>";
            echo "</tr>";
            for($j=1;$j<=9;$j++)
                {echo "<tr>";
            for($i=1;$i<=9;$i++){
                echo "<td>";
                echo $i*$j;
                echo "</td>";
                }
                echo "</tr>";
                }
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>2</td>";
                    echo "<td>3</td>";
                    echo "<td>4</td>";
                    echo "<td>5</td>";
                    echo "<td>6</td>";
                    echo "<td>7</td>";
                    echo "<td>8</td>";
                    echo "<td>9</td>";
                    echo "</tr>";
                ?>
        </div>
                        
        </div>
        <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="07-pra04"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>