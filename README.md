# バンドセッション会ウェブサイト

このプロジェクトは、バンドセッション会のウェブサイトです。HTML、CSS、PHPで構築されています。

## 📁 ファイル構成

```
/
├── index.html              # トップページ
├── style.css              # メインスタイルシート
├── pages.css              # サブページ用スタイルシート
├── script.js              # JavaScript
├── header.php             # 共通ヘッダー
├── footer.php             # 共通フッター
├── guide.php              # 初参加ガイド
├── schedule.php           # 開催スケジュール
├── join.php               # 参加方法・料金
└── README.md              # このファイル
```

## 🎨 デザインコンセプト

- **ビンテージロック風**: オレンジ〜イエローのグラデーションを使用したエネルギッシュなデザイン
- **フォント**: 
  - Bebas Neue（ディスプレイ用）
  - Righteous（アクセント用）
  - Noto Sans JP（本文用）
- **カラースキーム**:
  - Primary: #ff6b35（オレンジ）
  - Secondary: #f7931e（オレンジイエロー）
  - Accent: #ffd23f（イエロー）
  - Dark: #1a1a1a / #0d0d0d

## 🚀 セットアップ方法

### 必要な環境
- Webサーバー（Apache、Nginxなど）
- PHP 7.4以上
- MySQL（データベース連携する場合）

### 基本的なセットアップ

1. **ファイルの配置**
   ```bash
   # Webサーバーのドキュメントルートに全ファイルをコピー
   cp -r * /var/www/html/
   ```

2. **権限の設定**
   ```bash
   # ファイルの権限を適切に設定
   chmod 644 *.html *.css *.js *.php
   chmod 755 /var/www/html
   ```

3. **Webサーバーの起動**
   ```bash
   # Apacheの場合
   sudo systemctl start apache2
   
   # Nginxの場合
   sudo systemctl start nginx
   ```

4. **ブラウザでアクセス**
   ```
   http://localhost/index.html
   ```

## 📄 ページ一覧

### 実装済みページ
- ✅ TOP（index.html）
- ✅ 初参加ガイド（guide.php）
- ✅ 開催スケジュール（schedule.php）
- ✅ 参加方法・料金（join.php）

### 今後実装予定のページ
- ⬜ セッション会とは（about.php）
- ⬜ よくある質問（faq.php）
- ⬜ レポート一覧（report.php）
- ⬜ レポート詳細（report-detail.php）
- ⬜ お知らせ一覧（news.php）
- ⬜ お知らせ詳細（news-detail.php）
- ⬜ スケジュール詳細（schedule-detail.php）

## 🔧 カスタマイズ方法

### カラーの変更
`style.css`の`:root`セクションでカラー変数を変更できます：

```css
:root {
    --primary: #ff6b35;      /* メインカラー */
    --secondary: #f7931e;    /* サブカラー */
    --accent: #ffd23f;       /* アクセントカラー */
}
```

### フォントの変更
`header.php`と`index.html`のGoogle Fontsリンクを変更してください。

### データベース連携
`schedule.php`にサンプルのデータベース接続コードが含まれています。実際の環境に合わせて以下を変更：

```php
$conn = new mysqli("localhost", "username", "password", "database");
```

## 📱 レスポンシブ対応

- デスクトップ（1200px以上）
- タブレット（768px - 1199px）
- スマートフォン（767px以下）

## ✨ 主な機能

### JavaScript機能
- スムーススクロール
- レスポンシブメニュー
- スクロールアニメーション
- ヘッダー背景変化
- パララックス効果
- ボタンリップルエフェクト

### CSS機能
- グラデーション背景
- ホバーアニメーション
- フェードイン/スライドアップアニメーション
- ノイズテクスチャオーバーレイ
- カスタムタイムライン

## 🛠 今後の拡張案

1. **データベース連携**
   - イベント情報の動的管理
   - 参加者登録システム
   - レポート投稿機能

2. **会員機能**
   - ユーザー登録/ログイン
   - マイページ
   - 参加履歴

3. **予約システム**
   - オンライン決済
   - 自動メール送信
   - カレンダー連携

4. **SNS連携**
   - シェアボタン
   - インスタグラムフィード
   - ツイッタータイムライン

## 📞 サポート

質問や問題がある場合は、以下の方法でお問い合わせください：
- メール: info@sessionjam.example.com
- お問い合わせフォーム: （実装予定）

## 📝 ライセンス

このプロジェクトは自由に使用・改変できます。

---

**SESSION JAM** - 音楽仲間と繋がるセッション会
