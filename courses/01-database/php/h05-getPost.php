<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁傳值重點整理 - 努比的全端筆記</title>
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
            <h2 class="note-title">網頁傳值（GET／POST）</h2>
            <p class="hero-desc">表單與連結如何把資料送到另一支程式，以及接收端常搭配的判斷與轉址。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">為什麼需要「網頁傳值」</h3>
            <div class="learning-point-box">
                <p>多數網站不會只有一個靜態頁；搜尋、登入、送表單都會把資料<strong>從 A 頁送到 B 頁</strong>，B 頁必須能讀取這些資料再決定要顯示什麼或做什麼處理。</p>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">GET 與 POST 對照</h3>
            <div class="learning-point-box">
                <table>
                    <tr>
                        <th>項目</th>
                        <th>GET</th>
                        <th>POST</th>
                    </tr>
                    <tr>
                        <td>資料可見性</td>
                        <td>會出現在網址列（Query String）</td>
                        <td>不顯示在網址上（請求本文傳送）</td>
                    </tr>
                    <tr>
                        <td>適合情境</td>
                        <td>較不涉及隱私、可被書籤或分享的參數</td>
                        <td>較長內容、密碼、需隱含的表單送出</td>
                    </tr>
                    <tr>
                        <td>長度／使用方式</td>
                        <td>長度相對受限；也可直接寫在連結網址上</td>
                        <td>長度較寬鬆；通常配合 <code>&lt;form&gt;</code></td>
                    </tr>
                    <tr>
                        <td>直觀類比（教材說法）</td>
                        <td>明信片：地址與訊息都看得到</td>
                        <td>信封：收件資訊在外，訊息在內</td>
                    </tr>
                </table>
                <p class="learning-point-title is-bracket-heading" style="margin-top: 1rem;">【PHP 接收】</p>
                <ul class="custom-list">
                    <li>網址與 GET 參數：超全域陣列 <code>$_GET</code></li>
                    <li>表單以 POST 送出：通常讀取 <code>$_POST</code></li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">表單要指明的三件事</h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li><strong>action：</strong>資料要送到的目的地（網址或程式檔）。</li>
                    <li><strong>method：</strong><code>GET</code> 或 <code>POST</code>。</li>
                    <li><strong>上傳檔案時：</strong>需加 <code>enctype=&quot;multipart/form-data&quot;</code>。</li>
                </ul>
            </div>
            <div class="note-practice-sticky">
                <pre class="language-markup"><code class="language-markup">&lt;form action="target.php" method="GET"&gt;
  &lt;input type="text" name="q" value=""&gt;
  &lt;input type="submit" value="送出"&gt;
&lt;/form&gt;

&lt;form action="target.php" method="POST" enctype="multipart/form-data"&gt;
  ...
&lt;/form&gt;</code></pre>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle"><code>header()</code> 轉址</h3>
            <div class="learning-point-box">
                <p>可在回應標頭指定瀏覽器改向另一個位址，效果等同「對目標再發一個請求」。使用 <code>Location</code> 時，目標網址後方仍可接 Query String，以 GET 方式帶參數。</p>
            </div>
            <div class="note-practice-sticky">
                <pre class="language-php"><code class="language-php">header("Location: target.php");
header("Location: target.php?error=fail");</code></pre>
            </div>
            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【實務提醒】</p>
                <ul class="custom-list">
                    <li>在送出任何輸出（含空白、HTML）之前呼叫，否則標頭可能已送出而失敗。</li>
                    <li>轉址後常搭配 <code>exit</code> 結束後續程式，避免多餘輸出。</li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle"><code>isset()</code> 與 <code>empty()</code></h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li><strong>isset($x)：</strong>變數已宣告且值<strong>不是</strong> <code>null</code> 時為 true。</li>
                    <li><strong>empty($x)：</strong>若值視為「空」（含 <code>0</code>、<code>&quot;0&quot;</code>、<code>&quot;&quot;</code>、空陣列、<code>false</code>、<code>null</code>、未定義）則為 true。</li>
                </ul>
                <p style="margin-top: 0.75rem;">接收表單或網址參數時，常先用兩者判斷<strong>要不要處理、要不要顯示錯誤</strong>；教材中有完整對照表，可多對照 edge case（例如字串 <code>&quot;0&quot;</code>）。</p>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">教材中的網頁傳值練習方向</h3>
            <div class="learning-point-box">
                <ul class="custom-list">
                    <li><strong>BMI：</strong>一頁輸入身高體重，另一頁顯示結果。</li>
                    <li><strong>登入：</strong>一頁帳密，另一頁判斷是否正確。</li>
                    <li><strong>萬年曆：</strong>以月為單位顯示、用連結切上月／下月、樣式標示今日與週末。</li>
                </ul>
                <p style="margin-top: 0.75rem;">本目錄可對照 <code>h04-bmi.php</code>、<code>h05-login.php</code>、<code>h06-webCalendar.php</code>。</p>
            </div>
        </div>

        <div class="note-lesson-nav-wrap">
            <div id="note-lesson-nav-root" data-lesson-id="h05-getPost"></div>
        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【原文與下一站】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-01/" target="_blank" rel="noopener noreferrer">Mack Liu — [PHP] Lesson 1 網頁傳值</a>
                </li>
                <li>
                    <a href="https://mackliu.github.io/php-book/2021/09/21/php-lesson-02/" target="_blank" rel="noopener noreferrer">Mack Liu — [PHP] Lesson 2 網頁狀態管理 COOKIE 和 SESSION</a>
                </li>
                <li>
                    <a href="h05-cookieSession.php">本站筆記：Cookie／Session 重點整理（對應 Lesson 2）</a>
                </li>
            </ul>
        </aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="../../../assets/js/course-note-code-window.js"></script>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
