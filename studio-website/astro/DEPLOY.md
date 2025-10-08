# デプロイガイド

## 本番環境へのデプロイ手順

### 1. ビルド確認

```bash
npm run build
```

ビルドが成功することを確認してください。

### 2. サイトURLの設定

`astro.config.mjs` の `site` を本番環境のURLに変更してください：

```js
export default defineConfig({
  site: 'https://studio-zebra.com', // 実際のドメインに変更
  integrations: [sitemap()],
});
```

### 3. robots.txtの更新

`public/robots.txt` のサイトマップURLを本番環境のURLに更新してください。

### 4. デプロイ先の選定

以下のプラットフォームが推奨されます：

#### Netlify（推奨）
- GitHubリポジトリと連携
- ビルドコマンド: `npm run build`
- 公開ディレクトリ: `dist`
- 自動デプロイ対応

#### Vercel
- GitHubリポジトリと連携
- フレームワークプリセット: Astro
- 自動デプロイ対応

#### Cloudflare Pages
- GitHubリポジトリと連携
- ビルドコマンド: `npm run build`
- ビルド出力ディレクトリ: `dist`

### 5. 環境変数設定

デプロイ先のプラットフォームで以下の環境変数を設定してください：

```
SITE_URL=https://studio-zebra.com
```

### 6. デプロイ後の確認

- [ ] すべてのページが正しく表示される
- [ ] リンクが正常に動作する
- [ ] sitemap.xml が生成されている
- [ ] RSS Feedが正常に配信されている
- [ ] OGP画像が正しく表示される
- [ ] Google Analyticsが動作している

### 7. SEO設定

デプロイ後、Google Search Consoleにサイトマップを登録してください：

```
https://studio-zebra.com/sitemap-index.xml
```

## パフォーマンス確認

Lighthouse監査を実行して、以下のスコアを確認してください：

- Performance: 90以上
- Accessibility: 90以上
- Best Practices: 90以上
- SEO: 90以上

## トラブルシューティング

### ビルドエラー

```bash
npm run build
```

でエラーが発生する場合は、依存関係を再インストールしてください：

```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

### 画像が表示されない

`public/` ディレクトリ内の画像が正しく配置されているか確認してください。

### サイトマップが生成されない

`astro.config.mjs` の `site` が正しく設定されているか確認してください。
