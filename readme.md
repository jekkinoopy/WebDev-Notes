# 🎨 色彩配置說明 (README.md)

### 📄 新增文件
* **colors-config.css** - 統一的色彩配置檔
    * 所有顏色變數集中定義
    * 包含 8 種預設配色方案
    * 詳細的說明註釋
* **COLOR-GUIDE.md** - 完整使用指南
    * 如何改色的步驟
    * 8 種預設配色方案
    * 常見問題解答
* **colors-preview.html** - 色彩預覽頁面
    * 直觀查看所有顏色
    * 即時預覽效果

### 🎨 色彩變數系統
* **核心色系**：`--primary`, `--primary-light`, `--primary-dark`, `--secondary`
* **狀態色**：`--success`, `--warning`, `--danger`
* **灰度色**：`--gray-50` ~ `--gray-900`
* **文字色**：`--text-primary`, `--text-secondary` 等
* **漸層色**：`--gradient-primary`, `--gradient-dark` 等

---

## 🚀 如何使用

### 改色 3 步驟
1. 打開 `colors-config.css`
2. 修改 `:root` 中的 `--primary`, `--primary-light`, `--primary-dark`, `--secondary`
3. 保存 → 刷新網頁 ✅

### 快速配色方案

**/* 藍色系 */**
```css
--primary: #0ea5e9;
--primary-light: #06b6d4;
--primary-dark: #0284c7;
```
**/* 綠色系 */**
```css
--primary: #10b981;
--primary-light: #34d399;
--primary-dark: #059669;
```
**/* 紫色系 */**
```css
--primary: #a855f7;
--primary-light: #d8b4fe;
--primary-dark: #9333ea;
```

## 📖 參考資源
1. 📄 詳細指南：COLOR-GUIDE.md

2. 🎨 預覽頁面：colors-preview.html (打開看實際效果)

3. ⚙️ 配置檔：colors-config.css