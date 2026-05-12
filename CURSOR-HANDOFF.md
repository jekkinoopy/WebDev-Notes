# Cursor 接力（本專案）

聊天**不**保證跨機保留 → **以本檔 + Git 為準**。改檔前先讀全文 + 最底下〈變更〉。

## 開工（四步）

1. 看〈變更〉最新日期。  
2. 動筆記／講義前對母版：`courses/01-database/php/01-basic.html` 或 `01-basic.php`、`assets/css/course-note.css`。  
3. **只動使用者點名的檔**；勿順手改 `assets/js/note-lesson-nav.js` 等共用檔。  
4. 協作規則有變 → 在〈變更〉**加一則**（勿刪舊的）。

## 未要求勿更動（協作邊界）

專案體量大，**任何未在當句需求中點名、未同意範圍的檔案都不得修改**——包含「順手修一下」「看起來比較合理」「幫你統一成 `.php`」等；若認為該動，先問使用者或請使用者把路徑寫進需求再動。

**課程總覽連結：**列表頁（如 `courses/01-database/php/index.html`）上，**已確認好的靜態筆記維持 `.html` 連 `.html`**；不得擅自改成 `.php`。換機預覽「優先開 `.php`」僅為本機驗證習慣，**不**等同要把列表入口全部改成 `.php`。

## 課中（筆記／題）

使用者丟題 → 你拆結構（幾張 card、分不分頁）→ **程式區先留白** → 使用者練完再補：**程式整理、【執行結果】、【學習重點】**。  
一頁≤**四**個重點；檔名 **序號+英文**（SQL 同 PHP，例 `01-expense-ledger`）。**SQL 筆記為純 `.html`**（不必經 PHP）；PHP 課程仍可「先 `.php` 再 `.html`」；沒說的不要做。

**DOM：**`note-practice-sticky` 只包程式窗+執行結果；**學習重點**在外、仍在同張 `note-card`。**延伸閱讀 `aside`** 勿塞進 card 內層。少 `</div>` 會卡死下一張 card。

**SQL 總覽卡片（`courses/01-database/SQL/index.html`）**：每張卡的說明 `<p>` 只寫**該頁筆記在講什麼**（主題、步驟、涵蓋的 SQL 概念）。勿寫**製作／後設**文字（檔名怎麼取、頁面分幾段、有無示意圖連結等）——那些給協作者看，不算讀者簡介。

**程式窗行號欄（`.note-code-window-gutter`）**：樣式含 `white-space: pre`。若把行號打成多行且第二行起帶 **HTML 縮排空格**，空白會算進 gutter 寬度，出現左側大片空白、行號與程式碼被擠到中右。**多行行號請每行行首緊貼數字、勿前置空白**（或 gutter 只用單行）；Prettier 等可能自動破壞——必要時對該段加 `<!-- prettier-ignore -->`。

## 換機／預覽

**Windows + macOS：**專案根有 **`.gitattributes`**，常見文字檔（`.html`、`.css`、`.js`、`.md`、`.php` 等）**行尾為 LF**；兩邊拉同一份 repo 較不會因 CRLF 亂跳 diff。若編輯器可設「預設 LF」，與之一致即可。

`git pull`（必要 `pull --rebase`）→ 看執行結果開 **`.php`**（勿誤開只排版的 `.html`）→ URL 勿空白 → 怪就 **Ctrl+Shift+R**。  
本機例：專案根目錄 `php -S localhost:8080` → `http://localhost:8080/courses/01-database/SQL/01-expense-ledger.html`（資料夾 **`SQL` 大寫**；SQL 講義為靜態頁，用 `.html` 即可預覽）。

**新 SQL 一講：**複製版型 → `note-lesson-nav.js` 的 `CHAIN_SQL` 加一筆 → 頁底 `#note-lesson-nav-root` 設 `data-lesson-scope="sql"` + `data-lesson-id` → 列表頁加連結。

## 〈變更〉（append 最下方，日期標題）

### YYYY-MM-DD
- 需求：…
- 範圍：只動 `…`（或寫全線 PHP）
- 禁止：…（可略）

### 2026-05-12
- 需求：補「未要求勿更動」與列表 `.html`／`.php` 邊界；記錄本日曾更動檔案清單供核對。
- 範圍：只動 `CURSOR-HANDOFF.md`（本則〈變更〉與上一節規則文字）。
- 禁止：未經點名不擴張改其他檔。
- 後續：SQL 兩講改為僅保留 `01-expense-ledger.html`、`03-sql-syntax.html`（刪 `.php`）；`index.html` 連結改 `.html`；`03` 標題縮短；`note-lesson-nav.js` 中 `CHAIN_SQL` 與 SQL 導覽文案（不帶「Lesson N」前綴）。

### 2026-05-13
- 需求：將 SQL 目錄卡片文案原則、`note-code-window-gutter` 多行縮排問題寫入正文「課中」並留〈變更〉。
- 範圍：只動 `CURSOR-HANDOFF.md`。

### 2026-05-14
- 需求：Win + Mac 共用 repo，統一文字檔行尾並記入接力說明。
- 範圍：新增 repo 根目錄 `.gitattributes`；`CURSOR-HANDOFF.md`「換機」補一小段。
- 補充：若舊檔曾混 CRLF，可視需要一次性 `git add --renormalize .` 再提交（會觸發大範圍換行 normalized diff，使用前自行確認）。

---

更動〈變更〉後，回覆第一句寫「已更新 CURSOR-HANDOFF」即可。
