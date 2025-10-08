# コンテンツ執筆ガイド

スタジオゼブラ公式サイトのブログ・NEWS記事の書き方をまとめたガイドです。

## 目次

1. [ファイル構成](#ファイル構成)
2. [記事の作成方法](#記事の作成方法)
3. [フロントマターの書き方](#フロントマターの書き方)
4. [Markdownの書き方](#markdownの書き方)
5. [画像の追加方法](#画像の追加方法)
6. [カテゴリ管理](#カテゴリ管理)
7. [記事テンプレート](#記事テンプレート)
8. [公開手順](#公開手順)

---

## ファイル構成

### ブログ記事

```
astro/
└── src/
    └── content/
        └── blog/
            ├── article-slug.md  # 記事ファイル（ファイル名がURLになります）
            └── ...
```

**URL:** `https://studio-zebra.com/blog/article-slug/`

### NEWS記事

```
astro/
└── src/
    └── content/
        └── news/
            ├── news-slug.md  # 記事ファイル
            └── ...
```

**URL:** `https://studio-zebra.com/news/news-slug/`

---

## 記事の作成方法

### 1. ファイル名の決め方

ファイル名は**URLのスラッグ**になります。

#### 良いファイル名の例
- `spring-campaign-2025.md` → `/blog/spring-campaign-2025/`
- `new-lighting-equipment.md` → `/news/new-lighting-equipment/`
- `photography-tips-beginner.md` → `/blog/photography-tips-beginner/`

#### 避けるべきファイル名
- 日本語: `春キャンペーン.md` ❌
- スペース: `spring campaign.md` ❌
- 大文字: `SpringCampaign.md` ❌（小文字推奨）

### 2. ファイルの作成

適切なディレクトリに `.md` ファイルを作成します：

```bash
# ブログ記事
astro/src/content/blog/your-article.md

# NEWS記事
astro/src/content/news/your-news.md
```

---

## フロントマターの書き方

各記事ファイルの先頭には、`---` で囲まれたフロントマター（メタデータ）を記述します。

### ブログ記事のフロントマター

```yaml
---
title: '記事のタイトル'
description: '記事の概要（150文字程度）'
pubDate: 2025-01-15
author: 'スタジオゼブラ'
category: 'お知らせ'
image: '/img/blog/article-image.jpg'
tags: ['タグ1', 'タグ2', 'タグ3']
---
```

### NEWS記事のフロントマター

```yaml
---
title: 'ニュースのタイトル'
description: 'ニュースの概要（150文字程度）'
pubDate: 2025-01-15
author: 'スタジオゼブラ'
category: 'お知らせ'
image: '/img/news/news-image.jpg'
---
```

### フィールドの説明

| フィールド | 必須 | 説明 | 例 |
|-----------|------|------|-----|
| `title` | ✓ | 記事のタイトル | `'春の特別キャンペーン開催'` |
| `description` | ✓ | 記事の概要（SEO用） | `'3月限定で全プラン20%OFF...'` |
| `pubDate` | ✓ | 公開日（YYYY-MM-DD） | `2025-03-01` |
| `author` | | 著者名（デフォルト: スタジオゼブラ） | `'スタジオゼブラ'` |
| `category` | ✓ | カテゴリ | `'キャンペーン'` |
| `image` | | アイキャッチ画像のパス | `'/img/blog/campaign.jpg'` |
| `tags` | | タグ（ブログのみ） | `['キャンペーン', '割引']` |
| `updatedDate` | | 更新日 | `2025-03-05` |

### 日付の書き方

```yaml
# OK
pubDate: 2025-01-15
pubDate: 2025-1-5

# NG
pubDate: '2025/01/15'  # スラッシュは使わない
pubDate: 2025-1-5 10:00:00  # 時刻は不要
```

---

## Markdownの書き方

フロントマターの後に、Markdown形式で記事本文を書きます。

### 見出し

```markdown
# 見出し1（使用しない - titleが自動的にh1になります）
## 見出し2（大見出し）
### 見出し3（中見出し）
```

### 段落

```markdown
これは段落です。

改行したい場合は、空行を1つ入れます。
```

### リスト

```markdown
## 箇条書き（番号なし）
- 項目1
- 項目2
- 項目3

## 番号付きリスト
1. 最初の項目
2. 2番目の項目
3. 3番目の項目
```

### 強調

```markdown
**太字**
*斜体*
```

### リンク

```markdown
[リンクテキスト](URL)

例:
[料金案内はこちら](/price)
[外部サイト](https://example.com)
```

### 画像

```markdown
![代替テキスト](/img/blog/photo.jpg)
```

### 引用

```markdown
> これは引用文です。
> 複数行にわたることもできます。
```

### コード

```markdown
インライン: `code`

ブロック:
\```
コードブロック
\```
```

---

## 画像の追加方法

### 1. 画像ファイルの配置

```
astro/
└── public/
    └── img/
        ├── blog/        # ブログ用画像
        │   └── article-image.jpg
        └── news/        # NEWS用画像
            └── news-image.jpg
```

### 2. 記事内での参照

#### アイキャッチ画像（フロントマター）

```yaml
---
image: '/img/blog/article-image.jpg'
---
```

#### 本文中の画像（Markdown）

```markdown
![画像の説明](/img/blog/photo.jpg)
```

### 画像のファイル形式

- **推奨**: JPG（写真）、PNG（ロゴ、イラスト）
- **サイズ**: 横幅1200px以下推奨
- **ファイルサイズ**: 500KB以下推奨

---

## カテゴリ管理

### ブログのカテゴリ（既存）

- `お知らせ`
- `撮影テクニック`
- `機材情報`
- `キャンペーン`
- `活用事例`

### NEWSのカテゴリ（既存）

- `お知らせ`
- `機材`
- `営業情報`
- `メンテナンス`

### 新しいカテゴリの追加

新しいカテゴリを使いたい場合は、記事のフロントマターに新しいカテゴリ名を記述するだけでOKです。

```yaml
category: '新カテゴリ'
```

カテゴリページは自動的に生成されます。

---

## 記事テンプレート

### ブログ記事テンプレート

新しいブログ記事を作成する際のテンプレートです。

```markdown
---
title: 'ここに記事タイトル'
description: 'ここに記事の概要を150文字程度で記述します。この文章はSEOやSNSシェア時に使用されます。'
pubDate: 2025-01-15
author: 'スタジオゼブラ'
category: 'お知らせ'
image: '/img/blog/article-image.jpg'
tags: ['タグ1', 'タグ2']
---

# ここにメインタイトル（h1は自動生成されるので不要）

記事の導入文をここに書きます。

## 見出し2

本文をここに書きます。

### 見出し3

詳細な内容を書きます。

- 箇条書き1
- 箇条書き2
- 箇条書き3

## まとめ

記事のまとめを書きます。

[関連リンク](/price)
```

### NEWS記事テンプレート

```markdown
---
title: 'ニュースタイトル'
description: 'ニュースの概要を簡潔に記述します。'
pubDate: 2025-01-15
author: 'スタジオゼブラ'
category: 'お知らせ'
image: '/img/news/news-image.jpg'
---

# ニュースタイトル

ニュースの本文をここに書きます。

## 詳細

詳細情報を記述します。

## お問い合わせ

ご不明な点は[お問い合わせページ](/reservation)よりご連絡ください。
```

---

## 公開手順

### 1. ローカルで記事を確認

開発サーバーを起動して、記事を確認します。

```bash
cd astro
npm run dev
```

ブラウザで以下のURLにアクセス：

- ブログ一覧: `http://localhost:4321/blog/`
- NEWS一覧: `http://localhost:4321/news/`
- 記事詳細: `http://localhost:4321/blog/your-article/`

### 2. ビルド確認

エラーがないか確認します。

```bash
npm run build
```

**成功メッセージ例:**
```
✓ Completed in XXXms.
[build] XX page(s) built in X.XXs
[build] Complete!
```

### 3. デプロイ

ビルドが成功したら、Gitにプッシュするか、デプロイ先にアップロードします。

```bash
git add .
git commit -m "新しい記事を追加"
git push
```

---

## よくある質問（FAQ）

### Q1: 記事のURLを変更できますか？

A: ファイル名を変更すれば、URLも変更されます。ただし、既に公開済みの記事のURLを変更すると、リンク切れになる可能性があるので注意してください。

### Q2: 下書き機能はありますか？

A: フロントマターに `draft: true` を追加することで、記事を非公開にできます（ただし、現在は未実装）。代わりに、公開日を未来の日付に設定することで、暫定的に非公開にできます。

### Q3: 画像が表示されません

A: 以下を確認してください：
- 画像が `public/img/` 内に配置されているか
- パスが `/img/...` で始まっているか（先頭のスラッシュが必要）
- ファイル名が正確か（大文字小文字も区別されます）

### Q4: カテゴリページが表示されません

A: 記事を作成してビルドすれば、自動的にカテゴリページが生成されます。

### Q5: 記事の順序を変更できますか？

A: 記事は `pubDate`（公開日）の新しい順に自動的に並びます。順序を変更したい場合は、`pubDate` を変更してください。

---

## サンプル記事

実際のサンプル記事は以下を参照してください：

- ブログ: `src/content/blog/welcome.md`
- NEWS: `src/content/news/site-renewal.md`

---

## お困りの際は

記事作成でわからないことがあれば、以下のファイルを参考にしてください：

- `src/content/config.ts` - スキーマ定義
- `src/pages/blog/[slug].astro` - ブログ詳細ページ
- `src/pages/news/[slug].astro` - NEWS詳細ページ

---

**Last Updated:** 2025-10-09
