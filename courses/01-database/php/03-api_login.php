<?php
/**
 * 登入表單接收（API）
 * 接收 s02-login.php 表單 POST，比對 members 帳密後導向成功頁或回登入頁。
 *
 * 【學生實作】
 * 1. PDO 連線資料庫
 * 2. 以 account、password 查詢 members（SELECT COUNT(*) 或 SELECT id LIMIT 1）
 * 3. 比對成功：header('Location: 04-login-success.php'); exit;
 * 4. 比對失敗：header('Location: s02-login.php?error=1'); exit;
 */

// $dsn = 'mysql:host=localhost;charset=utf8;dbname=你的資料庫';
// $pdo = new PDO($dsn, 'root', '');
//
// $account = $_POST['account'] ?? '';
// $password = $_POST['password'] ?? '';
//
// $sql = 'SELECT COUNT(*) FROM members WHERE account = ? AND password = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$account, $password]);
//
// if ((int) $stmt->fetchColumn() === 1) {
//     header('Location: 04-login-success.php');
//     exit;
// }
//
// header('Location: s02-login.php?error=1');
// exit;
