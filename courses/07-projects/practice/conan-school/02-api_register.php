<?php
// 連接剛才匯入的資料庫
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
//$_POST 網頁專門「接收傳值」在<form>設method="post"，使用者按送出，瀏覽器自動把表單裡所有貼著 name 標籤的輸入框內容，通通打包好丟進這個叫 $_POST 的專用箱子裡。
//前端 HTML <input type="text" id="account" name="account" placeholder="請輸入帳號" required>
//寫 name="什麼"，後端就用 $_POST['什麼'] 把使用者填的字抓出來
echo "<pre>";
print_r($_POST);
echo "</pre>";
//註冊按下會出現的畫面

//發生了什麼： 伺服器一走進來，先幫你建立 $pdo 連線物件，然後立刻把前端送來的 $_POST 包裹拆開，啪地一聲印在網頁最畫面上。

$sql = "insert into `members`(`account`,`password`,`email`,`tel`,`birthday`) values(
    '{$_POST['account']}',
    '{$_POST['password']}',
    '{$_POST['email']}',
    '{$_POST['tel']}',
    '{$_POST['birthday']}')";
    // $sql = "INSERT INTO ...VALUES (...)";
    // 雙引號"必須一路包到底，直到最末端)";
    $pdo->exec($sql);
    // 呼叫物件內部的動作或變數-> exec()執行$sql裡面打包的SQL語法指令;
    header("location:03-login.php");
    //檔案被打包送出時，走在最前面的那個區塊
?>