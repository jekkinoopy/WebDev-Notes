<?php
/**
 * 註冊表單接收（API）
 * 接收 s02-register.php 表單 POST，將資料寫入 members 後導回註冊頁。
 *
 * 前置：school 資料庫已建立 members 資料表（欄位見 s02-register 學習重點）。
 */

$dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
$pdo = new PDO($dsn, 'root', '');

$account = $_POST['account'] ?? '';
$password = $_POST['password'] ?? '';
$tel = $_POST['tel'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$email = $_POST['email'] ?? '';

$sql = 'INSERT INTO `members` (`account`, `password`, `tel`, `birthday`, `email`)
        VALUES (?, ?, ?, ?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$account, $password, $tel, $birthday, $email]);

header('Location: s02-register.php');
exit;
