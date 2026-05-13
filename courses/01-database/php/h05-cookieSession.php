<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie／Session 狀態管理重點整理 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/course-note-code-window.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">參考整理</span>
            <h2 class="note-title">Cookie／Session 狀態管理</h2>
            <p class="hero-desc">在多頁之間沿用「使用者狀態」：暫存在瀏覽器與伺服器的差異。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">為什麼只用 GET／POST 不夠</h3>
            <div class="learning-point-box">
                <p>GET／POST 多半處理<strong>單次、頁與頁之間接力</strong>的資料。若希望在<strong>很多頁面</strong>都能讀到「同一個身分或偏好」，每頁都手動接力會很零碎，因此會用<strong>暫存狀態</strong>的方式，讓多支程式共用同一份資料脈絡。</p>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">Cookie（客戶端）</h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li>資料<strong>主要由瀏覽器保存</strong>，可設定<strong>過期時間</strong>。</li>
                    <li><strong>長度與數量</strong>受瀏覽器規範限制。</li>
                    <li>可被使用者關閉、清除或進入隱私模式而影響行為。</li>
                    <li><strong>隱私與保密性較鬆</strong>，不適合放高度敏感資料（至多搭配其他機制縮短曝險）。</li>
                </ul>
                <p style="margin-top: 0.75rem;">PHP 常用 <code>setcookie()</code> 設定；本站 <code>h07-loginCookie.php</code> 可對照練習。</p>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">Session（伺服器端）</h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li>主要狀態放在<strong>伺服器</strong>，瀏覽器端通常只靠 Session ID（常透過 Cookie）對應到該使用者那一格儲存空間。</li>
                    <li>資料量可比單純 Cookie 寬鬆，實際仍受伺服器組態限制。</li>
                    <li>一般視為<strong>比單靠 Cookie 存機密適合</strong>（仍需 HTTPS、適當逾時與權限檢查）。</li>
                </ul>
                <p style="margin-top: 0.75rem;">PHP 使用前需 <code>session_start()</code>，讀寫用 <code>$_SESSION</code>；本站 <code>h08-loginSession.php</code> 可對照練習。</p>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">Cookie／Session 一覽對照（教材）</h3>
            <div class="learning-point-box">
                <table>
                    <tr>
                        <th></th>
                        <th>Cookie</th>
                        <th>Session</th>
                    </tr>
                    <tr>
                        <td>儲存位置</td>
                        <td>偏向客戶端</td>
                        <td>伺服器端為主（可搭配 Cookie 帶 ID）</td>
                    </tr>
                    <tr>
                        <td>容量／型態</td>
                        <td>較多限制</td>
                        <td>通常較有餘裕、儲存方式較多元</td>
                    </tr>
                    <tr>
                        <td>安全性（概略）</td>
                        <td>較易受端上操作影響</td>
                        <td>相對適合伺服器掌握的登入態</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">會員登入題型常見步驟（教材）</h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li>登入表單（帳號、密碼欄與送出）。</li>
                    <li><strong>登入檢查</strong>：比對資料是否合法（本章可先寫死在程式或用簡易儲存）。</li>
                    <li><strong>登入成功後轉址</strong>（首頁、後台、個人區等）。</li>
                    <li>在未關閉瀏覽器、Session／Cookie 仍有效時，<strong>避免重複要求登入</strong>（各頁讀同一狀態）。</li>
                    <li>登出時<strong>清除</strong> Cookie 或終止／清空 Session。</li>
                </ul>
            </div>
        </div>

        <div class="note-lesson-nav-wrap">
            <div id="note-lesson-nav-root" data-lesson-id="h05-cookieSession"></div>
        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【原文與前置觀念】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-02/" target="_blank" rel="noopener noreferrer">Mack Liu — [PHP] Lesson 2 網頁狀態管理 COOKIE 和 SESSION</a>
                </li>
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-01/" target="_blank" rel="noopener noreferrer">Mack Liu — [PHP] Lesson 1 網頁傳值</a>
                </li>
                <li>
                    <a href="h05-getPost.php">本站筆記：GET／POST 網頁傳值（對應 Lesson 1）</a>
                </li>
            </ul>
        </aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
