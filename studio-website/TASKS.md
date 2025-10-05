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

- [ ] 7. **CSS移行・モダン化**
  - `wordpress/frontend/shared/css/` の4ファイルを `src/styles/` へ移行
  - 不要なアニメーションCSS削除（wow fadeIn等 146箇所）
  - CSS変数の活用
  - モダンCSSへのリファクタリング
  - レスポンシブ対応の確認

- [ ] 8. **必要なJS機能の洗い出し**
  - 既存7ファイル（jquery.min.js, slick, remodal, base.js等）の機能を調査
  - 本当に必要な機能をリストアップ
  - 削減可能な機能を特定

- [ ] 9. **Vanilla JS化**
  - jQuery依存の排除
  - モダンJavaScript（ES6+）で再実装
  - ハンバーガーメニュートグル
  - スムーススクロール
  - ページトップボタン
  - 必要最小限の機能のみ実装

- [ ] 10. **Slickカルーセル代替**
  - Swiper等の軽量ライブラリ検討
  - または素のJavaScript/CSS実装
  - トップページのスライダー対応

---

## フェーズ4: 静的ページ移行（全10ページ）

- [ ] 11. **トップページ**
  - `src/pages/index.astro`
  - メインビジュアルスライダー
  - キービジュアルボックス
  - 料金案内セクション
  - キャンペーンバナー（条件付き表示）

- [ ] 12. **スタジオ案内**
  - `src/pages/studio.astro`

- [ ] 13. **料金案内**
  - `src/pages/price.astro`

- [ ] 14. **レンタル機材**
  - `src/pages/rental.astro`

- [ ] 15. **アクセス**
  - `src/pages/access.astro`

- [ ] 16. **よくある質問**
  - `src/pages/faq.astro`

- [ ] 17. **ホリゾントルール**
  - `src/pages/horizon.astro`

- [ ] 18. **ご予約・お問い合わせ**
  - `src/pages/reservation.astro`

- [ ] 19. **利用規約**
  - `src/pages/policy.astro`

---

## フェーズ5: ブログ機能構築（新規）

- [ ] 20. **Content Collectionsセットアップ**
  - `src/content/config.ts` でブログスキーマ定義
  - フィールド: title, description, date, category, image等
  - `src/content/blog/` ディレクトリ作成

- [ ] 21. **ブログ一覧ページ**
  - `src/pages/blog/index.astro`
  - 記事一覧表示
  - カテゴリフィルタ
  - ページネーション実装

- [ ] 22. **ブログ詳細ページ**
  - `src/pages/blog/[slug].astro`
  - 動的ルーティング
  - Markdownレンダリング
  - 記事メタ情報表示

- [ ] 23. **カテゴリページ**
  - `src/pages/blog/category/[category].astro`
  - カテゴリ別記事一覧

- [ ] 24. **ブログコンポーネント**
  - `src/components/BlogCard.astro` - 記事カード
  - `src/components/Pagination.astro` - ページネーション
  - `src/components/CategoryList.astro` - カテゴリ一覧

- [ ] 25. **サンプル記事作成**
  - `src/content/blog/` にMarkdownでサンプル投稿3〜5記事
  - 異なるカテゴリで作成

---

## フェーズ6: ニュース機能移行（既存）

- [ ] 26. **ニュース一覧ページ**
  - `src/pages/news/index.astro`
  - 既存archive.phpの移行
  - カテゴリフィルタ
  - ページネーション

- [ ] 27. **ニュース詳細ページ**
  - `src/pages/news/[slug].astro`
  - 動的ルーティング

- [ ] 28. **ニュースContent Collections設定**
  - `src/content/config.ts` にニューススキーマ追加
  - `src/content/news/` ディレクトリ作成

- [ ] 29. **既存ニュース記事のマイグレーション**
  - WordPressからMarkdownへ変換（必要に応じて）
  - またはサンプルデータ作成

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
- **現在のフェーズ**: フェーズ2完了 → フェーズ3（スタイル・JavaScript移行）
- **完了タスク数**: 6 / 37

---

## 注意事項

- アニメーションは最小限に（パフォーマンス優先）
- jQuery依存を完全排除
- Content Collectionsを活用したコンテンツ管理
- レスポンシブデザイン必須
- アクセシビリティを考慮
