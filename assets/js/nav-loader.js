document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    if (!navbar) return;

    // 取得當前頁面是否在子目錄 (判斷是否包含 courses)
    const isSubPage = window.location.pathname.includes('/courses/');

    // 如果在子目錄，所有連結前面補 ../../ 
    // 如果在首頁，連結前面什麼都不補
    const prefix = isSubPage ? "../../../" : "";

    const disabledStyle = 'style="color: #bbb; cursor: not-allowed; pointer-events: none; opacity: 0.6;"';

    const navData = [
        {
            title: "資料庫",
            links: [
                { name: "PHP 語言", url: "courses/01-database/php/index.html", isFinished: true },
                { name: "MySQL 資料庫", url: "#", isFinished: false },
                { name: "SQL 語法", url: "courses/01-database/sql/index.html", isFinished: true },
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

    const generateNav = () => {
        return navData.map(section => `
            <li class="dropdown">
                <a href="#" class="dropbtn">${section.title}</a>
                <div class="dropdown-content">
                    ${section.links.map(link => {
            let finalUrl = link.url;
            if (link.isFinished && isSubPage) {
                // 針對內頁，強制修正回根目錄起跳
                finalUrl = prefix + link.url;
            }
            return `
                            <a href="${link.isFinished ? finalUrl : '#'}" 
                               ${link.isFinished ? '' : disabledStyle}>
                               ${link.name}${link.isFinished ? '' : ' (WIP)'}
                            </a>
                        `;
        }).join('')}
                </div>
            </li>
        `).join('');
    };

    const navHTML = `
    <div class="nav-container">
        <a href="${isSubPage ? prefix + 'index.html' : 'index.html'}" class="logo">
            <div class="logo-icon"></div>
            <h1>努比的全端筆記</h1>
        </a>
        <ul class="nav-links">
            ${generateNav()}
        </ul>
    </div>`;

    navbar.innerHTML = navHTML;
});
// 自動處理全站分頁圖示 (SVG 版本)
(function () {
    // 1. 移除可能存在的舊圖示標籤 (避免衝突)
    const existingIcon = document.querySelector('link[rel="icon"]');
    if (existingIcon) existingIcon.remove();

    // 2. 建立新的 SVG 圖示標籤
    const link = document.createElement('link');
    link.rel = 'icon';
    link.type = 'image/svg+xml'; // 指定為 SVG 格式
    link.href = '/assets/images/code.svg?v=' + Date.now(); // 加上時間戳記，絕對不被快取擋住

    document.head.appendChild(link);
})();