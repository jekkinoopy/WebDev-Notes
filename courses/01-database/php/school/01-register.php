<?php
$conanPage = 'register';
$pageTitle = '嫌疑犯名冊｜米花町偵探學園';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <?php require __DIR__ . '/include/conan-head.php'; ?>
</head>

<body class="conan-school">
  <?php require __DIR__ . '/include/conan-header.php'; ?>

  <main class="conan-page-main">
    <a class="conan-back-link" href="index.php"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> 返回偵辦室</a>
    <article class="conan-form-card">
      <p class="conan-form-label"><i class="fa-solid fa-user-plus" aria-hidden="true"></i> 會員註冊</p>
      <h1>嫌疑犯名冊</h1>
      <p class="conan-form-sub">請確實填寫身分，這將成為你完美的「不在場證明」。</p>
      <form action="02-api_register.php" method="post">
        <div class="conan-form-field">
          <label for="account"><i class="fa-solid fa-user" aria-hidden="true"></i> 帳號</label>
          <input type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username">
        </div>
        <div class="conan-form-field">
          <label for="password"><i class="fa-solid fa-lock" aria-hidden="true"></i> 密碼</label>
          <input type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="new-password">
        </div>
        <div class="conan-form-field">
          <label for="email"><i class="fa-solid fa-envelope" aria-hidden="true"></i> 信箱</label>
          <input type="email" id="email" name="email" placeholder="請輸入信箱" required autocomplete="email">
        </div>
        <div class="conan-form-field">
          <label for="tel"><i class="fa-solid fa-phone" aria-hidden="true"></i> 電話</label>
          <input type="tel" id="tel" name="tel" placeholder="請輸入電話" required autocomplete="tel">
        </div>
        <div class="conan-form-field">
          <label for="birthday"><i class="fa-solid fa-cake-candles" aria-hidden="true"></i> 生日</label>
          <input type="date" id="birthday" name="birthday" required>
        </div>
        <div class="conan-form-actions">
          <button type="submit"><i class="fa-solid fa-gavel" aria-hidden="true"></i> 移送法辦</button>
          <button type="reset"><i class="fa-solid fa-eraser" aria-hidden="true"></i> 清空紀錄</button>
        </div>
      </form>
    </article>
  </main>

  <?php require __DIR__ . '/include/conan-footer.php'; ?>
</body>

</html>
