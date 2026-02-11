# SESSION JAM ウェブサイト

バンドセッション会「SESSION JAM」の公式ウェブサイト（React版）

## 技術スタック

- React 18
- React Router DOM
- Vite
- CSS3

## セットアップ

### 必要な環境

- Node.js 16以上
- npm または yarn

### インストール

```bash
npm install
```

### 開発サーバーの起動

```bash
npm run dev
```

ブラウザで `http://localhost:3000` を開きます。

### ビルド

```bash
npm run build
```

### プレビュー

```bash
npm run preview
```

## プロジェクト構造

```
src/
├── components/      # 再利用可能なコンポーネント
│   ├── Header.jsx
│   ├── Footer.jsx
│   ├── Hero.jsx
│   ├── AboutSection.jsx
│   ├── SchedulePreview.jsx
│   ├── FlowSection.jsx
│   ├── ReportSection.jsx
│   ├── NewsSection.jsx
│   └── CTASection.jsx
├── pages/          # ページコンポーネント
│   └── Home.jsx
├── styles/         # スタイルシート
│   └── index.css
├── App.jsx         # メインアプリケーション
└── main.jsx        # エントリーポイント
```

## 機能

- レスポンシブデザイン
- スムーススクロール
- スクロールアニメーション
- モバイルメニュー
- React Routerによるルーティング

## ライセンス

© 2026 SESSION JAM. All rights reserved.

