<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫系統操作練習：每日花費流水帳 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/note-code-window.css">
</head>

<body>
    <!--
      程式碼區僅留白提示 — 題目來自課堂；練習完成後可再請助手補「程式碼 / 執行結果 / 學習重點」。
      對應靜態版可另存為 01-expense-ledger.html（與 php 資料夾慣例相同）。
    -->
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>
    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">SQL · 資料庫操作</span>
            <h2 class="note-title">資料庫系統操作練習：每日花費流水帳</h2>
            <p class="hero-desc">從需求與欄位設計到 DDL／DML；一頁四個重點，程式區留作課堂練習。</p>
            <div class="hero-divider"></div>
        </div>
    </section>
    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">重點一：需求、欄位與資料型態</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>設計一個可記錄<strong>每日花費流水帳</strong>的資料庫與（至少）一張資料表。</li>
                    <li>先確認需要哪些<strong>功能</strong>，再思考需要哪些<strong>欄位</strong>。</li>
                    <li>思考每個欄位應使用的<strong>資料型態</strong>（與是否允許空值、預設值等）。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
-- （此區留白 — 課堂自行練習；完成後再整理正式 SQL／筆記）
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <p>（練習完成後：可貼設計說明、欄位清單或工具畫面／備註。）</p>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>（待整理：與「功能 → 欄位 → 型態」對應的筆記要點。）</li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">重點二：資料表上會發生的操作</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>依功能需求，思考在這張（或這幾張）資料表上會發生<strong>哪些操作</strong>。</li>
                    <li>對應練習：<strong>查詢／新增／修改／刪除</strong>（以及是否還需要查詢、匯總等）。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
-- （此區留白 — 課堂自行練習；完成後再整理正式 SQL／筆記）
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <p>（練習完成後：可整理「操作清單 ↔ SQL 語句類型」對照或範例結果。）</p>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>（待整理：與 CRUD／查詢情境對應的筆記要點。）</li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">重點三：建立資料庫與資料表（DDL）</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>依前面設計，以 SQL（或指定工具）完成<strong>資料庫與資料表</strong>的建立。</li>
                    <li>主鍵、欄位型態、限制條件與前兩段設計一致。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
-- （此區留白 — 課堂自行練習；完成後再整理正式 SQL／筆記）
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <p>（練習完成後：可貼 CREATE 成功訊息、DESC／SHOW 結果或截圖說明。）</p>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>（待整理：DDL 與鍵值、限制條件相關要點。）</li>
                </ul>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">重點四：測試資料與 CRUD 練習</h3>
            <div class="ques-section">
                <strong class="is-bracket-heading">【題目需求】</strong>
                <ul class="custom-list">
                    <li>建立<strong>至少十筆</strong>測試資料。</li>
                    <li>實際練習各項操作：<strong>查詢／新增／修改／刪除</strong>。</li>
                </ul>
            </div>

            <?php
$code = <<<'EOD'
-- （此區留白 — 課堂自行練習；完成後再整理正式 SQL／筆記）
EOD;
$codeLineCount = substr_count($code, "\n") + 1;
$codeGutter = implode("\n", range(1, $codeLineCount));
?>
            <div class="note-practice-sticky">
            <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) $codeLineCount; ?>">
                <div class="note-code-window-toolbar">
                    <div class="note-code-window-dots" aria-hidden="true">
                        <span class="note-code-window-dot note-code-window-dot--red"></span>
                        <span class="note-code-window-dot note-code-window-dot--yellow"></span>
                        <span class="note-code-window-dot note-code-window-dot--green"></span>
                    </div>
                    <button type="button" class="note-code-window-copy" aria-label="複製程式碼" title="複製">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                    </button>
                </div>
                <div class="note-code-window-body">
                    <div class="note-code-window-gutter"><?php echo htmlspecialchars($codeGutter, ENT_QUOTES, 'UTF-8'); ?></div>
                    <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                </div>
            </div>

            <div class="code-section">
                <span class="section-label is-bracket-heading">【執行結果】</span>
                <p>（練習完成後：可貼 SELECT 結果集、UPDATE／DELETE 影響列數或重點截圖。）</p>
            </div>
            </div>

            <div class="learning-point-box">
                <p class="learning-point-title is-bracket-heading">【學習重點】</p>
                <ul class="custom-list">
                    <li>（待整理：DML、WHERE、安全刪改與驗證方式等要點。）</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-sql.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
</body>

</html>
