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

### 既存ページ一覧（10ページ）
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

### 新規追加ページ（Astro移行時）
11. **blog** - ブログ一覧ページ（新規）
12. **blog/[slug]** - ブログ記事詳細ページ（新規）
13. **blog/category/[category]** - ブログカテゴリページ（新規）

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
- **フレームワーク**: Astro（静的サイトジェネレータ）
- **コンテンツ管理**: Content Collections（ブログ・ニュース記事用）
- **記事フォーマット**: Markdown
- **スタイル**: CSS（モダン化、アニメーションライブラリ削減）
- **JavaScript**: Vanilla JS（jQuery削減）
- **カルーセル**: Swiper等の軽量ライブラリ、またはネイティブ実装
- **フォント**: Google Fonts (Montserrat) - 継続
- **アナリティクス**: Google Analytics (GA4) - 継続

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

### フェーズ1: 初期セットアップ
1. Astroプロジェクトのセットアップ（astro/ディレクトリ）
2. 基本ディレクトリ構造構築（layouts, components, pages, content）
3. 基本設定（astro.config.mjs, package.json）

### フェーズ2: 共通部分の構築
4. ベースレイアウト作成（HTML構造、head、GA）
5. Header/Footerコンポーネント
6. CSS移行・モダン化（アニメーション削減）
7. JavaScript移行（jQuery削減、Vanilla JS化）

### フェーズ3: 静的ページ移行
8. トップページ（home）
9. 各種案内ページ（studio, price, rental, access, faq, horizon, reservation, policy）

### フェーズ4: ブログ機能構築（新規）
10. Content Collectionsセットアップ（ブログスキーマ定義）
11. ブログ一覧ページ（/blog/）
12. ブログ詳細ページ（/blog/[slug]）
13. カテゴリページ（/blog/category/[category]）
14. ページネーション実装
15. サンプル記事作成

### フェーズ5: ニュース機能移行（既存）
16. ニュース一覧ページ（/news/）
17. ニュース詳細ページ（/news/[slug]）
18. WordPressニュース記事のMarkdown変換（必要に応じて）

### フェーズ6: 最終調整
19. SEO設定（メタタグ、OGP、sitemap、RSS）
20. レスポンシブ確認
21. パフォーマンス最適化（Lighthouse）
22. 全ページ動作確認
23. **wordpress/ディレクトリの削除**（移行完了・動作確認後）

## 重要事項
**`wordpress/`ディレクトリについて**:
- 現在は既存コードの参照用として保持
- Astroサイトの動作確認が完了次第、削除予定
- 削除条件: 全ページの移行完了 + 本番環境での動作確認OK
