# 🎨 WebDev Notes 色彩系統管理指南

## 📋 快速概述

所有顏色變數都集中管理在 **`colors-config.css`** 檔案中，只需修改這一個檔案就能改變整個網站的色系！

---

## 🎯 如何更改顏色

### 步驟 1：打開色彩配置檔
```
打開: d:\Developer\WebDev-Notes\colors-config.css
```

### 步驟 2：修改主色系
找到以下部分：
```css
:root {
    /* 主色系 - 深紫藍色 (可根據需要更改) */
    
    --primary: #6366f1;              /* 主色 - 紫藍色 */
    --primary-light: #818cf8;        /* 主色淺色 */
    --primary-dark: #4f46e5;         /* 主色深色 */
    
    /* ... 其他顏色 ... */
}
```

### 步驟 3：選擇你喜歡的配色方案
根據下面的預設方案選擇並複製對應的顏色值。

### 步驟 4：保存檔案
修改後保存，所有頁面會自動應用新色系！

---

## 🌈 預設色彩方案

### 1️⃣ 藍色系（清爽專業）
```css
--primary: #0ea5e9;              /* Cyan */
--primary-light: #06b6d4;
--primary-dark: #0284c7;
--secondary: #06b6d4;
```

### 2️⃣ 綠色系（自然生態）
```css
--primary: #10b981;              /* Green */
--primary-light: #34d399;
--primary-dark: #059669;
--secondary: #34d399;
```

### 3️⃣ 紫色系（優雅高級）
```css
--primary: #a855f7;              /* Purple */
--primary-light: #d8b4fe;
--primary-dark: #9333ea;
--secondary: #d8b4fe;
```

### 4️⃣ 紅色系（活力動感）
```css
--primary: #ef4444;              /* Red */
--primary-light: #f87171;
--primary-dark: #dc2626;
--secondary: #f87171;
```

### 5️⃣ 黃色系（溫暖陽光）
```css
--primary: #eab308;              /* Yellow */
--primary-light: #facc15;
--primary-dark: #ca8a04;
--secondary: #facc15;
```

### 6️⃣ 靛藍系（深邃沉穩）- 預設
```css
--primary: #6366f1;              /* Indigo */
--primary-light: #818cf8;
--primary-dark: #4f46e5;
--secondary: #ec4899;
```

### 7️⃣ 玫紅系（浪漫溫暖）
```css
--primary: #ec4899;              /* Pink */
--primary-light: #f472b6;
--primary-dark: #db2777;
--secondary: #f472b6;
```

### 8️⃣ 橙色系（活躍友好）
```css
--primary: #f97316;              /* Orange */
--primary-light: #fb923c;
--primary-dark: #ea580c;
--secondary: #fb923c;
```

---

## 📊 色彩變數清單

### 核心色彩
| 變數名稱 | 用途 | 舉例值 |
|---------|------|-------|
| `--primary` | 主色（按鈕、連結、標題） | `#6366f1` |
| `--primary-light` | 主色淺色（懸停效果） | `#818cf8` |
| `--primary-dark` | 主色深色（按下效果） | `#4f46e5` |
| `--secondary` | 輔助色（強調色） | `#ec4899` |
| `--success` | 成功狀態（綠色） | `#10b981` |
| `--warning` | 警告狀態（橙色） | `#f59e0b` |
| `--danger` | 危險狀態（紅色） | `#ef4444` |

### 灰度色
| 變數名稱 | 用途 | 亮度 |
|---------|------|------|
| `--gray-50` | 背景顏色 | 最亮 |
| `--gray-100` | 淡色背景 | ⬆️ |
| `--gray-200` | 邊框 | ⬆️ |
| `--gray-500` | 次要文字 | 中間 |
| `--gray-800` | 主要文字 | ⬇️ |
| `--gray-900` | 頁腳背景 | 最暗 |

### 文字顏色
```css
--text-primary: var(--gray-900);      /* 主文字 */
--text-secondary: var(--gray-600);    /* 次文字 */
--text-tertiary: var(--gray-500);     /* 第三級文字 */
--text-light: var(--gray-400);        /* 淡文字 */
--text-inverse: var(--white);         /* 反色文字 */
```

### 漸層組合
```css
--gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
--gradient-dark: linear-gradient(135deg, var(--gray-900) 0%, var(--gray-800) 100%);
--gradient-light: linear-gradient(135deg, var(--gray-50) 0%, var(--gray-100) 100%);
```

---

## 💡 使用示例

### 在 CSS 中使用
```css
.my-button {
    background-color: var(--primary);
    color: var(--text-inverse);
    border: 1px solid var(--border-primary);
}

.my-button:hover {
    background-color: var(--primary-dark);
}

.error-message {
    color: var(--danger);
    background-color: var(--white);
}
```

### 在 HTML 中使用（內聯樣式）
```html
<div style="background: var(--primary); color: var(--text-inverse);">
    內容
</div>
```

---

## 🔄 一鍵改色流程

1. **打開** `colors-config.css`
2. **找到** `:root {` 區塊
3. **修改** `--primary`, `--primary-light`, `--primary-dark`, `--secondary`
4. **保存** 檔案 (Ctrl+S)
5. **刷新** 網頁 (F5)
6. ✅ 完成！整個網站都會改色

---

## 🎨 配色建議

### 對比色方案（推薦）
- 主色：藍色 `#0ea5e9`
- 輔助色：橙色 `#f97316`
- 狀態色：綠色/紅色保持不變

### 類似色方案
- 主色：紫色 `#a855f7`
- 輔助色：粉紅 `#ec4899`
- 和諧統一的視覺

### 單色方案
- 主色及深淺版本組合
- 簡潔專業的氛圍

---

## ❓ 常見問題

**Q: 改色後沒有看到變化？**
A: 清除瀏覽器快取 (Ctrl+Shift+Delete) 或硬刷新 (Ctrl+Shift+R)

**Q: 能同時保留多個配色方案嗎？**
A: 可以創建多個 CSS 檔案 (colors-blue.css 等)，需要時切換導入

**Q: 如何恢復到原始色系？**
A: 使用 Git 回復檔案，或參照預設靛藍色方案重新輸入

**Q: 能否只改某個頁面的顏色？**
A: 可以在該頁面添加 `<style>` 標籤覆蓋全域變數

---

## 📝 版本歷史

- v1.0 (2024-04-22): 初版色彩系統建立

---

🎉 現在你可以輕鬆改變整個網站的色系了！
