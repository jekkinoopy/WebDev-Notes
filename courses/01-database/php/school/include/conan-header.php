<?php
require_once __DIR__ . '/conan-config.php';
?>
<header class="conan-topbar">
  <a class="conan-logo" href="<?php echo htmlspecialchars($conanIndex, ENT_QUOTES, 'UTF-8'); ?>">米花町偵探學園</a>
  <nav class="conan-nav" aria-label="主選單">
    <a href="<?php echo htmlspecialchars(conan_nav_href('#top'), ENT_QUOTES, 'UTF-8'); ?>">關於我們</a>
    <a href="<?php echo htmlspecialchars(conan_nav_href('#features'), ENT_QUOTES, 'UTF-8'); ?>">辦案機能</a>
    <a href="<?php echo htmlspecialchars(conan_nav_href('#news'), ENT_QUOTES, 'UTF-8'); ?>">事件簿</a>
    <a href="<?php echo htmlspecialchars(conan_nav_href('#contact'), ENT_QUOTES, 'UTF-8'); ?>">聯絡方式</a>
  </nav>
  <div class="conan-auth">
    <a href="../s03-login.php" class="conan-btn conan-btn-login">登入</a>
    <a href="01-register.php" class="conan-btn conan-btn-register"<?php echo $conanPage === 'register' ? ' aria-current="page"' : ''; ?>>註冊</a>
  </div>
</header>
