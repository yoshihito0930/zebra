# Studio Zebra Astro移行 タスクリスト

## フェーズ1: 初期セットアップ

- [x] 1. **Astroプロジェクトのセットアップ**
  - `npm create astro@latest` で astro/ ディレクトリにセットアップ ✓
  - テンプレート: Minimal ✓
  - TypeScript: Strict ✓

- [x] 2. **基本ディレクトリ構造構築**
  ```
  astro/
  ├── src/
  │   ├── layouts/      # レイアウトコンポーネント ✓
  │   ├── components/   # 再利用可能なコンポーネント ✓
  │   ├── pages/        # ページファイル（ルーティング） ✓
  │   ├── content/      # Content Collections（ブログ・ニュース） ✓
  │   ├── styles/       # グローバルCSS ✓
  │   └── scripts/      # JavaScript ✓
  └── public/           # 静的アセット（画像等） ✓
  ```

- [x] 3. **基本設定**
  - `astro.config.mjs` の確認・調整 ✓
  - `package.json` の確認 ✓
  - 必要な依存関係のインストール ✓
  - 開発サーバー起動確認 (`npm run dev`) ✓

---

## フェーズ2: 共通部分の構築

- [x] 4. **ベースレイアウト作成**
  - `src/layouts/BaseLayout.astro` ✓
  - HTML基本構造（DOCTYPE, html, head, body） ✓
  - メタタグ設定（charset, viewport, description等） ✓
  - Google Analytics統合（GA4: G-9958VF71PZ） ✓
  - Google Fonts (Montserrat) 読み込み ✓
  - Header/Footer統合 ✓

- [x] 5. **Headerコンポーネント**
  - `src/components/Header.astro` ✓
  - ロゴ（PC/SP切り替え） ✓
  - グローバルナビゲーション（9項目） ✓
  - ハンバーガーメニュー（SP） ✓
  - アクティブページのハイライト ✓

- [x] 6. **Footerコンポーネント**
  - `src/components/Footer.astro` ✓
  - フッターナビゲーション（PC/SP） ✓
  - 店舗情報（住所、電話番号） ✓
  - 予約バナー（条件付き表示） ✓
  - Twitterタイムライン埋め込み ✓
  - 固定予約ボタン（右下） ✓
  - ページトップボタン ✓
  - コピーライト ✓
  - スムーススクロール機能 ✓

---

## フェーズ3: スタイル・JavaScript移行

- [x] 7. **CSS移行・モダン化**
  - `wordpress/frontend/shared/css/` の3ファイルを `src/styles/` へコピー ✓
  - 不要なアニメーションCSS削除（fadeIn系 135行削除） ✓
  - shared.css: 1691行 → 1556行 ✓
  - common.css: wowクラス削除 ✓
  - slick.min.cssは不使用（Swiperへ移行）✓

- [x] 8. **必要なJS機能の洗い出し**
  - jquery.min.js - 削除（Vanilla JS化） ✓
  - jquery.slick.min.js - Swiperへ置き換え ✓
  - remodal.js - モーダル機能（CSS残存、必要時に実装） ✓
  - base.js, autoload.js - 調査済み ✓
  - common.js - デバッガー機能（不要、削除） ✓
  - shared.js - Slickスライダー設定（Swiperへ移行） ✓

- [x] 9. **Vanilla JS化**
  - jQuery依存の完全排除 ✓
  - ハンバーガーメニュートグル（Header.astro） ✓
  - スムーススクロール（Footer.astro） ✓
  - ページトップボタン（Footer.astro） ✓
  - 必要最小限の機能のみ実装 ✓

- [x] 10. **Slickカルーセル代替**
  - Swiper.js v12.0.2 インストール ✓
  - トップページスライダー用に準備完了 ✓

---

## フェーズ4: 静的ページ移行（全10ページ）

- [x] 11. **トップページ**
  - `src/pages/index.astro` ✓（基本構造）
  - 簡易版作成済み（スライダーは今後実装）

- [x] 12. **スタジオ案内**
  - `src/pages/studio.astro` ✓
  - キービジュアル、説明セクション、マップ（簡略版）

- [x] 13. **料金案内**
  - `src/pages/price.astro` ✓
  - 料金プラン、注意事項

- [x] 14. **レンタル機材**
  - `src/pages/rental.astro` ✓
  - 基本構造実装

- [x] 15. **アクセス**
  - `src/pages/access.astro` ✓
  - 住所、アクセス情報

- [x] 16. **よくある質問**
  - `src/pages/faq.astro` ✓
  - 基本構造実装

- [x] 17. **ホリゾントルール**
  - `src/pages/horizon.astro` ✓
  - 基本構造実装

- [x] 18. **ご予約・お問い合わせ**
  - `src/pages/reservation.astro` ✓
  - 予約カレンダーリンク、電話番号

- [x] 19. **利用規約**
  - `src/pages/policy.astro` ✓
  - 基本構造実装

---

## フェーズ5: ブログ機能構築（新規）

- [x] 20. **Content Collectionsセットアップ**
  - `src/content/config.ts` でブログスキーマ定義 ✓
  - フィールド: title, description, pubDate, category, image等 ✓
  - `src/content/blog/` ディレクトリ作成 ✓

- [x] 21. **ブログ一覧ページ**
  - `src/pages/blog/[...page].astro` ✓
  - 記事一覧表示 ✓
  - カテゴリフィルタ ✓
  - ページネーション実装（1ページ6記事） ✓

- [x] 22. **ブログ詳細ページ**
  - `src/pages/blog/[slug].astro` ✓
  - 動的ルーティング ✓
  - Markdownレンダリング ✓
  - 記事メタ情報表示（カテゴリ、日付、タグ） ✓

- [x] 23. **カテゴリページ**
  - `src/pages/blog/category/[category]/[...page].astro` ✓
  - カテゴリ別記事一覧 ✓
  - ページネーション対応 ✓

- [x] 24. **ブログコンポーネント**
  - `src/components/BlogCard.astro` - 記事カード ✓
  - `src/components/Pagination.astro` - ページネーション ✓
  - `src/components/CategoryList.astro` - カテゴリ一覧 ✓

- [x] 25. **サンプル記事作成**
  - `src/content/blog/` にMarkdownでサンプル投稿5記事 ✓
  - 異なるカテゴリで作成（お知らせ、撮影テクニック、機材情報、キャンペーン、活用事例） ✓

---

## フェーズ6: ニュース機能移行（既存）

- [x] 26. **ニュース一覧ページ**
  - `src/pages/news/[...page].astro` ✓
  - 既存archive.phpの移行 ✓
  - カテゴリフィルタ ✓
  - ページネーション（1ページ6記事） ✓

- [x] 27. **ニュース詳細ページ**
  - `src/pages/news/[slug].astro` ✓
  - 動的ルーティング ✓
  - サムネイル画像表示 ✓

- [x] 28. **ニュースContent Collections設定**
  - `src/content/config.ts` にニューススキーマ追加 ✓
  - `src/content/news/` ディレクトリ作成 ✓

- [x] 29. **ニュースカテゴリページ**
  - `src/pages/news/category/[category]/[...page].astro` ✓
  - カテゴリ別記事一覧 ✓
  - ページネーション対応 ✓

- [x] 30. **ニュースコンポーネント**
  - `src/components/NewsCard.astro` ✓
  - `src/components/NewsCategoryList.astro` ✓

- [x] 31. **サンプルニュース記事作成**
  - サンプル記事4件作成 ✓
  - カテゴリ: お知らせ、機材、営業情報、メンテナンス ✓

---

## フェーズ7: 最終調整・検証

- [ ] 30. **SEO設定**
  - メタタグ最適化
  - OGP設定（Open Graph Protocol）
  - sitemap.xml生成
  - RSS feed生成（ブログ・ニュース用）
  - robots.txt

- [ ] 31. **レスポンシブ確認**
  - PC表示確認
  - タブレット表示確認
  - スマートフォン表示確認
  - ブレークポイントの調整

- [ ] 32. **パフォーマンス最適化**
  - Lighthouse監査実行
  - 画像最適化（WebP変換、遅延読み込み）
  - CSSの最適化
  - JavaScriptバンドルサイズ確認
  - Core Web Vitals確認

- [ ] 33. **アクセシビリティ確認**
  - キーボードナビゲーション
  - スクリーンリーダー対応
  - 色のコントラスト確認
  - ARIA属性

- [ ] 34. **クロスブラウザ確認**
  - Chrome
  - Firefox
  - Safari
  - Edge

- [ ] 35. **全ページ動作確認**
  - 全リンクの動作確認
  - フォーム動作確認（予約ページ等）
  - 外部連携確認（Twitter、GA等）

- [ ] 36. **本番環境デプロイ準備**
  - ビルドエラー確認
  - 環境変数設定
  - デプロイ先選定（Netlify, Vercel, Cloudflare Pages等）

- [ ] 37. **WordPress削除**
  - Astroサイトの完全動作確認完了後
  - `wordpress/` ディレクトリ削除
  - README.md更新

---

## 進捗管理

- **開始日**: 2025-10-05
- **目標完了日**: 未定
- **現在のフェーズ**: フェーズ6完了 → フェーズ7（最終調整・検証）
- **完了タスク数**: 31 / 37 (84%)

---

## 注意事項

- アニメーションは最小限に（パフォーマンス優先）
- jQuery依存を完全排除
- Content Collectionsを活用したコンテンツ管理
- レスポンシブデザイン必須
- アクセシビリティを考慮
