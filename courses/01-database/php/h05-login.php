<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入檢查 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* 修正 1：移除原本 body 的強行居中，改回正常流向 */
        body {
            min-height: 100vh;
            margin: 0;
            display: block; 
        }

        /* 修正 2：建立一個專門讓卡片在內容區居中的容器 */
        .login-wrapper {
            display: flex;
            justify-content: center;
            padding: var(--spacing-xl) 0;
            width: 100%;
        }

        .login-card {
            background-color: var(--white);
            width: 100%;
            max-width: 380px; /* 稍微縮小以適應筆記寬度 */
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            border: 1px solid var(--border-light);
            margin: 0 auto;
        }

        .login-header {
            height: 6px;
            background: var(--gradient-primary);
        }

        .login-body {
            padding: var(--spacing-xl);
        }

        .user-avatar {
            width: 70px;
            height: 70px;
            background-color: var(--gray-50);
            border: 2px solid var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto var(--spacing-lg);
            color: var(--primary);
            font-size: 1.8rem;
        }

        .login-title {
            text-align: center;
            color: var(--text-primary);
            font-size: 1.35rem;
            margin-bottom: var(--spacing-xs);
            font-weight: 700;
        }

        .login-subtitle {
            text-align: center;
            color: var(--text-tertiary);
            font-size: 0.85rem;
            margin-bottom: var(--spacing-xl);
        }

        .form-group {
            margin-bottom: var(--spacing-md);
        }

        .form-group label {
            display: block;
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 0.85rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
        }

        .input-wrapper input {
            width: 100%;
            padding: var(--spacing-md) var(--spacing-md) var(--spacing-md) 45px;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            background-color: var(--gray-50);
            box-sizing: border-box;
            transition: var(--transition-fast);
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: var(--white);
            box-shadow: 0 0 0 3px rgba(86, 204, 242, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--spacing-lg);
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        .btn-login {
            width: 100%;
            padding: var(--spacing-md);
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            border-radius: var(--radius-md);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition-base);
        }

        .btn-login:hover {
            filter: brightness(1.08);
            transform: translateY(-1px);
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
            <span class="category-tag">實戰</span>
            <h2 class="note-title">登入驗證練習</h2>
            <p class="hero-desc">實作基礎的帳號密碼比對邏輯，掌握表單身分驗證流程。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">登入檢查</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong><br>
                1. 建立一個可以輸入帳號和密碼的表單畫面。<br>
                2. 輸入帳號密碼，按下「登入」按鈕後，在另一個頁面顯示帳號密碼是否正確。
            </div>

            <?php
$code = <<<'EOD'
// 【程式碼練習】
// 在此處實作帳號密碼驗證邏輯
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-php"><code class="language-php"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                
                <!-- 修正：將登入卡片包裹在 wrapper 中並放入 code-section -->
                <div class="login-wrapper">
                    <div class="login-card">
                        <div class="login-header"></div>
                        <div class="login-body">
                            <div class="user-avatar">
                                <i class="fa-solid fa-user-astronaut"></i>
                            </div>
                            <h2 class="login-title">歡迎回來</h2>
                            <p class="login-subtitle">請輸入您的帳號密碼以進入會員中心</p>

                            <form action="h05-login-1.php" method="POST">
                                <div class="form-group">
                                    <label>帳號 (Account)</label>
                                    <div class="input-wrapper">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input type="text" name="account" placeholder="請輸入帳號" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>密碼 (Password)</label>
                                    <div class="input-wrapper">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" name="password" placeholder="請輸入密碼" required>
                                    </div>
                                </div>

                                <div class="form-options">
                                    <label style="cursor:pointer;">
                                        <input type="checkbox" name="remember"> 記住我
                                    </label>
                                    <a href="#" style="color:var(--primary-dark); text-decoration:none;">忘記密碼？</a>
                                </div>

                                <button type="submit" class="btn-login">
                                    登入系統
                                </button>
                            </form>
                        </div>
                    </div>
                </div> <!-- End login-wrapper -->
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>在此紀錄關鍵函式或邏輯思維</li>
                    <li>標記需要特別注意的語法細節</li>
                </ul>
            </div>

        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/" target="_blank" rel="noopener noreferrer">[基礎課程] Lesson 2 PHP程式流程控制</a>
                </li>
                <li>
                    <a href="https://github.com/mackliu/115-html/blob/main/07-login-get.php" target="_blank" rel="noopener noreferrer">115 HTML 課程：對照原始碼（07-login-get.php）</a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-id="h05-login"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>
</html>