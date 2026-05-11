<?php
session_start();

if (isset($_GET['logout'])) {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
    }
    session_destroy();
    header('Location: ' . basename(__FILE__));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $u = trim((string) $_POST['username']);
    if ($u !== '') {
        $_SESSION['minion_user'] = $u;
        header('Location: ' . basename(__FILE__) . '?center=1');
        exit;
    }
}

$showCenter = isset($_GET['center']) && $_GET['center'] === '1'
    && !empty($_SESSION['minion_user']);
$userDisplay = $showCenter ? htmlspecialchars((string) $_SESSION['minion_user'], ENT_QUOTES, 'UTF-8') : '';
$noteIndexHref = 'index.html';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $showCenter ? '小小兵會員中心' : 'Bello! 訓練師登入'; ?> - 努比的全端筆記</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --mn-yellow: #f3da60;
            --mn-blue: #4277eb;
            --mn-black: #333333;
            --mn-gray: #9ca3af;
            --mn-white: #ffffff;
            --radius-mn: 25px;
        }

        a.btn-back-notes {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--mn-white);
            color: var(--mn-blue);
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 50px;
            font-weight: 900;
            font-size: 0.85rem;
            border: 3px solid var(--mn-black);
            box-shadow: 0 4px 0 var(--mn-black);
            transition: transform 0.1s, filter 0.15s;
        }
        a.btn-back-notes:hover { filter: brightness(1.03); }
        a.btn-back-notes:active {
            transform: translateY(2px);
            box-shadow: 0 2px 0 var(--mn-black);
        }

        /* —— 登入 —— */
        body.login-body {
            background-color: var(--mn-yellow);
            background-image: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.2) 0%, transparent 20%);
            font-family: 'Noto Sans TC', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            gap: 16px;
        }

        .login-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .container {
            background: var(--mn-white);
            width: 100%;
            max-width: 400px;
            border-radius: 50px;
            box-shadow: 0 20px 0px rgba(0,0,0,0.1);
            overflow: hidden;
            border: 10px solid var(--mn-gray);
            position: relative;
        }

        .container .header {
            background-color: var(--mn-black);
            padding: 30px 20px;
            text-align: center;
            color: var(--mn-yellow);
            position: relative;
        }

        .container .header h1 {
            margin: 0;
            font-size: 1.6rem;
            letter-spacing: 2px;
            font-weight: 900;
        }

        .subtitle {
            margin-top: 5px;
            color: white;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        form.mn-form {
            padding: 40px 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: var(--mn-blue);
            font-weight: 900;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 3px solid var(--mn-blue);
            border-radius: 15px;
            background-color: #fefce8;
            font-size: 1rem;
            box-sizing: border-box;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: var(--mn-yellow);
            color: var(--mn-black);
            border: 4px solid var(--mn-black);
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 900;
            cursor: pointer;
            transition: transform 0.1s;
        }

        .submit-btn:hover {
            transform: scale(1.05) rotate(-2deg);
            background-color: #facc15;
        }

        .footer-link {
            text-align: center;
            padding-bottom: 26px;
            color: var(--mn-blue);
            font-weight: 700;
        }

        .footer-link a {
            color: var(--mn-black);
            text-decoration: underline;
        }

        .login-back-row {
            text-align: center;
            padding-bottom: 28px;
        }

        /* —— 會員中心 —— */
        body.center-body {
            background-color: #fefce8;
            font-family: 'Noto Sans TC', sans-serif;
            margin: 0;
        }

        body.center-body > header {
            background-color: var(--mn-blue);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            color: white;
            border-bottom: 8px solid var(--mn-yellow);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 1.4rem;
            font-weight: 900;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .logout-btn {
            background: var(--mn-yellow);
            color: var(--mn-black);
            text-decoration: none;
            padding: 8px 25px;
            border-radius: 50px;
            font-weight: 900;
            border: 3px solid var(--mn-black);
        }

        .logout-btn:hover { filter: brightness(1.05); }

        .main-container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .welcome-section {
            position: relative;
            background-color: var(--mn-yellow);
            border: 5px solid var(--mn-black);
            border-radius: var(--radius-mn);
            padding: 40px;
            text-align: center;
            overflow: visible;
        }

        .welcome-emoji img {
            position: absolute;
            top: -60px;
            left: 25%;
            transform: translateX(-50%);
            width: 30%;
            z-index: 10;
            filter: drop-shadow(5px 5px 0px rgba(0,0,0,0.1));
        }

        .decorative-line {
            height: 10px;
            background: repeating-linear-gradient(45deg, var(--mn-blue), var(--mn-blue) 10px, var(--mn-yellow) 10px, var(--mn-yellow) 20px);
            margin: 40px 0;
            border-radius: 50px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: var(--radius-mn);
            border: 4px solid var(--mn-blue);
            padding: 25px;
            transition: transform 0.2s;
            box-shadow: 8px 8px 0px var(--mn-blue);
        }

        .card:hover {
            transform: rotate(1deg) scale(1.02);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: var(--mn-blue);
        }

        .card-title {
            font-weight: 900;
            font-size: 1.2rem;
        }

        .card-content {
            color: #444;
            line-height: 1.6;
            margin-bottom: 8px;
        }

        .info-item {
            background: #eff6ff;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .info-label { font-weight: 700; color: var(--mn-blue); }
        .info-value { font-weight: 900; }

        .card-link {
            display: block;
            text-align: center;
            background: var(--mn-yellow);
            color: var(--mn-black);
            text-decoration: none;
            padding: 12px;
            border-radius: 15px;
            border: 3px solid var(--mn-black);
            font-weight: 900;
            margin-top: 20px;
        }

        .center-footer {
            text-align: center;
            padding: 40px;
            font-weight: 900;
            color: var(--mn-blue);
        }
    </style>
</head>
<body class="<?php echo $showCenter ? 'center-body' : 'login-body'; ?>">

<?php if (!$showCenter): ?>
    <div class="login-wrap">
    <div class="container">
        <div class="header">
            <h1>BELLO! 登入</h1>
            <p class="subtitle">香蕉萬歲！一起去冒險吧 🍌</p>
        </div>

        <form class="mn-form" action="" method="post">
            <div class="form-group">
                <label>帳號 (Minion ID)</label>
                <input type="text" name="username" placeholder="請輸入帳號" required>
            </div>

            <div class="form-group">
                <label>密碼 (Banana Password)</label>
                <input type="password" name="password" placeholder="請輸入密碼" required>
            </div>

            <button type="submit" class="submit-btn">POOPAYE! (登入)</button>
        </form>

        <div class="footer-link">
            還沒加入小小兵？ <a href="#">立即加入</a>
        </div>

        <div class="login-back-row">
            <a href="<?php echo htmlspecialchars($noteIndexHref, ENT_QUOTES, 'UTF-8'); ?>" class="btn-back-notes"><i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記</a>
        </div>
    </div>
    </div>

<?php else: ?>

    <header>
        <div class="logo">🍌 MINION CENTER</div>
        <div class="nav-actions">
            <a href="<?php echo htmlspecialchars($noteIndexHref, ENT_QUOTES, 'UTF-8'); ?>" class="btn-back-notes"><i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記</a>
            <a href="<?php echo htmlspecialchars(basename(__FILE__), ENT_QUOTES, 'UTF-8'); ?>?logout=1" class="logout-btn">POOPAYE! (登出)</a>
        </div>
    </header>

    <div class="main-container">
        <div class="welcome-section">
            <div class="welcome-emoji"><img src="./images/h08-1.png" alt=""></div>
            <h2>Bello! <?php echo $userDisplay; ?></h2>
            <p>香蕉準備好了，今天也要開心地搗蛋喔！</p>
        </div>

        <div class="decorative-line"></div>

        <div class="content-grid">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-id-badge fa-2x"></i>
                    <div class="card-title">小小兵資訊</div>
                </div>
                <div class="info-item">
                    <span class="info-label">代號</span>
                    <span class="info-value"><?php echo $userDisplay; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">香蕉等級</span>
                    <span class="info-value">🍌 專業搗蛋家</span>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-rocket fa-2x"></i>
                    <div class="card-title">今日任務</div>
                </div>
                <div class="card-content">
                    今天的任務是：找到三個香蕉並成功捉弄格魯。
                </div>
                <a href="#" class="card-link">領取任務</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-star fa-2x"></i>
                    <div class="card-title">香蕉收藏</div>
                </div>
                <div class="card-content">
                    查看你儲存在實驗室裡的秘密收藏品與香蕉貼紙。
                </div>
                <a href="#" class="card-link">查看收藏</a>
            </div>
        </div>
    </div>

    <footer class="center-footer">
        <p>BANANA! © 2026 小小兵中心 · 搗蛋無罪 🍌</p>
    </footer>

<?php endif; ?>

</body>
</html>
