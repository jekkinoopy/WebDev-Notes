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

## 換機／預覽

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

---

更動〈變更〉後，回覆第一句寫「已更新 CURSOR-HANDOFF」即可。
