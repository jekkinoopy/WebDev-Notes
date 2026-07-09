# Developer Rules — WebDev-Notes

---

## 一、協作習慣

### 下需求時帶兩件事
1. **範圍**：只動哪些路徑（例：只動 `courses/01-database/SQL/03-sql-syntax.html`，不要動 `course-note.css`）
2. **完成長相**：你心中「對了」是什麼——畫面、diff、還是沒報錯，一句話即可

### 助理行為
- 意圖已能由小節標題、`images/` 檔名、既有 HTML 結構推斷 → **直接做對再簡短說明**，不必先長文確認
- 會動到**未點名檔**、**全站共用樣式**、或可能推翻已約好的分區 → 先問一句
- 已寫在規範裡的機械規則 → **主動套用**，不等使用者重複提醒

### 教學量控制（可選）
在需求最後加一行：
- `教學：要` — 助理多做「為什麼」與「下次自己做」
- `教學：不要` — 助理只做、一句話收束

### 學習節奏建議
每個小改動盡量經過：**改 → 自己看 diff → 自己開頁面驗收 → 再交助理收尾**

---

## 二、協作邊界

- **只動使用者當次點名的檔案**；未點名、未要求 → 零動作
- 「怎麼做／可以嗎」≠ 請你動手 → 只回文字步驟
- 使用者**已刪除**的樣式或區塊，未經當次明確要求 → 不得加回
- 課程總覽連結（index 頁）：**靜態筆記 `.html` 連 `.html`**，不得擅自改成 `.php`

---

## 三、Git Commit 規範

只要本次對話有任何改檔，回覆結尾**必須主動**附上 commit 指令，不等使用者開口。

> 純聊天、觀念問答、完全沒改任何檔 → 不必附。

```bash
git add .
git commit -m "type: 重點"
```

### type（擇一）
- `fix:` — 修正錯誤、連結、顯示問題
- `feat:` — 新功能、新頁面、新單元
- `style:` — 純排版、文案、樣式，不影響功能邏輯

### 重點規則
- **不超過 15 字**（中文一字算一字）
- 只寫 repo 內實際改動，勿寫聊天教學或原因補充
- 除非使用者明確要求，否則只提供指令文字，不代為執行

---

## 四、時區與 Git 還原

- 以**台灣 UTC+8** 理解「昨天、今天、剛剛」等口語時間
- 不可只憑 `git log` 日期就認定「昨天」並 reset
- 使用者說「還原到昨天／弄壞前」→ 先列出候選 SHA，**確認後再動手**
- 禁止未確認就 `git reset --hard`
- 還原後本地落後遠端 → 提醒勿盲目 `git pull`；改遠端須使用者同意後再 `push --force`

---

## 五、筆記與講義規格

### 開工前
改筆記前先對照母版：`courses/01-database/php/01-basic.html` 或 `assets/css/course-note.css`

### 檔案命名
- 序號 + 英文：如 `01-expense-ledger`（SQL 同 PHP）
- SQL 筆記一律為純 `.html`（不需 PHP）

### 頁面規格
- 一頁 ≤ **四個重點**
- 程式區先留白，使用者練完再補【執行結果】與【學習重點】
- 改講義前**通讀全文、合併刪冗**；改原段，禁止在下方堆「補充／更新」段

### 筆記正文語氣
- 只寫**知識與題目本身**（定義、規格、範例、連結）
- 禁止寫：對話口吻、帶讀導覽、協作說明、製作後設

### DOM 結構慣例
- `note-practice-sticky` 只包程式窗 + 執行結果；**學習重點在外**，仍在同張 `note-card`
- 延伸閱讀 `<aside>` 勿塞進 `note-card` 內層
- 少 `</div>` 會卡死下一張 card，改前確認結構

### 程式窗行號欄
行號欄（`.note-code-window-gutter`）多行行號請每行行首**緊貼數字**，勿前置縮排空格，否則左側會出現大片空白。

---

## 六、PHP 課程

### 課程索引 `courses/01-database/php/index.html`
新筆記卡片一律加在 `notes-grid` **最後**，不要插在最前面。

### 練習 vs 講義（死線，勿搞混）
使用者說「新增筆記／練習／作業」且題目要自己寫程式 → **預設＝練習單元**，不是講義靜態頁。

| 類型 | 主檔 | index 卡片連 |
|------|------|--------------|
| 練習單元 | `.php`（`h*.php`、`*-pra*.php`） | `.php` |
| 講義整理（概念示範已完成） | `.html` | `.html` |

**練習單元禁止代寫答案：**
- 只留【題目需求】＋ `// 【程式碼練習】` 骨架
- 【執行結果】只留佔位或空白，不得預先 echo 正確結果
- 新增後：`note-lesson-nav.js` 的 `CHAIN` 加一筆；不要加進 `PHP_LESSON_STATIC_HTML`

**講義靜態 `.html`：**
僅在使用者明確要轉 `.html` 時才做；建好後 `index`、導覽改連 `.html`，並在 `PHP_LESSON_STATIC_HTML` 登記 `id`。

---

## 七、SQL 課程

新增一講時：
1. 複製版型
2. `note-lesson-nav.js` 的 `CHAIN_SQL` 加一筆
3. 頁底設 `data-lesson-scope="sql"` + `data-lesson-id`
4. 列表頁加連結

---

## 八、CSS 補充樣式命名

課程補充樣式不放在課程資料夾內，統一放 `assets/css/`，命名規則：`course-note-{領域}.css`，領域名稱與課程子資料夾名稱一致。

例：
- `courses/03-layout/css/` → `assets/css/course-note-css.css`
- `courses/01-database/php/` → `assets/css/course-note-php.css`

程式窗共用樣式：`assets/css/course-note-code-window.css` + `assets/js/course-note-code-window.js`

---

## 九、換機 / 預覽

`git pull`（必要時 `--rebase`）→ 開 `.php` 預覽（不要只開排版用的 `.html`）→ 怪就 **Ctrl+Shift+R**

本機啟動：專案根目錄執行 `php -S localhost:8080`

---

## 十、其他專案

### conan-school（已搬出本 repo）
- 勿在 `courses/07-projects/practice/conan-school/` 維護任何內容
- 對外連結：<https://jekkinoopy.github.io/conan-school/>
- 規則在該 repo 內執行

### 獨立專案搬移
搬出時將 `docs/portable-collab-rules/` 整包複製到新專案根目錄（含規則檔與 CURSOR-HANDOFF 模板）。

---

## 十一、決策原則

- 有 repo 慣例就照做
- **使用者明確要求**的優先於助理自判「不必」
- 改規範時：先通讀現有內容，合併改原條，禁止往下堆疊
