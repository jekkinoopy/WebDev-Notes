/**
 * course-note-code-window.js：講義程式窗（[data-note-code-window]）— 複製按鈕、可視高度與行數同步。
 * Prism 語法上色須由各頁先載入對應 prism 元件（如 prism-php、prism-css）。
 */
(function () {
  function copyText(text) {
    if (navigator.clipboard && navigator.clipboard.writeText) {
      return navigator.clipboard.writeText(text);
    }
    const ta = document.createElement("textarea");
    ta.value = text;
    ta.style.position = "fixed";
    ta.style.left = "-9999px";
    document.body.appendChild(ta);
    ta.select();
    try {
      document.execCommand("copy");
      return Promise.resolve();
    } finally {
      document.body.removeChild(ta);
    }
  }

  /** 程式行數 ≤ 此值時高度跟內容；超過則維持 CSS 約 15 行高＋卷軸（避免與【執行結果】並排時總高過大） */
  const MAX_LINES_AUTO_HEIGHT = 16;

  function resolveLineCount(root) {
    var fromAttr = parseInt(root.getAttribute("data-code-line-count"), 10);
    if (Number.isFinite(fromAttr) && fromAttr >= 1) {
      return fromAttr;
    }
    var code = root.querySelector("pre code[class*='language-']");
    if (!code) return 1;
    var raw = code.textContent || "";
    var n = raw.split(/\r\n|\r|\n/).length;
    return n >= 1 ? n : 1;
  }

  function syncBodyHeight(root) {
    var body = root.querySelector(".note-code-window-body");
    if (!body) return;
    var lines = resolveLineCount(root);
    if (lines <= MAX_LINES_AUTO_HEIGHT) {
      body.classList.add("is-auto-height");
    } else {
      body.classList.remove("is-auto-height");
    }
  }

  function initCopy(root) {
    const btn = root.querySelector(".note-code-window-copy");
    const code = root.querySelector("pre code.language-php, pre code[class*='language-']");
    if (!btn || !code) return;

    btn.addEventListener("click", function () {
      const raw = code.textContent || "";
      copyText(raw).then(
        function () {
          btn.setAttribute("data-copied", "1");
          btn.setAttribute("aria-label", "已複製");
          var t = setTimeout(function () {
            btn.removeAttribute("data-copied");
            btn.setAttribute("aria-label", "複製程式碼");
            clearTimeout(t);
          }, 2000);
        },
        function () {
          btn.setAttribute("aria-label", "複製失敗");
        },
      );
    });
  }

  function run() {
    if (typeof Prism !== "undefined" && typeof Prism.highlightAll === "function") {
      Prism.highlightAll();
    }
    document.querySelectorAll("[data-note-code-window]").forEach(function (root) {
      syncBodyHeight(root);
      initCopy(root);
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", run);
  } else {
    run();
  }
})();
