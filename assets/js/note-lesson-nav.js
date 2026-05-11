/** 講義底部：上一則／下一則。PHP：`data-lesson-id`；SQL：`data-lesson-scope="sql"` + `data-lesson-id`。 */
(function () {
  function getExt() {
    var p = window.location.pathname || "";
    return /\.html$/i.test(p) ? ".html" : ".php";
  }

  /** @type {{ id: string, title: string }[]} */
  var CHAIN_SQL = [
    { id: "01-expense-ledger", title: "每日花費流水帳（DDL／DML）" },
  ];

  /** @type {{ id: string, title: string }[]} */
  var CHAIN = [
    { id: "01-basic", title: "程式基礎概念" },
    { id: "02-select", title: "選擇結構與多選結構" },
    { id: "03-forloop", title: "For Loop 迴圈" },
    { id: "04-pra01", title: "成績等級判定" },
    { id: "05-pra02", title: "閏年判斷實戰" },
    { id: "06-pra03", title: "規則數列（for 迴圈）" },
    { id: "07-pra04", title: "九九乘法表（表格與交叉表）" },
    { id: "08-pra05", title: "尋找字元（while）" },
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
    { id: "h05-getPost", title: "網頁傳值（GET／POST）重點整理" },
    { id: "h05-cookieSession", title: "Cookie／Session 狀態管理重點整理" },
    { id: "h05-login", title: "登入驗證練習" },
    { id: "h07-loginCookie", title: "Cookie 狀態管理" },
    { id: "h08-loginSession", title: "Session 會員登入實作" },
  ];

  var SERIES_PHP = "[基礎課程]";
  var SERIES_SQL = "[SQL]";
  var INDEX_HREF = "index.html";

  document.addEventListener("DOMContentLoaded", function () {
    var root = document.getElementById("note-lesson-nav-root");
    if (!root) return;

    var lessonId = root.getAttribute("data-lesson-id");
    if (!lessonId) return;

    var scope = root.getAttribute("data-lesson-scope") || "php";
    var chain = scope === "sql" ? CHAIN_SQL : CHAIN;
    var series = scope === "sql" ? SERIES_SQL : SERIES_PHP;

    var cur = chain.findIndex(function (x) {
      return x.id === lessonId;
    });
    if (cur === -1) return;

    var ext = getExt();
    var parts = [];

    parts.push('<nav class="note-lesson-nav" aria-label="單元導覽">');

    var indexLabel =
      scope === "sql" ? series + " 學習筆記目錄" : series + " 課程總覽";
    var indexLabelPrev = indexLabel;
    var indexLabelNext = indexLabel;
    if (scope === "sql" && chain.length === 1) {
      indexLabelPrev = series + " 目錄";
      indexLabelNext = "回到 " + series + " 目錄";
    }

    var prevHrefOverride = root.getAttribute("data-lesson-prev-href");
    var nextHrefOverride = root.getAttribute("data-lesson-next-href");

    // 上一則
    if (cur > 0) {
      var prev = chain[cur - 1];
      var prevNum = cur;
      var prevHref =
        prevHrefOverride && prevHrefOverride.length
          ? prevHrefOverride
          : prev.id + ext;
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--prev" href="' +
          prevHref +
          '"><span class="note-lesson-nav-chevron" aria-hidden="true">‹</span><span class="note-lesson-nav-text">' +
          series +
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
          indexLabelPrev +
          "</span></a>"
      );
    }

    // 下一則
    if (cur < chain.length - 1) {
      var next = chain[cur + 1];
      var nextNum = cur + 2;
      var nextHref =
        nextHrefOverride && nextHrefOverride.length
          ? nextHrefOverride
          : next.id + ext;
      parts.push(
        '<a class="note-lesson-nav-link note-lesson-nav-link--next" href="' +
          nextHref +
          '"><span class="note-lesson-nav-text">' +
          series +
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
          indexLabelNext +
          '</span><span class="note-lesson-nav-chevron" aria-hidden="true">›</span></a>'
      );
    }

    parts.push("</nav>");
    root.innerHTML = parts.join("");
  });
})();
