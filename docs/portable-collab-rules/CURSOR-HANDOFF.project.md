# Cursor 接力（【專案名稱】）

聊天**不**保證跨機保留 → **以本檔 + Git 為準**。改檔前先讀全文 + 最底下〈變更〉。

母筆記站：[WebDev-Notes](https://github.com/jekkinoopy/WebDev-Notes) · PHP 課程：<https://jekkinoopy.github.io/WebDev-Notes/courses/01-database/php/index.html>

## 開工

1. 看〈變更〉最新日期。
2. 動**辦案筆記**前對既有版型：`notes/01-標點符號.html`、`Conan.css`。
3. **只動使用者點名的檔**。
4. 協作規則有變 → 在〈變更〉**加一則**（勿刪舊的）。

## 本專案路徑

| 用途 | 路徑 |
|------|------|
| 站首 | `index.html` |
| 辦案筆記目錄 | `notes/index.html` |
| 筆記上下則 | `conan-notes-nav.js` → `CHAIN` |
| 頁尾跨站連結 | `practice-peer-nav.js` |

**新辦案筆記一則：**`notes/NN-….html` + 目錄 `<li>` + `CHAIN` 三處同步；內頁 `#conan-notes-nav-root` + `data-note-id`。細則見 `.cursor/rules/repo-workflow.mdc`。

## Git commit（助理回覆結尾）

格式 `fix:`／`feat:`／`style:` + 重點（**不超過 15 字**）；只寫檔案實際改動。細則見 `.cursor/rules/git-commit.mdc`。**勿擅自 `git commit`**，除非使用者明確要求。

## 本機預覽

```bash
php -S localhost:8080
```

→ <http://localhost:8080/index.html>（專案根目錄執行）

## 〈變更〉（append 最下方）

### YYYY-MM-DD
- 需求：…
- 範圍：只動 `…`

### 【建立日】從 WebDev-Notes 獨立
- 複製 `docs/portable-collab-rules` 協作規範至本 repo。

---

更動〈變更〉後，回覆第一句可寫「已更新 CURSOR-HANDOFF」。
