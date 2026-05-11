<?php
// 合併：登入頁 + 訓練家中心（Cookie 範例用 setcookie）；登出清除 Cookie
if (isset($_GET['logout'])) {
    setcookie('trainer_name', '', time() - 3600, '/', '', false, true);
    header('Location: ' . basename(__FILE__));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $u = trim((string) $_POST['username']);
    if ($u !== '') {
        setcookie('trainer_name', $u, time() + 3600, '/', '', false, true);
        header('Location: ' . basename(__FILE__) . '?center=1&username=' . rawurlencode($u));
        exit;
    }
}

$showCenter = isset($_GET['center']) && $_GET['center'] === '1'
    && isset($_GET['username']) && trim((string) $_GET['username']) !== '';
$userDisplay = $showCenter ? htmlspecialchars(trim((string) $_GET['username']), ENT_QUOTES, 'UTF-8') : '';
$noteIndexHref = 'index.html';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $showCenter ? '訓練家中心' : '訓練家登入'; ?> - 努比的全端筆記</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --pk-red: #f17171;
            --pk-blue: #6890e6;
            --pk-yellow: #ffeb6c;
            --pk-white: #ffffff;
            --pk-black: #333333;
            --pk-gray: #f0f0f0;
            --pk-screen: #91a1a1;
            --radius-poke: 20px;
            --radius-pk: 15px;
        }

        a.btn-back-notes {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: var(--pk-yellow);
            color: var(--pk-black);
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 0.85rem;
            border: 3px solid var(--pk-black);
            box-shadow: 0 3px 0 var(--pk-black);
            transition: transform 0.1s, filter 0.15s;
        }
        a.btn-back-notes:hover {
            filter: brightness(1.06);
        }
        a.btn-back-notes:active {
            transform: translateY(2px);
            box-shadow: 0 1px 0 var(--pk-black);
        }

        /* —— 登入畫面 —— */
        body.login-body {
            background-color: #e0e0e0;
            background-image: radial-gradient(var(--pk-gray) 20%, transparent 20%),
                              radial-gradient(var(--pk-gray) 20%, transparent 20%);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
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
            background: var(--pk-white);
            width: 100%;
            max-width: 420px;
            border-radius: var(--radius-poke);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            border: 8px solid var(--pk-black);
            position: relative;
        }

        .container .header {
            background-color: var(--pk-red);
            padding: 40px 20px;
            text-align: center;
            color: white;
            border-bottom: 8px solid var(--pk-black);
            position: relative;
        }

        .container .header::after {
            content: '';
            position: absolute;
            bottom: -24px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border: 8px solid var(--pk-black);
            border-radius: 50%;
            z-index: 10;
        }

        .header-icon {
            font-size: 3rem;
            margin-bottom: 10px;
            filter: drop-shadow(2px 2px 0px var(--pk-black));
        }

        .container .header h1 {
            margin: 0;
            font-size: 1.8rem;
            letter-spacing: 2px;
            text-shadow: 3px 3px 0px var(--pk-black);
        }

        .subtitle {
            margin-top: 10px;
            font-weight: 600;
            color: var(--pk-yellow);
            text-shadow: 1px 1px 0px var(--pk-black);
            font-size: 1rem;
        }

        form.poke-form {
            padding: 50px 35px 30px 35px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: var(--pk-black);
            font-weight: 800;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 4px solid var(--pk-black);
            border-radius: 10px;
            background-color: var(--pk-gray);
            font-size: 1rem;
            box-sizing: border-box;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--pk-blue);
            background-color: white;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: var(--pk-blue);
            color: white;
            border: 4px solid var(--pk-black);
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 900;
            cursor: pointer;
            box-shadow: 0 5px 0px var(--pk-black);
            transition: 0.1s;
            margin-top: 10px;
        }

        .submit-btn:hover { background-color: #6a7af1; }
        .submit-btn:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0px var(--pk-black);
        }

        .divider {
            display: flex;
            align-items: center;
            padding: 0 35px;
            margin: 20px 0;
        }

        .divider-line { flex: 1; height: 4px; background-color: var(--pk-black); }
        .divider-text {
            padding: 0 15px;
            font-weight: 900;
            color: var(--pk-black);
        }

        .footer-link {
            text-align: center;
            padding-bottom: 20px;
            font-weight: 600;
            color: var(--pk-black);
        }

        .footer-link a {
            color: var(--pk-red);
            text-decoration: none;
            border-bottom: 2px solid transparent;
        }

        .footer-link a:hover { border-bottom-color: var(--pk-red); }

        .login-back-row {
            text-align: center;
            padding-bottom: 28px;
        }

        /* —— 訓練家中心 —— */
        body.center-body {
            background-color: var(--pk-gray);
            font-family: 'Noto Sans TC', sans-serif;
            margin: 0;
            color: var(--pk-black);
        }

        body.center-body > header {
            background-color: var(--pk-red);
            border-bottom: 6px solid var(--pk-black);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 900;
            font-size: 1.2rem;
            text-shadow: 2px 2px 0px var(--pk-black);
        }

        .logo-icon {
            background: white;
            color: var(--pk-red);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid var(--pk-black);
            font-size: 1rem;
        }

        .nav-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .logout-btn {
            background-color: var(--pk-black);
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            border: 2px solid white;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background-color: var(--pk-yellow);
            color: var(--pk-black);
            border-color: var(--pk-black);
        }

        .main-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome-section {
            background-color: var(--pk-screen);
            border: 6px solid var(--pk-black);
            border-radius: var(--radius-pk);
            padding: 30px;
            text-align: center;
            color: var(--pk-black);
            box-shadow: inset 0 0 20px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }

        .welcome-emoji {
            font-size: 4rem;
            margin-bottom: 10px;
            filter: drop-shadow(3px 3px 0px rgba(0,0,0,0.1));
        }

        .welcome-section h2 {
            margin: 0;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .welcome-section p {
            font-weight: 800;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .decorative-line {
            height: 8px;
            background-color: var(--pk-black);
            margin: 40px 0;
            border-radius: 50px;
            position: relative;
        }

        .decorative-line::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30px;
            height: 30px;
            background: white;
            border: 5px solid var(--pk-black);
            border-radius: 50%;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .card {
            background: var(--pk-white);
            border: 4px solid var(--pk-black);
            border-radius: var(--radius-pk);
            padding: 25px;
            transition: 0.2s;
            display: flex;
            flex-direction: column;
            box-shadow: 5px 5px 0px var(--pk-black);
        }

        .card:hover {
            transform: translate(-3px, -3px);
            box-shadow: 8px 8px 0px var(--pk-blue);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            border-bottom: 3px solid var(--pk-gray);
            padding-bottom: 10px;
        }

        .card-icon { font-size: 1.8rem; color: var(--pk-blue); }
        .card-title {
            font-size: 1.25rem;
            font-weight: 900;
            color: var(--pk-black);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed var(--pk-gray);
        }

        .info-label { font-weight: 700; color: #777; }
        .info-value { font-weight: 800; color: var(--pk-blue); }

        .card-content {
            flex: 1;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card-link {
            text-align: center;
            background-color: var(--pk-yellow);
            color: var(--pk-black);
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            border: 3px solid var(--pk-black);
            font-weight: 900;
            transition: 0.1s;
        }

        .card-link:hover { background-color: var(--pk-white); }

        .center-footer {
            background-color: var(--pk-black);
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }

        .center-footer p {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="<?php echo $showCenter ? 'center-body' : 'login-body'; ?>">

<?php if (!$showCenter): ?>
    <div class="login-wrap">
    <div class="container">
        <div class="header">
            <div class="header-icon"><img src="./images/h07-1.png" width="100" alt=""></div>
            <h1>歡迎登入(COOKIE)</h1>
            <p class="subtitle">開始你的冒險旅程</p>
        </div>

        <form class="poke-form" action="" method="post">
            <div class="form-group">
                <label for="username">訓練家帳號</label>
                <input type="text" id="username" name="username" placeholder="請輸入帳號" required>
            </div>

            <div class="form-group">
                <label for="password">安全密碼</label>
                <input type="password" id="password" name="password" placeholder="請輸入密碼" required>
            </div>

            <button type="submit" class="submit-btn">進入對戰系統</button>
        </form>

        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">OR</span>
            <div class="divider-line"></div>
        </div>

        <div class="footer-link">
            新手訓練家？ <a href="#">領取新手禮包(註冊)</a>
        </div>

        <div class="login-back-row">
            <a href="<?php echo htmlspecialchars($noteIndexHref, ENT_QUOTES, 'UTF-8'); ?>" class="btn-back-notes"><i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記</a>
        </div>
    </div>
    </div>

<?php else: ?>

    <header>
        <div class="logo">
            <div class="logo-icon">🔴</div>
            <span>TRAINER CENTER</span>
        </div>
        <div class="nav-actions">
            <a href="<?php echo htmlspecialchars($noteIndexHref, ENT_QUOTES, 'UTF-8'); ?>" class="btn-back-notes"><i class="fa-solid fa-book-open" aria-hidden="true"></i> 回到課程筆記</a>
            <a href="<?php echo htmlspecialchars(basename(__FILE__), ENT_QUOTES, 'UTF-8'); ?>?logout=1" class="logout-btn">結束冒險</a>
        </div>
    </header>

    <div class="main-container">
        <div class="welcome-section">
            <div class="welcome-emoji">⚡</div>
            <h2>WELCOME BACK, TRAINER!</h2>
            <p><?php echo $userDisplay; ?></p>
            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">準備好今天的對戰了嗎？ ⚔️</p>
        </div>

        <div class="decorative-line"></div>

        <div class="content-grid">
            <div class="card user-info-card">
                <div class="card-header">
                    <div class="card-icon">🪪</div>
                    <div class="card-title">訓練家資訊</div>
                </div>
                <div class="info-item">
                    <div class="info-label">ID / 帳號</div>
                    <div class="info-value"><?php echo $userDisplay; ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">訓練家等級</div>
                    <div class="info-value">🏆 精英訓練家</div>
                </div>
                <div class="info-item">
                    <div class="info-label">冒險開始日期</div>
                    <div class="info-value">2026.05.01</div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">📈</div>
                    <div class="card-title">我的成就</div>
                </div>
                <div class="card-content">
                    查看你的徽章收集進度、對戰勝率，以及在冒險中達成的各項里程碑。
                </div>
                <a href="#" class="card-link">查看圖鑑</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">⚙️</div>
                    <div class="card-title">系統設定</div>
                </div>
                <div class="card-content">
                    調整你的傳送裝置設置、更改密碼，或更新你的個人訓練家頭像。
                </div>
                <a href="#" class="card-link">進入設定</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">💰</div>
                    <div class="card-title">聯盟積分</div>
                </div>
                <div class="card-content">
                    你在對戰中獲得的積分，可以在聯盟商店兌換大師球或各類藥劑。
                </div>
                <a href="#" class="card-link">前往商店</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">📩</div>
                    <div class="card-title">聯盟訊息</div>
                </div>
                <div class="card-content">
                    來自寶可夢中心或聯盟官方的重要通知，別錯過任何限時活動！
                </div>
                <a href="#" class="card-link">讀取郵件</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">⭐</div>
                    <div class="card-title">重要收藏</div>
                </div>
                <div class="card-content">
                    管理你標記為最愛的寶可夢數據，或是你特別珍藏的冒險筆記。
                </div>
                <a href="#" class="card-link">查看收藏</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-icon">🆘</div>
                    <div class="card-title">中心服務</div>
                </div>
                <div class="card-content">
                    冒險中遇到困難了嗎？寶可夢中心專員將隨時為你提供支援服務。
                </div>
                <a href="#" class="card-link">連線客服</a>
            </div>
        </div>
    </div>

    <footer class="center-footer">
        <p>© 2026 POKÉMON TRAINER CENTER · GO FOR IT! ⚡</p>
    </footer>

<?php endif; ?>

</body>
</html>
