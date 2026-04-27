<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="/,,/../../assets/js/nav-loader.js"></script>
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
            <h3>九九乘法表</h3>
            <div class="code-section">
                <strong>題目需求：</strong><br>
                <ol>
                    <li><img src="../../../../assets/images/php07-1.png" alt="九九乘法表需求"></li>
                    <?php
for($j=1;$j<=9;$j++)
    {
        for($i=1;$i<=9;$i++){
            echo "{$i}x{$j}=" . $i*$j;
            }
            echo "<br>";
            }
?>

                    <li><img src="../../../../assets/images/php07-2.png" alt="九九乘法表需求"></li>
                </ol>
        </div>
    </div>
</body>

</html>
</body>

</html>