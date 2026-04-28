document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    if (!navbar) return;

    // --- 核心改進：自動計算相對路徑，不再依賴固定字串 ---
    const pathArray = window.location.pathname.split('/').filter(p => p.length > 0);
    const isGitHubPages = window.location.pathname.includes('/WebDev-Notes/');
    const depth = isGitHubPages ? pathArray.length - 1 : pathArray.length;

    // 自動生成 ../ 或 ./
    let basePath = depth <= 0 ? './' : '../'.repeat(depth);
    if (window.location.pathname.endsWith('/') || window.location.pathname.endsWith('index.html')) {
        if (depth <= (isGitHubPages ? 1 : 0)) basePath = './';
    }

    const navHTML = `
    <div class="nav-container">
        <a href="${basePath}index.html" class="logo" id="main-logo">
            <div class="logo-icon"></div>
            <h1>努比的全端筆記</h1>
        </a>
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#" class="dropbtn">資料庫</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/01-database/php/index.html">PHP 語言</a>
                    <a href="${basePath}courses/01-database/MySQL/index.html">MySQL 資料庫</a>
                    <a href="${basePath}courses/01-database/SQL/index.html">SQL 語法</a>
                    <a href="${basePath}courses/01-database/Git/index.html">Git 控制</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/02-dynamic/index.html" class="dropbtn">動態技術</a>
                <div class="dropdown-content">
                    <a href="#">JavaScript</a>
                    <a href="#">jQuery</a>
                    <a href="#">Ajax 應用</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/03-layout/index.html" class="dropbtn">網頁排版</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/03-layout/html5/index.html">HTML5</a>
                    <a href="#">CSS3</a>
                    <a href="#">RWD 響應式</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/04-design/index.html" class="dropbtn">視覺設計</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/04-design/photoshop/index.html">Photoshop</a>
                    <a href="${basePath}courses/04-design/illustrator/index.html">Illustrator</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/05-media/index.html" class="dropbtn">數位媒體</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/05-media/index.html">API 串接</a>
                    <a href="#">MVC 模式</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/06-network/index.html" class="dropbtn">網路概論</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/06-network/index.html">網路基礎</a>
                    <a href="#">架構知識</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/07-projects/index.html" class="dropbtn">專案實務</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/07-projects/index.html">乙級檢定</a>
                    <a href="${basePath}courses/07-projects/index.html">實作專案</a>
                </div>
            </li>
        </ul>
    </div>`;

    navbar.innerHTML = navHTML;
    console.log("Nav Loaded! BasePath:", basePath);
});
