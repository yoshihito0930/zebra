# Studio Zebra 公式サイト Astro移行プロジェクト

## プロジェクト概要
スタジオゼブラ公式サイトをWordPressからAstroに移行するプロジェクト。

**対象サイト**: 新宿・代々木エリアの白ホリゾント撮影スタジオ：スタジオゼブラ
**目的**: WordPressサイトをAstroで再構築し、パフォーマンスとメンテナンス性を向上

## ディレクトリ構成

```
studio-website/
├── wordpress/               # 既存WordPressコード（参照用）
│   ├── *.php               # テンプレートファイル
│   ├── header.php          # 共通ヘッダー
│   ├── footer.php          # 共通フッター
│   ├── frontend/
│   │   └── shared/
│   │       ├── css/        # スタイルシート（4ファイル）
│   │       └── js/         # JavaScript（7ファイル）
│   └── css/                # エディタ用CSS
├── astro/                   # Astroプロジェクト（予定）
└── README.md
```

## サイト構成

### ページ一覧（10ページ）
1. **home** (`tpl-home.php`) - トップページ
2. **studio** (`tpl-studio.php`) - スタジオ案内
3. **price** (`tpl-price.php`) - 料金案内
4. **rental** (`tpl-rental.php`) - レンタル機材
5. **access** (`tpl-access.php`) - アクセス
6. **faq** (`tpl-faq.php`) - よくある質問
7. **horizon** (`tpl-horizon.php`) - ホリゾントルール
8. **reservation** (`tpl-reservation.php`) - ご予約・お問い合わせ
9. **policy** (`tpl-policy.php`) - 利用規約
10. **archive** (`archive.php`) - ニュース一覧

### ナビゲーション構造
- メインナビ: スタジオ案内、料金案内、レンタル機材、アクセス、よくある質問、ホリゾントルール、ご予約・お問い合わせ
- サブナビ: NEWS、Twitter
- ハンバーガーメニュー対応（SP）

### 共通コンポーネント
- **Header** (`header.php`)
  - ロゴ（PC/SP切り替え）
  - グローバルナビゲーション
  - ハンバーガーメニュー
  - Google Analytics設定

- **Footer** (`footer.php`)
  - 予約バナー（条件付き表示）
  - フッターナビゲーション
  - 店舗情報（住所、電話番号）
  - Twitterタイムライン
  - 固定予約ボタン（右下）
  - ページトップボタン

## 技術スタック

### 既存（WordPress）
- **バックエンド**: PHP, WordPress
- **フロントエンド**: HTML, CSS, JavaScript
- **ライブラリ**:
  - jQuery
  - Slick Carousel（スライダー）
  - Remodal（モーダル）
  - WOW.js（スクロールアニメーション想定）
- **フォント**: Google Fonts (Montserrat)
- **アナリティクス**: Google Analytics (GA4 + UA)

### CSSファイル（4ファイル）
- `common.css` - 共通スタイル
- `slick.min.css` - Slickカルーセル用
- `shared.css` - 共有コンポーネント
- `index.css` - ページ固有スタイル

### JavaScriptファイル（7ファイル）
- `jquery.min.js` - jQuery本体
- `jquery.slick.min.js` - Slickカルーセル
- `remodal.js` - モーダル機能
- `base.js` - 基本機能
- `autoload.js` - オートロード
- `common.js` - 共通処理
- `shared.js` - 共有機能

### 移行先（Astro）
- 未定（これから構築）

## WordPress依存機能

### カスタムフィールド（ACF想定）
- **トップページ** (`tpl-home.php`)
  - `slides` - メインビジュアルスライダー（画像PC/SP別）
  - `box` - キービジュアルボックス（テキスト、ボタン、タイトル）
  - `choose` / `image` / `image1` - キャンペーンバナー表示制御

### WordPress関数使用箇所
- `home_url()` - サイトURL
- `get_template_directory_uri()` - テーマディレクトリパス
- `language_attributes()` - 言語属性
- `bloginfo()` - サイト情報
- `is_page()` / `is_front_page()` - 条件分岐
- `have_rows()` / `the_row()` / `get_sub_field()` - ACF繰り返しフィールド

## 移行時の注意点

### 1. パス変換
- `get_template_directory_uri()` → Astroのアセットパス
- 画像パス: `/frontend/shared/img/` → Astroの`public/`または`src/assets/`

### 2. 動的コンテンツの対応
- カスタムフィールドデータ → JSON/Markdown/CMSへ移行
- 予約カレンダー → 外部サービスまたはAPI実装検討
- ニュース投稿 → MarkdownまたはHeadless CMS

### 3. インタラクション
- jQueryベースのコード → Vanilla JSまたはAstroコンポーネント化
- Slickカルーセル → Swiper等のモダンライブラリへ置き換え検討
- スクロールアニメーション → **廃止**（パフォーマンス優先）

### 4. アニメーション方針（重要）
既存サイトではWOW.js等を使用したスクロールアニメーションが146箇所に実装されていますが、**Astro移行時は削減します**。

**方針**:
- 複雑なアニメーションライブラリは使用しない
- CSS `transition` / `opacity` / `transform` のみで最小限の演出
- スクロールトリガーアニメーションは原則なし
- ホバーエフェクト等の基本的なインタラクションのみ実装
- **パフォーマンスとアクセシビリティを最優先**

**削減対象**:
- `wow fadeInUp` / `fadeInLeft` / `fadeInRight` 等のスクロールアニメーション（全146箇所）
- WOW.js ライブラリ
- 不要なアニメーション用CSS

### 5. SEO・アナリティクス
- Google Analytics (GA4: G-9958VF71PZ, UA: UA-178601734-1)
- メタタグ設定の移行
- OGP設定（未確認）

### 6. 外部連携
- Twitterタイムライン埋め込み
- スタジオ検索ドットコムバナーリンク

## 次のステップ
1. Astroプロジェクトのセットアップ
2. 静的コンテンツの抽出・整理
3. コンポーネント設計
4. ページ移行（優先順位: home → studio → price...）
5. 動的機能の実装検討
