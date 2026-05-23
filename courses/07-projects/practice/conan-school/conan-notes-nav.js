/** 辦案筆記內頁：上一則／下一則。`data-note-id` 對應 CHAIN 的 id（與檔名不含副檔名一致）。 */
(function () {
  /** @type {{ id: string, href: string, title: string }[]} */
  var CHAIN = [
    { id: "01-標點符號", href: "01-標點符號.html", title: "標點符號" },
    { id: "02-PHP與SQL", href: "02-PHP與SQL.html", title: "PHP 與 SQL" },
    { id: "03-後端核心動作鑑識", href: "03-後端核心動作鑑識.html", title: "後端核心動作鑑識" },
    { id: "04-後台動態插頁與inc", href: "04-後台動態插頁與inc.html", title: "後台動態插頁與 ?inc" },
  ];

  var INDEX_HREF = "index.html";
  var SERIES = "[辦案筆記]";

  document.addEventListener("DOMContentLoaded", function () {
    var root = document.getElementById("conan-notes-nav-root");
    if (!root) return;

    var noteId = root.getAttribute("data-note-id");
    if (!noteId) return;

    var cur = CHAIN.findIndex(function (x) {
      return x.id === noteId;
    });
    if (cur === -1) return;

    var parts = [];
    parts.push('<nav class="conan-notes-nav" aria-label="筆記導覽">');

    if (cur > 0) {
      var prev = CHAIN[cur - 1];
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--prev" href="' +
          prev.href +
          '"><span class="conan-notes-nav-chevron" aria-hidden="true">‹</span><span class="conan-notes-nav-text">' +
          SERIES +
          " " +
          prev.title +
          "</span></a>"
      );
    } else {
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--prev" href="' +
          INDEX_HREF +
          '"><span class="conan-notes-nav-chevron" aria-hidden="true">‹</span><span class="conan-notes-nav-text">' +
          SERIES +
          " 目錄</span></a>"
      );
    }

    if (cur < CHAIN.length - 1) {
      var next = CHAIN[cur + 1];
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--next" href="' +
          next.href +
          '"><span class="conan-notes-nav-text">' +
          SERIES +
          " " +
          next.title +
          '</span><span class="conan-notes-nav-chevron" aria-hidden="true">›</span></a>'
      );
    } else {
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--next" href="' +
          INDEX_HREF +
          '"><span class="conan-notes-nav-text">' +
          SERIES +
          ' 目錄</span><span class="conan-notes-nav-chevron" aria-hidden="true">›</span></a>'
      );
    }

    parts.push("</nav>");
    root.innerHTML = parts.join("");
  });
})();
