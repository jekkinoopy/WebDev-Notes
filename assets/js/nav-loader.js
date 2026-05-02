document.addEventListener("DOMContentLoaded", function () {
    console.log("Nav Loader: 腳本開始執行");

    const navbar = document.querySelector(".navbar");
    if (!navbar) {
        console.error("Nav Loader: 找不到 .navbar 容器！");
        return;
    }

    // 取得目前的路徑資訊
    const path = window.location.pathname;

    // --- 修正處：統一變數名稱為 basePath ---
    let basePath = (path.endsWith('/') || path.endsWith('index.html')) ? "./" : "../../";

    // 如果你在更深層的路徑，可能需要調整這裡，目前先以兩層為準
    console.log("當前路徑:", path, "計算出的相對路徑前綴:", basePath);

    // 施工中樣式
    const disabledStyle = 'style="color: #999; cursor: not-allowed; pointer-events: none; opacity: 0.6;"';

    try {
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
                    <a href="#" ${disabledStyle}>JavaScript (施工中)</a>
                    <a href="#" ${disabledStyle}>jQuery (施工中)</a>
                    <a href="#" ${disabledStyle}>Ajax 應用 (施工中)</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/03-layout/index.html" class="dropbtn">網頁排版</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/03-layout/html5/index.html">HTML5</a>
                    <a href="#" ${disabledStyle}>CSS3</a>
                    <a href="#" ${disabledStyle}>RWD 響應式</a>
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
                    <a href="#" ${disabledStyle}>MVC 模式</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="${basePath}courses/06-network/index.html" class="dropbtn">網路概論</a>
                <div class="dropdown-content">
                    <a href="${basePath}courses/06-network/index.html">網路基礎</a>
                    <a href="#" ${disabledStyle}>架構知識</a>
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
        console.log("Nav Loader: 導覽列渲染成功");
    } catch (err) {
        console.error("Nav Loader 發生錯誤:", err);
    }
});