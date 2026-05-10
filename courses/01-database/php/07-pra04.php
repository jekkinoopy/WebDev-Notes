<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表 - 努比的全端筆記</title>
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
            <span class="category-tag">程式基礎概念</span>
            <h2 class="note-title">綜合練習四</h2>
            <p class="hero-desc"></p>
            <div class="hero-divider"></div>
        </div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3>以表格排列的九九乘法表</h3>
            <div class="code-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                    <img src="images/07-1.png" alt="九九乘法表需求">
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
            <img src="images/07-2.png" alt="九九乘法表需求">
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
    </body>
    
    </html>
</body>

</html>