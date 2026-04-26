/* ========================================
   Auto Breadcrumb (路徑翻譯)
   ======================================== */
window.addEventListener('DOMContentLoaded', () => {
   const pathMap = {
    "courses": "課程總覽",
    "01-database": "資料庫程式設計",
    "php": "PHP 程式語言",
    "MySQL": "MySQL 資料庫",
    "SQL": "SQL 語法",
    "Git": "Git 版本控制",
    "02-dynamic": "網頁動態技術",
    "03-layout": "網頁排版編輯",
    "html5": "HTML5",
    "04-design": "視覺影像設計",
    "illustrator": "Illustrator 向量設計",
    "photoshop": "Photoshop 數位影像",
    "05-media": "數位媒體應用",
    "06-network": "資訊網路概論",
    "07-projects": "網頁設計實務",
};
// 1. 抓取 HTML 元素 (對應你 HTML 的 class)
    const navElement = document.querySelector('.nav-breadcrumb');
    if (!navElement) return;

// 2. 取得網址並切開 (排除雜訊)
    // 這裡增加 .toLowerCase() 是為了防呆，避免大小寫不對抓不到
    const segments = window.location.pathname.split('/')
        .filter(s => s && s !== 'index.html' && s.toUpperCase() !== 'WEBDEV-NOTES');

// 3. 翻譯每一層
    const translatedSegments = segments.map(seg => {
        return pathMap[seg] || seg; 
    });

// 4. 渲染到畫面上
    if (translatedSegments.length > 0) {
        navElement.innerText = "目前位置：首頁 / " + translatedSegments.join(' / ');
    } else {
        navElement.innerText = "目前位置：首頁";
    }
});

document.querySelector('.nav-breadcrumb').innerText = breadcrumbs;
// 這裡要加一個判斷，避免在沒有 .nav-breadcrumb 的頁面報錯
/* 在你的 JS 文件中找到這段並修改 */

const navElement = document.getElementById('dynamic-nav');

if (navElement) {
    if (segments.length === 0) {
        // 首頁時，顯示原本的連結樣式
        navElement.innerHTML = `<a href="/" class="active">首頁</a>`;
    } else {
        // 進入內頁時，自動變成：首頁 / 第一層 / 第二層
        navElement.innerHTML = `<a href="/">首頁</a> / ${translatedSegments.join(' / ')}`;
    }
}


/* ========================================
   Smooth Scroll & Navigation
   ======================================== */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            
            // Update active nav link
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.classList.remove('active');
            });
            this.classList.add('active');
        }
    });
});

/* ========================================
   Intersection Observer for Animations
   ======================================== */

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards and sections
document.querySelectorAll('.note-card, .about-content').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
    observer.observe(el);
});

/* ========================================
   Active Navigation Link on Scroll
   ======================================== */

window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.classList.add('active');
        }
    });
});

/* ========================================
   Card Interaction Effects
   ======================================== */

document.querySelectorAll('.note-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

/* ========================================
   Page Load Animation
   ======================================== */

window.addEventListener('load', () => {
    document.body.style.opacity = '1';
});

document.body.style.opacity = '0';
document.body.style.transition = 'opacity 0.5s ease-out';

// Trigger animation on page load
setTimeout(() => {
    document.body.style.opacity = '1';
}, 100);
