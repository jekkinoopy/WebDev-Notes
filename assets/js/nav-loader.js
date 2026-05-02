document.addEventListener("DOMContentLoaded", function () {
    console.log("Nav Loader: 腳本開始執行");

    const navbar = document.querySelector(".navbar");
    if (!navbar) {
        console.error("Nav Loader: 找不到 .navbar 容器！");
        return;
    }

    // 1. 自動計算路徑前綴
    const path = window.location.pathname;
    let basePath = (path.endsWith('/') || path.endsWith('index.html')) ? "./" : "../../";

    // 2. 施工中樣式設定 (灰色、禁止點擊、低透明度)
    const disabledStyle = 'style="color: #bbb; cursor: not-allowed; pointer-events: none; opacity: 0.6;"';

    // 3. 完整導覽資料 (在這裡修改 true/false 即可控制開關)
    const navData = [
        {
            title: "資料庫",
            links: [
                { name: "PHP 語言", url: "courses/01-database/php/index.html", isFinished: true },
                { name: "MySQL 資料庫", url: "#", isFinished: false },
                { name: "SQL 語法", url: "#", isFinished: false },
                { name: "Git 控制", url: "courses/01-database/Git/index.html", isFinished: false }
            ]
        },
        {
            title: "動態技術",
            links: [
                { name: "JavaScript", url: "#", isFinished: false },
                { name: "jQuery", url: "#", isFinished: false },
                { name: "Ajax 應用", url: "#", isFinished: false }
            ]
        },
        {
            title: "網頁排版",
            links: [
                { name: "HTML5", url: "courses/03-layout/html5/index.html", isFinished: true },
                { name: "CSS3", url: "#", isFinished: false },
                { name: "RWD 響應式", url: "#", isFinished: false }
            ]
        },
        {
            title: "視覺設計",
            links: [
                { name: "Photoshop", url: "courses/04-design/photoshop/index.html", isFinished: true },
                { name: "Illustrator", url: "courses/04-design/illustrator/index.html", isFinished: false }
            ]
        },
        {
            title: "數位媒體",
            links: [
                { name: "API 串接", url: "courses/05-media/index.html", isFinished: false },
                { name: "MVC 模式", url: "#", isFinished: false }
            ]
        },
        {
            title: "網路概論",
            links: [
                { name: "網路基礎", url: "courses/06-network/index.html", isFinished: false },
                { name: "架構知識", url: "#", isFinished: false }
            ]
        },
        {
            title: "專案實務",
            links: [
                { name: "乙級檢定", url: "courses/07-projects/index.html", isFinished: false },
                { name: "實作專案", url: "courses/07-projects/index.html", isFinished: false }
            ]
        }
    ];

    // 4. 渲染邏輯
    const generateNav = () => {
        return navData.map(section => `
            <li class="dropdown">
                <a href="#" class="dropbtn">${section.title}</a>
                <div class="dropdown-content">
                    ${section.links.map(link => `
                        <a href="${link.isFinished ? basePath + link.url : '#'}" 
                           ${link.isFinished ? '' : disabledStyle}>
                           ${link.name}${link.isFinished ? '' : ' (WIP)'}
                        </a>
                    `).join('')}
                </div>
            </li>
        `).join('');
    };

    try {
        const navHTML = `
        <div class="nav-container">
            <a href="${basePath}index.html" class="logo" id="main-logo">
                <div class="logo-icon"></div>
                <h1>努比的全端筆記</h1>
            </a>
            <ul class="nav-links">
                ${generateNav()}
            </ul>
        </div>`;

        navbar.innerHTML = navHTML;
        console.log("Nav Loader: 導覽列全數渲染成功！");
    } catch (err) {
        console.error("Nav Loader 渲染過程出錯:", err);
    }
});