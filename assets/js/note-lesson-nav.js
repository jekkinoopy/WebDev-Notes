/**
 * PHP 筆記頁底部：上一課 / 下一課（對應 courses/01-database/php/index.html 卡片順序）
 * 頁面請在 #note-lesson-nav-root 設 data-lesson-id="02-select"（檔名不含副檔名）
 */
(function () {
  function getExt() {
    var p = window.location.pathname || "";
    return /\.html$/i.test(p) ? ".html" : ".php";
  }

  /** @type {{ id: string, title: string }[]} */
  var CHAIN = [
    { id: "01-basic", title: "程式基礎概念" },
    { id: "02-select", title: "選擇結構與多選結構" },
    { id: "03-forloop", title: "For Loop 迴圈" },
    { id: "04-pra01", title: "成績等級判定" },
    { id: "05-pra02", title: "閏年判斷實戰" },
    { id: "06-pra03", title: "綜合練習三" },
    { id: "07-pra04", title: "綜合練習四" },
    { id: "08-pra05", title: "綜合練習五" },
    { id: "09-pra06", title: "瑪利歐金幣牆" },
    { id: "10-array", title: "陣列基礎" },
    { id: "11-pra07", title: "九九乘法表陣列" },
    { id: "12-pra08", title: "威力彩電腦選號" },
    { id: "13-pra09", title: "五百年閏年搜尋" },
    { id: "14-pra10", title: "天干地支年別轉換" },
    { id: "15-pra11", title: "原地陣列反轉" },
    { id: "h01-string", title: "字串處理綜合練習" },
    { id: "h02-date", title: "日期函式應用練習" },
    { id: "h03-calander", title: "線上月曆製作" },
    { id: "h06-webCalendar", title: "網頁版萬年曆" },
    { id: "h04-bmi", title: "BMI 計算實作" },
    { id: "h05-login", title: "登入驗證練習" },
    { id: "h07-loginCookie", title: "Cookie 狀態管理" },
    { id: "h08-loginSession", title: "Session 會員登入實作" },
  ];

  var SERIES = "[基礎課程]";
  var INDEX_HREF = "index.html";

  document.addEventListener("DOMContentLoaded", function () {
    var root = document.getElementById("note-lesson-nav-root");
    if (!root) return;

    var lessonId = root.getAttribute("data-lesson-id");
    if (!lessonId) return;

    var cur = CHAIN.findIndex(function (x) {
      return x.id === lessonId;
    });
    if (cur === -1) return;

    var ext = getExt();
    var parts = [];

    parts.push('<nav class="note-lesson-nav" aria-label="單元導覽">');

    // 上一則
    if (cur > 0) {
      var prev = CHAIN[cur - 1];
      var prevNum = cur;
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--prev" href="' +
          prev.id +
          ext +
          '"><span class="note-lesson-nav-chevron" aria-hidden="true">‹</span><span class="note-lesson-nav-text">' +
          SERIES +
          " Lesson " +
          prevNum +
          " " +
          prev.title +
          "</span></a>"
      );
    } else {
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--prev" href="' +
          INDEX_HREF +
          '"><span class="note-lesson-nav-chevron" aria-hidden="true">‹</span><span class="note-lesson-nav-text">' +
          SERIES +
          " 課程總覽</span></a>"
      );
    }

    // 下一則
    if (cur < CHAIN.length - 1) {
      var next = CHAIN[cur + 1];
      var nextNum = cur + 2;
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--next" href="' +
          next.id +
          ext +
          '"><span class="note-lesson-nav-text">' +
          SERIES +
          " Lesson " +
          nextNum +
          " " +
          next.title +
          '</span><span class="note-lesson-nav-chevron" aria-hidden="true">›</span></a>'
      );
    } else {
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--next" href="' +
          INDEX_HREF +
          '"><span class="note-lesson-nav-text">' +
          SERIES +
          ' 課程總覽</span><span class="note-lesson-nav-chevron" aria-hidden="true">›</span></a>'
      );
    }

    parts.push("</nav>");
    root.innerHTML = parts.join("");
  });
})();
