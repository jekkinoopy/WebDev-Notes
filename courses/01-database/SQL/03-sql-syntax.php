<?php
/** 教材重點摘錄自 Mack Liu《[資料庫] Lesson 3 SQL 語法》 */
$mackLesson = 'https://mackliu.github.io/php-book/2021/09/20/db-lesson-03/';
/** 執行結果圖：本課專用，檔案放在與本頁同層的 images／（勿用外站圖當 src） */
$sqlResultImg = 'images/db-lesson-03-result.svg';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 SQL 語法重點 - 努比的全端筆記</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/course-note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-one-dark.min.css">
    <link rel="stylesheet" href="../../../assets/css/note-code-window.css">
</head>

<body>
    <header class="header">
        <nav class="navbar"></nav>
        <script src="../../../assets/js/nav-loader.js"></script>
    </header>

    <section class="page-hero">
        <div class="hero-container">
            <span class="category-tag">SQL 基礎</span>
            <h2 class="note-title">Lesson 3：SQL 語法（重點整理）</h2>
            <p class="hero-desc">依原文分成三大段：基本語法（CRUD）、條件句、限制句；符號與 MySQL／MariaDB 習慣一併對照。</p>
            <div class="hero-divider"></div>
        </div>
    </section>

    <div class="note-container">
        <div class="note-card">
            <h3 class="note-subtitle">SQL 基本語法操作</h3>

            <div class="ques-section">
                <p>SQL 是針對資料庫設計的語言；各系統會在標準之上擴充，本課以 <strong>MySQL／MariaDB</strong> 為主。撰寫時注意：<strong>反引號 `</strong> 包住資料表與欄位名；<strong>單引號 '</strong> 包住字串與值；<strong>分號 ;</strong> 表示一句結束，多句需分開寫。</p>
            </div>

            <?php
$codeInsert = <<<'EOD'
INSERT INTO `table`(`col1`,`col2`,`col3`,`col4`,`col5`)
VALUES('value1','value2','value3','value4','value5');
EOD;
$g1 = implode("\n", range(1, substr_count($codeInsert, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">INSERT 新增／插入</h3>
                <p>向資料表新增一列（或多列）資料；欄位與值須對應，字串用單引號。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeInsert, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($g1, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeInsert, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeSelect = <<<'EOD'
SELECT `col1`, `col2`
FROM `table1`, `table2`
WHERE `table1`.`id` = `table2`.`ref_id`;
EOD;
$g2 = implode("\n", range(1, substr_count($codeSelect, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">SELECT 查詢</h3>
                <p>從一張或多張表取出欄位；可用 <code>AS</code> 為結果欄位取別名（例如 <code>`score` AS '成績'</code>）。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeSelect, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($g2, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeSelect, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeUpdate = <<<'EOD'
UPDATE `table`
SET `col1` = 'value1', `col2` = 'value2'
WHERE `id` = '23';
EOD;
$g3 = implode("\n", range(1, substr_count($codeUpdate, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">UPDATE 更新</h3>
                <p>依條件修改既有列；務必寫 <code>WHERE</code>，避免整表被改寫。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeUpdate, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($g3, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeUpdate, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeDelete = <<<'EOD'
DELETE FROM `table`
WHERE `id` = '23';
EOD;
$g4 = implode("\n", range(1, substr_count($codeDelete, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">DELETE 刪除</h3>
                <p>依條件刪除列；同樣務必搭配 <code>WHERE</code>。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeDelete, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($g4, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeDelete, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">SQL 條件句操作</h3>

            <?php
$codeWhere = <<<'EOD'
SELECT * FROM `table` WHERE `id` = '23';

SELECT * FROM `table` WHERE `id` = '23' AND `name` = 'mack';
EOD;
$gw = implode("\n", range(1, substr_count($codeWhere, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">WHERE 條件</h3>
                <p>篩選符合條件的列；可用 <code>AND</code>、<code>OR</code> 組合多條件。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeWhere, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($gw, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeWhere, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeIn = <<<'EOD'
SELECT * FROM `table` WHERE `id` IN ('23', '36', '42', '78', '98');
EOD;
$gi = implode("\n", range(1, substr_count($codeIn, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">IN 特殊指定</h3>
                <p>欄位值落在所列清單之一即符合。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeIn, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($gi, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeIn, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeBetween = <<<'EOD'
SELECT * FROM `table` WHERE `id` BETWEEN '23' AND '98';

-- 等同於
SELECT * FROM `table` WHERE `id` >= '23' AND `id` <= '98';
EOD;
$gb = implode("\n", range(1, substr_count($codeBetween, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">BETWEEN 兩者之間</h3>
                <p>範圍寫法須<strong>小值在前、大值在後</strong>。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeBetween, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($gb, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeBetween, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeLike = <<<'EOD'
SELECT * FROM `table` WHERE `name` LIKE '陳%';

SELECT * FROM `table` WHERE `name` LIKE '%中%';

SELECT * FROM `table` WHERE `name` LIKE '%明';

SELECT * FROM `table` WHERE `name` LIKE '陳%明';
EOD;
$gl = implode("\n", range(1, substr_count($codeLike, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">LIKE 模糊查詢</h3>
                <p>以 <code>%</code> 表示任意長度字元；可組合出「開頭、包含、結尾、前後固定」等樣式。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeLike, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($gl, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeLike, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>
        </div>

        <div class="note-card">
            <h3 class="note-subtitle">SQL 限制句操作</h3>

            <?php
$codeOrder = <<<'EOD'
SELECT * FROM `table` ORDER BY `birthday` ASC;

SELECT * FROM `table` ORDER BY `birthday` DESC;

SELECT * FROM `table` ORDER BY `birthday` DESC, `area` ASC;
EOD;
$go = implode("\n", range(1, substr_count($codeOrder, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">ORDER BY 排序</h3>
                <p><code>ASC</code> 遞增（可省略）；<code>DESC</code> 遞減。多欄時先依第一欄排，同值再依後續欄位。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeOrder, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($go, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeOrder, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeGroup = <<<'EOD'
SELECT * FROM `table` GROUP BY `area`;

SELECT * FROM `table` GROUP BY `area`, `division`;
EOD;
$gg = implode("\n", range(1, substr_count($codeGroup, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">GROUP BY 群組</h3>
                <p>依欄位分群；多欄時為第一層分群後再在群內做第二層分群（原文以縣市、地區為例）。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeGroup, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($gg, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeGroup, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>

            <?php
$codeLimit = <<<'EOD'
SELECT * FROM `table` LIMIT 20;

SELECT * FROM `table` LIMIT 10, 20;
EOD;
$glm = implode("\n", range(1, substr_count($codeLimit, "\n") + 1));
?>
            <div class="ques-section">
                <h3 class="note-section-lead">LIMIT 限制筆數</h3>
                <p><code>LIMIT n</code> 取前 n 筆；<code>LIMIT offset, count</code> 從第 <code>offset</code> 筆之後（以 0 起算）取 <code>count</code> 筆。</p>
            </div>
            <div class="note-practice-sticky">
                <div class="note-code-window" data-note-code-window data-code-line-count="<?php echo (int) (substr_count($codeLimit, "\n") + 1); ?>">
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
                        <div class="note-code-window-gutter"><?php echo htmlspecialchars($glm, ENT_QUOTES, 'UTF-8'); ?></div>
                        <pre class="language-sql"><code class="language-sql"><?php echo htmlspecialchars($codeLimit, ENT_QUOTES, 'UTF-8'); ?></code></pre>
                    </div>
                </div>
                <div class="code-section">
                    <span class="section-label is-bracket-heading">【執行結果】</span>
                    <p><img src="<?php echo htmlspecialchars($sqlResultImg, ENT_QUOTES, 'UTF-8'); ?>" alt="執行結果示意" width="480" height="100" loading="lazy" decoding="async"></p>
                </div>
            </div>
        </div>

        <aside class="note-reference-box" aria-label="延伸閱讀">
            <h4 class="note-reference-title is-bracket-heading">【延伸閱讀】</h4>
            <ul class="note-reference-list">
                <li>
                    <a href="<?php echo htmlspecialchars($mackLesson, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">[資料庫] Lesson 3 SQL 語法（原文）</a>
                </li>
            </ul>
        </aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-sql.min.js"></script>
    <script src="../../../assets/js/note-code-window.js"></script>
    <div class="note-container note-lesson-nav-wrap">
        <div id="note-lesson-nav-root" data-lesson-scope="sql" data-lesson-id="03-sql-syntax"></div>
    </div>
    <script src="../../../assets/js/note-lesson-nav.js"></script>
</body>

</html>
