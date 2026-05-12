# Cursor 接力（本專案）

聊天**不**保證跨機保留 → **以本檔 + Git 為準**。改檔前先讀全文 + 最底下〈變更〉。  
協作與成長習慣（溝通節奏、怎麼問助理）：見 [`docs/ai-collab-guide.md`](docs/ai-collab-guide.md)；說明索引見 [`docs/README.md`](docs/README.md)。

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

**`03-sql-syntax.html` 與 `course-note.css`（小節標題）：**全站 `.note-card h3::before` **維持 💎**（大段 `note-subtitle` 等）。`h3.note-section-lead` 在共用樣式中**關閉 `::before`**，避免與大標重複鑽石；**小節圖示（Font Awesome 筆等）只寫在該講義頁**的 `head`（連結 FA + 頁內 `<style>` + 標題內 `<i>`），**勿**在 `course-note.css` 全域 `@import` FA 或改掉全站 `h3` 鑽石。改動範圍若含「還原／重做」，**不得**把已分好的區塊（例如 `CREATE TABLE` 與 `INSERT` 分兩段）一併刪回舊版。

**可推斷則少問（省打字）：**若意圖已能由**小節標題、`images/` 檔名規律、既有 HTML 結構**確定（例：`create-table-1/2/3` 只掛在 CREATE TABLE 的【執行結果】；`insert-1` 只掛 INSERT），**直接改對並簡短說明**即可，不必先長文確認。會動到**未點名檔**、**全站共用樣式**、或**撤銷已約好的版面／分區**時，仍應先問一句。已寫在本文的機械規則（gutter 行號勿前置空白、【執行結果】圖維持比例、DOM 包法）**主動套用**，勿等使用者重複提醒。

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

### 2026-05-15
- 需求：`03-sql-syntax.html` 刪除各段參考 SQL 與結果圖，程式窗留白、【執行結果】改占位，供自練。
- 範圍：只動 `courses/01-database/SQL/03-sql-syntax.html`。

### 2026-05-18
- 需求：新增協作／成長筆記獨立檔，HANDOFF 開頭加連結。
- 範圍：`docs/COLLABORATION-AND-GROWTH.md`（新建）；`CURSOR-HANDOFF.md`（首段連結 + 本則〈變更〉）。

### 2026-05-20
- 需求：釐清多個「README」來源；根目錄改為專案簡介、色彩長文移至 `docs/colors-quickstart.md`。
- 範圍：`README.md`（根，改寫）、`docs/colors-quickstart.md`（新建）、`docs/README.md`（索引表更新）。

### 2026-05-19
- 需求：協作筆記改較直觀檔名、補 `docs/` 索引；釐清非正式「規範」文件。
- 範圍：`docs/ai-collab-guide.md`（由 `COLLABORATION-AND-GROWTH.md` 更名並微調開頭）；`docs/README.md`（新建）；`CURSOR-HANDOFF.md`（連結）；刪除 `docs/COLLABORATION-AND-GROWTH.md`。

### 2026-05-17
- 需求：協作上「可從檔名／小節推斷則直接做、少來回確認」；機械規則主動套用。
- 範圍：只動 `CURSOR-HANDOFF.md`（課中補一段）。

### 2026-05-11
- 需求：`03-sql-syntax.html` 各段【執行結果】改回可換圖：依段落命名之 `images/*.jpg`（如 `insert.jpg`、`order-by.jpg`）。
- 範圍：`courses/01-database/SQL/03-sql-syntax.html`；本檔〈變更〉。

---

更動〈變更〉後，回覆第一句寫「已更新 CURSOR-HANDOFF」即可。
