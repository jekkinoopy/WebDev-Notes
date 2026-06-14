# Developer Rules — WebDev-Notes

## Git Commit 規範

只要本次對話中**有任何改檔、寫 Code、生成程式碼、調整結構的任務完成**，在回覆結尾**必須主動**附上 commit 指令，不可等使用者開口。

> 純聊天、觀念問答、本次完全沒改任何檔 → 不必附。

### 格式

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
- 範例：`fix: index 改連 html`

### 勿擅自執行

除非使用者明確要求，否則只提供指令文字，不代為執行 `git commit`。

---

## 時區與口語時間

- 以**使用者所在地（台灣 UTC+8）**理解「昨天、今天、剛剛」。
- **不可**只憑 `git log` 的 commit 日期就認定「昨天」並 `reset`。
- 使用者說「還原到昨天／弄壞前」時：先 `git log` / `reflog` 列出候選 commit，**確認 SHA** 再動手；未 push 時以**本地 HEAD／reflog** 為準。

---

## Git 還原

- 禁止未確認就 `git reset --hard`。
- 還原後若本地落後遠端，**提醒勿盲目 `git pull`**（會拉回不要的提交）。
- 若要改遠端，須使用者同意後再 `push --force`。

---

## PHP 課程索引 `courses/01-database/php/index.html`

新筆記卡片一律加在 `notes-grid` **最後**（既有單元之後），不要插在最前面。

---

## PHP 單元：練習 vs 講義（死線，勿搞混）

使用者說「新增筆記／練習／作業」且題目要自己寫程式時，**預設＝練習單元**，不是講義靜態頁。

| 類型 | 主檔 | 對照範本 | `index` 卡片連 |
|------|------|----------|----------------|
| **練習單元** | **`.php`**（`h*.php`、`*-pra*.php`） | `h04-bmi.php`、`h01-string.php` | **`.php`** |
| 講義整理（概念＋示範已完成） | `.html` 或已示範的 `.php` | `01-basic.html`、`03-forloop.html` | 已確認 `.html` 者連 `.html` |

### 練習單元：禁止代寫答案

- 只留【題目需求】＋ `// 【程式碼練習】` 骨架（空函式、`// 在此實作`、依題目拆的註解步驟）。
- 【執行結果】區只留 `<?php // 完成後在此 ?>` 或空白；**不得**預先 echo 出正確結果。
- **不得**貼可一鍵跑通的完整解法。
- **不得**因「方便預覽」建一份含答案的 `.html`；練習只有 `.php` 一份即可。
- 選做／延伸只寫在【題目需求】一句，不要順手寫好函式。
- 新增後：`note-lesson-nav.js` 的 `CHAIN` 加一筆；**不要**加進 `PHP_LESSON_STATIC_HTML`（除非使用者明確要轉講義 `.html`）。

### 講義靜態 `.html`

僅在使用者明確要轉 `.html`，或該單元本來就是講義示範時才做。依 `01-basic.html` 做法轉出；`index`、導覽改連 `.html`；並在 `PHP_LESSON_STATIC_HTML` 登記 `id`。**不得**把「新增練習」預設成先建 `.html` 講義。

---

## 筆記內容（`courses/**` 講義與練習）

- 【學習重點】**不要**加「下一步：請進入 xxx」；頁底 `note-lesson-nav` 已負責上下則。
- 需求區塊沿用 repo 慣例：**【題目需求】**（`ques-section`），勿自創【學習段落】除非使用者指定。
- 程式區先留白，練完再補執行結果／學習重點（助理新建練習時也要遵守）。
- 改講義／練習前**通讀該頁全文、合併刪冗**；改原段，禁止在下方堆「補充／更新」段。

---

## 改協作規範（`.cursor/rules`、`CURSOR-HANDOFF`）

使用者說「改規範／寫進規則／更新慣例」時：

- **範圍**：只動規範相關檔；未點名不得改 `courses/**`。
- **動筆前**：通讀目標檔全文，確認是否已有同主題條文。
- **已有** → 改原條、合併、刪重；禁止在檔尾再貼同義新文。
- **HANDOFF 課中** 與 **本檔** 分工：細則寫在規則檔；HANDOFF 用一句「見 `repo-workflow.mdc` §…」，勿兩邊各寫長文。

---

## conan-school（已搬出本 repo）

- **勿**在 `courses/07-projects/practice/conan-school/` 新增或修改任何檔案（本目錄僅留轉址與 README）。
- 對外連結：<https://jekkinoopy.github.io/conan-school/>
- 原始碼：[jekkinoopy/conan-school](https://github.com/jekkinoopy/conan-school)；辦案筆記三處同步等規則在該 repo 內執行。

---

## 獨立專案搬移

專案搬出本 repo 時，將 `docs/portable-collab-rules/` 整包複製到新專案根目錄（含 `.cursor/rules`、`CURSOR-HANDOFF.project.md` → 更名 `CURSOR-HANDOFF.md` 並改專案名）。

---

## 決策原則

- 有 repo 慣例就照做。
- **使用者明確要求**的優先於助理自判「不必」。
