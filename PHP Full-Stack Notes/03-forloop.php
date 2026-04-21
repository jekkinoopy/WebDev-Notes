<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構
    </title>
</head>
<body>
    <h3>For...loop練習</h3>
    <?php
    for($i=1;$i<=10;$i=$i+1){
        echo "$i => ";
        echo $i * 10 ."<br>";
    }

    echo $i;

?>
    <h3>For...loop練習 (遞增為2)</h3>
    <?php
    for($i=1;$i<=10;$i=$i+2){
        echo "$i => ";
        echo $i * 10 ."<br>";
    }
    echo $i;
?>
    <h3>For...loop練習 (顯示為偶數)</h3>
    <?php
    for($i=0;$i<=10;$i=$i+1){
        echo "$i => ";
        echo $i * 2 ."<br>";
        if($i*2>=10){
            break;
        }
    }
    echo $i;
?>
    <h3>For...loop練習 (顯示為奇數)</h3>
    <?php
    for($i=0;$i<=10;$i=$i+1){
        echo "$i => ";
        echo $i * 2 +1  ."<br>";
        if(($i*2+1)>=10){
            break;
        }
        }
        echo $i ."<br>";
?>
    <h3>while loop練習</h3>
    <?php
        $score = 10;
        echo "成績為" . $score ."分 <br>";
        $count = 0;
        while($score < 60){
            $score = $score + 10;
            $count = $count +1;
        }    
        echo "登入成績為：" .$score . "分 <br>";
        echo "迴圈執行次數：" .$count . "次 <br>";
    ?>

    <h3>foreach練習</h3>
    <?php
    $scores = [60,70,80,90,100];
    foreach($scores as $idx => $val){
        echo "第" .($idx+1) ."位同學的成績為" .$val ."<br>";
    }

    ?>

<h3>&not break space</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    </body>
</html>