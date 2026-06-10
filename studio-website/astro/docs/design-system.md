# スタジオゼブラ 新ビジュアルシステム設計書（Design System v2）

**ステータス**: ドラフト / **作成日**: 2026-05-15 / **対象リポジトリ**: `astro/`

---

## 0. このドキュメントについて

### 役割

本書は、Claude Design で生成された新ビジュアル ([https://api.anthropic.com/v1/design/h/J7phQYncF\_DOBs5FCs9W3g](https://api.anthropic.com/v1/design/h/J7phQYncF_DOBs5FCs9W3g)) をスタジオゼブラ公式サイト Astro 版に適用する際の **ノーススター（北極星）** です。実装エージェント・人間の開発者が、サイト全体の統制を保ちながら新デザインを段階適用するための、唯一の参照ドキュメントとして書かれています。

### CLAUDE.md との違い

| 観点 | CLAUDE.md | 本書 |
|---|---|---|
| 主目的 | WordPress → Astro **移行**の全体ガイド | **ビジュアル統制**のガイド |
| 粒度 | ページ単位の移行手順 | デザイントークン / コンポーネント仕様 |
| 寿命 | 移行完了まで | サイトのビジュアル指針として継続 |

CLAUDE.md と矛盾する記述があれば CLAUDE.md を優先してください。本書は CLAUDE.md の §4「アニメーション方針」と整合させています（スクロールアニメーション原則なし）。

### スコープ

- ✅ 含む: 新デザインのトークン定義・コンポーネント仕様・適用ガイド・ロールアウト計画
- ❌ 含まない: ページ単位の実装コード、Markdown 記事スタイル、SEO 仕様

### 出典

- Claude Design bundle: `/tmp/design-extract/design-system/`
- 一次資料:
  - `project/colors_and_type.css` — トークン原典
  - `project/README.md` — ボイス・哲学原典
  - `project/ui_kits/website/website.css` — ボタン/カード/バッジ実装
  - `project/ui_kits/website/PriceBoard.jsx` — 料金ページ実装
  - `project/ui_kits/website/RentalPage.jsx` — 機材ページ実装
  - `chats/chat1.md` — 設計意図・ユーザーフィードバック履歴

### 関連ファイル

- [../../CLAUDE.md](../../CLAUDE.md) — プロジェクト全体方針
- [../../README.md](../../README.md) — プロジェクト概要
- [../CONTENT_GUIDE.md](../CONTENT_GUIDE.md) — 記事執筆ガイド

---

## 1. デザイン哲学

**親しみ × 信頼** — プロ向けの撮影スタジオでありながら、トーンは "近所の頼れる店主"。`sleek tech studio` ではなく `cheerful local shop` を目指す。

3 つの中核原則:

1. **写真と余白が主役**。装飾は控え、撮影スタジオらしい清潔な白ホリの空気を画面に持ち込む。
2. **遊び心はゼブラ縞モチーフに集約**。チャンキー（厚ぼったい）な黒枠と `0 8px 0 0 black` のソリッドシャドウで、漫画的・コミック的なポップさを 1 画面 1〜2 要素にだけ許可。
3. **読み手の負担を増やさない**。アニメーションは最小、グラデ・グラスモーフィズム・パープル・ノイズは原則 off-brand（例外は §3.4 に明記した料金ヒーロー背景とヘッダーナビバーのミントグラデのみ）。

---

## 2. 適用範囲と段階

### 直近 (本書承認後すぐ着手)

| Phase | ページ | 状態 |
|---|---|---|
| 1 | `src/pages/price.astro` (料金案内) | 全面書き換え |
| 2 | `src/pages/rental.astro` (機材) | 全面書き換え |

### 据え置き (Phase 1-2 では一切触らない)

- 共通コンポーネント: `src/components/Header.astro`, `src/components/Footer.astro`
- 他ページ: `index.astro` / `studio.astro` / `access.astro` / `faq.astro` / `horizon.astro` / `reservation.astro` / `policy.astro` / `blog/` / `news/`
- 既存 CSS: `public/styles/common.css` / `shared.css` / `index.css` / `global.css` / `global/lead-section.css`

### 過渡期の共存ルール（重要）

Phase 1-2 完了時点では、サイトには **「旧デザインのページ」と「新デザインのページ」が混在** します。これを許容するための統制ルール:

- **Header / Footer は旧デザインのまま**。新ページに遷移しても上下のシェルは変わらない（ユーザーの認知負荷を下げる）。
  - ただし **ナビバーの背景のみ Phase 1 で先行刷新済み**: 旧単色 `#82C2A9` → mint→sky グラデ（mint `#93D2C2` → 中間 `#A8DCE0` → sky `#BCE2F4`）の横 3 色グラデ（`shared.css` の `.nav-header` / `.header-box`、`Header.astro` の SP ハンバーガーは終端の sky）。色値はナビ専用トークン `--nav-grad-start` / `--nav-grad-mid` / `--nav-grad-end` を参照。レイアウト・構造・ナビアイコンは据え置き。
- 新ページからは **新トークン (`--brand-*`, `--paper-*`) のみ参照**。旧トークン (`--color-*`) は使わない。
- 旧ページからは **旧トークン (`--color-*`) のみ参照**。新トークンは参照しない。
- 共通コンポーネント（Header/Footer/PageHeader）は **旧トークン側に属する**。新ページからも旧トークンの色で表示される。
- ナビゲーション現行の PNG ナビアイコン (`gnav01.png`〜) は据え置き。Lucide 置換は §17 の Phase で予定。

「料金/機材だけ浮いて見える」という懸念は、ヒーロー以降のコンテンツ領域が新デザインで自己完結することで吸収する想定です。

---

## 3. カラートークン

### 3.1 新ブランドトークン（追加対象）

次セッションで `astro/public/styles/global/variables.css` の `:root` ブロック末尾に追記する想定。値は Claude Design bundle の `colors_and_type.css` と完全一致。

```css
:root {
  /* ===== Brand v2 (Claude Design) ===== */
  --brand-red:        #E84A3D; /* primary CTA / speech bubble / accent */
  --brand-red-deep:   #C73A2E; /* hover / pressed */
  --brand-mint:       #93D2C2; /* secondary accent */
  --brand-mint-deep:  #6FB6A4; /* mint hover */
  --brand-black:      #1A1A1A; /* text / zebra stripe / outline */
  --brand-white:      #FFFFFF; /* white horizon backdrop */

  /* ===== Neutrals v2 ===== */
  --ink-1:  #1A1A1A; /* primary text */
  --ink-2:  #3A3A3A; /* secondary text */
  --ink-3:  #6B6B6B; /* muted / captions */
  --ink-4:  #9A9A9A; /* disabled / hints */
  --line-1: #E6E6E6; /* hairline */
  --line-2: #F0EFEC; /* divider on cream */
  --paper-0: #FFFFFF; /* pure white */
  --paper-1: #FAF8F4; /* warm cream — page bg */
  --paper-2: #F3EFE7; /* card cream */
  --paper-3: #E8E2D4; /* warm beige */

  /* ===== Semantic v2 ===== */
  --accent-soft: #FDEAE6;
  --success:     #2E8B57;
  --warn:        #E8A33B;
  --danger:      var(--brand-red);
  --info:        var(--brand-mint-deep);
}
```

### 3.2 既存トークン（温存）

`variables.css` の既存定義（`--color-primary #82C2A9`, `--color-accent #FF463C`, `--color-gray` 等）は **削除も改名もしません**。旧ページが参照を続けるためです。削除時期は §16 で未確定事項として記載。

### 3.3 新旧の使い分け早見表

| 旧 (継続) | 新 (Phase 1-2 のみ) | 役割 |
|---|---|---|
| `--color-accent` #FF463C | `--brand-red` #E84A3D | CTA・警告アクセント |
| `--color-primary` #82C2A9 | `--brand-mint` #93D2C2 | セカンダリアクセント |
| `--color-black` #000 | `--brand-black` #1A1A1A | 本文・縞模様 |
| `--color-text` #231815 | `--ink-1` #1A1A1A | 主テキスト |
| `--color-bg-light` #f9f9f9 | `--paper-1` #FAF8F4 | ページ背景 |
| `--color-border` #DFDFDF | `--line-1` #E6E6E6 | 罫線 |

> **注**: 旧の赤 `#FF463C` と新の赤 `#E84A3D` は **意図的に別色** として扱います。混色しないでください。Phase 1-2 完了後に統合判断を行います（§16）。

### 3.4 使うべきでない色

- 純黒 `#000000` は新ページでは使わない（`--brand-black` #1A1A1A を使う）
- グラデーション（`linear-gradient`）は次の 2 種類のみ可。それ以外不可:
  - 背景の `paper-1 → mint`（料金ヒーロー用）
  - ヘッダーナビバーの mint→sky グラデ（`linear-gradient(90deg, var(--nav-grad-start) 0%, var(--nav-grad-mid) 50%, var(--nav-grad-end) 100%)`、横方向）。mint(#93D2C2) → 中間(#A8DCE0) → sky(#BCE2F4) の 3 色。共通シェル（Header）に Phase 1 で先行適用。詳細は §9 参照
- パープル・ターコイズ・ブルー系は原則 off-brand。ただし**ヘッダーナビバーのスカイブルー（mint→sky グラデの終端 `--nav-grad-end` #BCE2F4）のみ例外として許可**（要望対応・上記グラデ参照）。本文・CTA・カード等のコンテンツ領域では引き続き使用しない

---

## 4. タイポグラフィ

### 4.1 フォントファミリースタック

```css
:root {
  --font-display: "Zen Maru Gothic", "Hiragino Maru Gothic ProN", system-ui, sans-serif;
  --font-body:    "Yu Gothic", "游ゴシック", YuGothic, "游ゴシック体", "Hiragino Kaku Gothic ProN", "Noto Sans JP", sans-serif;
  --font-round:   "M PLUS Rounded 1c", "Zen Maru Gothic", sans-serif;
  --font-en:      "DM Sans", "Zen Kaku Gothic New", sans-serif;
}
```

Google Fonts の `link` 追加は `src/layouts/BaseLayout.astro` の既存 Montserrat `link` に **追加** する形（Montserrat も残す）:

```
Zen+Maru+Gothic:wght@500;700;900
M+PLUS+Rounded+1c:wght@500;700;800
DM+Sans:wght@500;700
```

游ゴシックは OS バンドルのため Web Font 不要。

### 4.2 タイプスケール

```css
:root {
  --t-hero:  clamp(40px, 6vw, 72px);
  --t-h1:    clamp(32px, 4vw, 48px);
  --t-h2:    clamp(26px, 3vw, 36px);
  --t-h3:    22px;
  --t-h4:    18px;
  --t-body:  16px;
  --t-small: 14px;
  --t-tiny:  12px;
}
```

### 4.3 用途別マッピング

| シーン | ファミリー | サイズ | 太さ | 行間 |
|---|---|---|---|---|
| ヒーロー大見出し | `--font-display` | `--t-hero` | 900 | 1.1 |
| ページ H1 | `--font-display` | `--t-h1` | 900 | 1.2 |
| セクション H2 | `--font-display` | `--t-h2` | 700 | 1.3 |
| カード見出し | `--font-body` | `--t-h3` | 700 | 1.4 |
| 本文 | `--font-body` | `--t-body` | 400 | 1.7 |
| 価格数字 | `--font-en` | 24〜40px | 700 | 1.0 |
| 英字 eyebrow ラベル | `--font-en` | 12px / letter-spacing 0.08em / uppercase | 700 | 1.5 |
| バッジ・ボタン | `--font-round` | 11〜15px | 800 | 1.0 |

### 4.4 ロゴ書体について

公式ロゴは独自の筆触カタカナで、`Zen Maru Gothic Black` は **近似代替**（substitute）です。ロゴ画像は SVG/PNG をそのまま使用し、ディスプレイ用フォントとは別扱いとします（§16 で要確認）。

---

## 5. スペース・角丸・シャドウ

### 5.1 スペーシング (4pt scale)

```css
:root {
  --s-1: 4px;   --s-2: 8px;   --s-3: 12px;
  --s-4: 16px;  --s-5: 24px;  --s-6: 32px;
  --s-7: 48px;  --s-8: 64px;  --s-9: 96px;
}
```

セクション間は `--s-7`〜`--s-9` を基本。カード内パディングは `--s-4`〜`--s-5`。

**既存 `--spacing-xs/sm/md/lg/xl/2xl` (10/20/30/45/75/100px) との関係**: 数値が微妙にずれるため、新ページは `--s-*` のみ使う。

### 5.2 角丸

```css
:root {
  --r-xs:   4px;
  --r-sm:   8px;
  --r-md:   14px;
  --r-lg:   20px;  /* デフォルトカード */
  --r-xl:   28px;
  --r-pill: 999px; /* ボタン・バッジ */
}
```

### 5.3 シャドウ

```css
:root {
  --shadow-1: 0 1px 2px rgba(26,26,26,0.05), 0 1px 3px rgba(26,26,26,0.06); /* 静止カード */
  --shadow-2: 0 4px 10px rgba(26,26,26,0.06), 0 2px 4px rgba(26,26,26,0.05); /* hover カード */
  --shadow-3: 0 12px 28px rgba(26,26,26,0.10), 0 4px 10px rgba(26,26,26,0.06); /* モーダル */
  --shadow-pop: 0 8px 0 0 var(--brand-black); /* chunky pop */
}
```

`--shadow-pop` は **1 画面 1〜2 要素まで**。多用するとブランド感が薄れます。

---

## 6. コンポーネント・インベントリ

> 各コンポーネントの基準は bundle の `project/ui_kits/website/website.css` および `PriceBoard.jsx` / `RentalPage.jsx` を参照。Astro 化時は React JSX ではなく `.astro` で再実装してください（バンドルを丸ごとコピーしない）。

### 6.1 Button

| バリアント | 背景 | 文字色 | ボーダー | 用途 |
|---|---|---|---|---|
| primary | `--brand-red` | `#fff` | なし | 主 CTA（ご予約はこちら 等） |
| secondary | `#fff` | `--ink-1` | 2px `--ink-1` | サブ CTA（資料DL 等） |
| ghost | transparent | `--ink-1` | hover で `--brand-mint` underline | テキストリンク強調 |

共通: `border-radius: var(--r-pill)`, `font-family: var(--font-round)`, `font-weight: 800`, padding `14px 28px`。

- hover: primary は `--brand-red-deep` + `translateY(-1px)`、card は `--shadow-2`
- active: `translateY(+1px)`、色は変えない

### 6.2 Card

**併用禁止**: `card-soft` と `card-pop` を同じ要素に当てない。

| バリアント | 背景 | ボーダー | シャドウ | 用途 |
|---|---|---|---|---|
| **soft** | `#fff` (cream ページ上) / `--paper-2` (ネスト) | 1px `--line-1` | `--shadow-1` | コンテンツカード、機材グリッド |
| **pop** | `#fff` | 2px `--brand-black` | `--shadow-pop` | CTA / 強調カード（料金主要カード等） |

共通: `border-radius: var(--r-lg)` (20px)。

### 6.3 Badge / Pill

| バリアント | 背景 | 文字色 | 用途 |
|---|---|---|---|
| danger | `--accent-soft` `#FDEAE6` | `--brand-red-deep` | 警告・「別途料金」 |
| warn | `#FFF4E0` | `#9A6A14` | 注意 |
| info | `#E5F2EE` | `#3B7B6E` | 補足 |
| success | `#E4F4ED` | `#2E8B57` | 営業中 等 |
| neutral | `--paper-2` | `--ink-2` | 中立タグ |

共通: `padding: 4px 12px`, `border-radius: var(--r-pill)`, `font-size: 11px`, `font-weight: 800`, `font-family: var(--font-round)`。

### 6.4 Section Eyebrow

英字小ラベル + JP 大見出しのペア。セクション冒頭に置く。

```html
<span class="section-eyebrow">PRICE</span>
<h2 class="t-h2">料金のご案内</h2>
```

`.section-eyebrow`: `display: inline-block; padding: 4px 14px; border-radius: 999px; background: var(--paper-2); font-family: var(--font-en); font-size: 12px; letter-spacing: 0.12em; font-weight: 700; color: var(--ink-2); text-transform: uppercase;`

ヒーロー（黒地）上では `background: rgba(255,255,255,0.12); color: #fff;` に切り替え。

### 6.5 Zebra-band

セクション境界の装飾帯。アセットは `astro/public/images/design/zebra-stripe.svg`（§12 で配置予定）。

| バリアント | 高さ | パターンサイズ | 用途 |
|---|---|---|---|
| thin | 12〜14px | 24px | カード上端・ヒーロー下端 |
| thick | 24px | 32px | セクション間の主要区切り |

ヒーロー背景に大きく敷く場合は `position: absolute; inset: 0; opacity: 0.08〜0.18; transform: rotate(-12deg)` で抑制（料金ヒーロー・機材ヒーロー）。

### 6.6 Mascot CTA（保留）

bundle の `mascot-reservation.webp` を右下固定の予約ボタンとして使う想定（既存 BaseLayout の `showFixedReservationButton` プロップと統合）。**Phase 1-2 では現状の固定予約ボタンを据え置き**、マスコット差し替えは Phase 3 以降。

### 6.7 禁止事項（共通）

- 二重ボーダー（border + outline 併用）禁止
- 破線ボーダー禁止
- `card-pop` と他のシャドウ重ねがけ禁止
- グラデ背景の文字（読みづらさ防止）禁止

---

## 7. アイコン

### 7.1 採用方針

新ページでは **Lucide** を使用する想定。stroke 1.5px, rounded caps/joins, `color: currentColor`。デフォルトサイズ 20×20 (UI) / 24×24 (カード) / 32×32 (フィーチャー)。

導入手段は次セッションで決定（`lucide` npm パッケージ vs SVG 個別配置）。Phase 1-2 で必要なアイコンが少数なら SVG 個別が軽量。

### 7.2 用途別アイコン表（bundle README から転載）

| シーン | Lucide name |
|---|---|
| スタジオ情報 | `camera` |
| 料金 | `receipt-japanese-yen`（無ければ `receipt-text`） |
| 機材レンタル | `lightbulb` |
| アクセス | `map-pin` |
| FAQ | `circle-help` |
| ホリゾントルール | `shield-alert` |
| 予約 | `calendar` |
| ニュース | `megaphone` |
| Twitter/X | `twitter` |
| LINE | `message-circle` |

### 7.3 既存 PNG ナビとの併存

`gnav01.png`〜のヘッダーナビアイコンは Phase 1-2 では **据え置き**。Lucide 化は Header/Footer 全体刷新と同時に行う（§17 共通 Phase）。

### 7.4 絵文字・装飾記号

- 絵文字（😊🎬等）は本文に使わない
- `★◎●` の装飾は新ページでは原則使わない（Lucide で置き換える）
- 例外: `・` は箇条書きで継続使用（§11 ルール記述パターン）

---

## 8. イメージ・写真

### 8.1 機材写真

bundle 同梱の 24 点（`design-system/project/assets/equipment/*.webp`）を以下に配置予定:

```
astro/public/images/rental/applebox.webp
astro/public/images/rental/autopole.webp
astro/public/images/rental/blower.webp
astro/public/images/rental/chair.webp
astro/public/images/rental/clamp.webp
astro/public/images/rental/extension-cord.webp
astro/public/images/rental/generator.webp
astro/public/images/rental/grid.webp
astro/public/images/rental/hangerrack-mirror.webp
astro/public/images/rental/minitable.webp
astro/public/images/rental/octa.webp
astro/public/images/rental/radioslave.webp
astro/public/images/rental/rect-softbox.webp
astro/public/images/rental/reflector.webp
astro/public/images/rental/speaker.webp
astro/public/images/rental/stand.webp
astro/public/images/rental/stepladder.webp
astro/public/images/rental/stool.webp
astro/public/images/rental/tripod.webp
astro/public/images/rental/umbrella.webp
astro/public/images/rental/wagon.webp
astro/public/images/rental/weight.webp
astro/public/images/rental/wood-table.webp
```

> 本セッションではコピー未実行。Phase 2 (rental.astro 実装) の最初に `cp` で移植する。

### 8.2 マスコット

```
bundle: design-system/project/assets/mascot-reservation.webp
→ astro/public/images/mascot/reservation.webp
```

ロゴと色や2px黒アウトラインを破壊しないよう、CSS フィルタ・トリミング禁止。

### 8.3 ゼブラ縞 SVG

```
bundle: design-system/project/assets/zebra-stripe.svg
→ astro/public/images/design/zebra-stripe.svg
```

### 8.4 ロゴ

```
bundle: design-system/project/assets/logo-zebra.png
→ 既存 astro/public/img/shared/ にあるロゴと比較し、品質が高い方を採用（次セッション判断）。
```

### 8.5 撮影トーン

- 自然光・微温・フィルタ無し
- 白ホリと被写体の余白を活かす
- B&W、強いノイズ、寒色トーン、ブラーは off-brand
- 写真上に文字を載せる場合は **白 96% スクリム**（半透明白）を敷く。フロステッドブラーは使わない

---

## 9. モーション

### 9.1 イージング・デュレーション

```css
:root {
  --ease-out: cubic-bezier(0.2, 0.8, 0.2, 1);
  --d-micro: 160ms;
  --d-trans: 240ms;
  --d-page:  360ms;
}
```

### 9.2 ホバー / プレス

| 要素 | hover | active |
|---|---|---|
| primary button | `--brand-red-deep`, `translateY(-1px)` | `translateY(+1px)` 色変えなし |
| card-soft | `--shadow-2`, `translateY(-2px)` | — |
| card-pop | わずかに `translateY(-1px)` | `translateY(+1px)`, shadow を `0 4px 0 0 black` に縮める |

### 9.3 スクロールアニメーション（重要）

新ページでは **`.wow.fadeInUp` 等のスクロールトリガーアニメーションを一切使わない**。CLAUDE.md §4「アニメーション方針」と整合させ、パフォーマンスとアクセシビリティを優先します。

既存ページに残る `.wow fadeInUp` クラスは旧ページのみ動作（Phase 1-2 では旧 WOW.js を温存）。新ページのマークアップから当該クラスは完全に除去してください。

### 9.4 マスコットの揺れ（保留）

bundle 仕様では「2.4 秒周期で ±2° 回転」。Phase 1-2 では実装せず、マスコット導入時（Phase 3 以降）に検討。

---

## 10. ボイス & コピー

### 10.1 基本トーン

- **丁寧で親しみやすい (です・ます)** を一貫
- ご-prefix: ご予約・ご利用・ご来店・ご使用
- 過剰な敬語（いらっしゃいませ・申し上げます）は使わない

### 10.2 「！」の使い方

- 全角 `！` のみ、半角 `!` および `!!` は禁止
- 1 文に 1 個まで、見出し・キーフレーズに限定
- 例: 「エキチカ！」「ゆったり！」「思いのまま！」「ご予約はこちら」

### 10.3 人称

| 種別 | 用法 |
|---|---|
| 一人称 | 原則使わない。必要時は「スタジオ」「当スタジオ」「弊スタジオ」 |
| 二人称 | 規約・ルール文脈で「お客様」、それ以外は直接呼びかけ（「ご利用いただけます」） |
| 禁止 | 「私たち」「僕ら」 |

### 10.4 数字・通貨

- 半角数字 + 全角単位: 「天井高3m」「徒歩3分」
- 通貨は常に **税込表示**: 「¥5,500（税込）」「¥4,950／1h（税込）」
- 税抜と税込の併記が必要な場合は税抜を大きく、税込を補助に

### 10.5 絵文字

本文では使わない。コードでも `🎉` `📷` 等を含めない。

### 10.6 装飾フレーミング

- セクションラベルに `「」` `〈〉` を使ってよい: 例「ハウスルール」「ホリゾントルール」
- 段落内の強調には `<strong>` を使い、文字装飾は最小限

---

## 11. ルール記述パターン

ホリゾントルール・ハウスルール・利用規約に共通する文体ルールです。**料金ページの注意事項にもこの文体を適用します**。

### 11.1 基本形

```
・<subject + scope><動作><「厳禁です／禁止です／お願い致します／お持ち帰りください」>
```

- 行頭は中黒 `・`（全角）
- 1 文 1 ルール、複合文は分解する
- ヘッジ表現（「できれば」「なるべく」「〜していただきたく」）禁止

### 11.2 用例

```
✅ スタジオ内および建物周辺での喫煙は厳禁です。
✅ 土足厳禁です。
✅ ホリゾント内でのご飲食は禁止です。
✅ 搬入搬出はご利用時間内でお願い致します。

❌ できればご遠慮いただきたく思います。
❌ なるべく〜してください。
```

### 11.3 グルーピング

- **場所基準**でまとめる（ハウス / ホリゾント）。重要度別ではない
- 1 グループ 5〜8 ルールが目安。それ以上は分割

### 11.4 適用先

- Phase 1: 料金ページの注意事項（既存 `<ul class="text-list-note">`）はこの文体に揃える
- Phase 2: 機材ページの背景紙オプション説明文も統一
- Phase 3 以降: `horizon.astro` / `policy.astro` の本格再編

---

## 12. アセット配置規約

### 12.1 bundle 同梱物の最終格納先

| Bundle 内パス | Astro 内パス | 移植タイミング |
|---|---|---|
| `project/assets/zebra-stripe.svg` | `astro/public/images/design/zebra-stripe.svg` | Phase 1 着手時 |
| `project/assets/mascot-reservation.webp` | `astro/public/images/mascot/reservation.webp` | Phase 3 着手時 |
| `project/assets/equipment/*.webp` (24点) | `astro/public/images/rental/*.webp` | Phase 2 着手時 |
| `project/assets/logo-zebra.png` | 既存ロゴと比較後判断 | Phase 1 着手時 |
| `project/assets/logo-zebra-mark.svg` | `astro/public/favicon-mark.svg`（候補） | Phase 3 以降 |

### 12.2 bundle の参考実装は **コピーしない**

- `project/colors_and_type.css` → トークンのみを `variables.css` に追記
- `project/ui_kits/website/website.css` → 必要なクラス定義のみ抽出して新規 `public/styles/global/brand.css` に書く（Phase 1 で新規作成）
- `project/ui_kits/website/*.jsx` → 参考実装。Astro へは `.astro` で再実装

### 12.3 新規 CSS ファイル方針

新ページ専用の共通 CSS は `astro/public/styles/global/brand.css` に集約（次セッション新規作成）。`BaseLayout.astro` で **新ページのみ条件読み込み**する案を検討するか、全ページで読み込んでもセレクタが新ページのみに当たる構造にする（推奨は後者：`.brand-v2 ` プレフィックスで namespace）。

---

## 13. 既存ファイル接触インベントリ

### 13.1 Phase 1-2 で **触れる**ファイル

| ファイル | 変更内容 |
|---|---|
| [../public/styles/global/variables.css](../public/styles/global/variables.css) | 末尾に §3.1 の新トークン追記。既存値は不変 |
| [../src/layouts/BaseLayout.astro](../src/layouts/BaseLayout.astro) | Google Fonts `link` に Zen Maru / M PLUS / DM Sans を追加。新 CSS `brand.css` を遅延読み込み |
| [../src/components/common/PageHeader.astro](../src/components/common/PageHeader.astro) | `pageClass` に応じて新 eyebrow + chunky 見出しに切り替える分岐を追加（要検討、推奨） |
| [../src/pages/price.astro](../src/pages/price.astro) | 全面書き換え（§14 参照） |
| [../src/pages/rental.astro](../src/pages/rental.astro) | 全面書き換え（§15 参照） |
| `public/styles/global/brand.css` | **新規作成**。button/card/badge/eyebrow/zebra-band のクラス定義 |
| `public/images/design/zebra-stripe.svg` | **新規配置**（§12.1） |
| `public/images/rental/*.webp` | **新規配置**（24 点、§8.1） |
| [../src/content/](../src/content/) | rental の equipment 定義に generator/head 情報を追記（要検討） |

### 13.2 Phase 1-2 で **触らない**ファイル

| ファイル | 理由 |
|---|---|
| [../src/components/Header.astro](../src/components/Header.astro) | 共通シェル据え置き |
| [../src/components/Footer.astro](../src/components/Footer.astro) | 共通シェル据え置き |
| [../public/styles/common.css](../public/styles/common.css) | 旧ページ用 |
| [../public/styles/shared.css](../public/styles/shared.css) | 旧ページ用 |
| [../public/styles/index.css](../public/styles/index.css) | 旧ページ用 |
| [../public/styles/global.css](../public/styles/global.css) | 旧ページ用 |
| [../public/styles/global/lead-section.css](../public/styles/global/lead-section.css) | 旧 #lead セクション用。新ページでは参照しない |
| 他ページ群 (`index.astro`, `studio.astro`, `access.astro`, `faq.astro`, `horizon.astro`, `reservation.astro`, `policy.astro`, `blog/`, `news/`) | Phase 3 以降 |

---

## 14. 適用ガイド: price.astro

### 14.1 参考実装

[/tmp/design-extract/design-system/project/ui_kits/website/PriceBoard.jsx](/tmp/design-extract/design-system/project/ui_kits/website/PriceBoard.jsx)

### 14.2 セクション構成と章マッピング

| # | セクション | DOM 構造（概略） | 参照章 |
|---|---|---|---|
| 0 | PageHeader | eyebrow `PRICE` + 大見出し「料金のご案内」 | §6.4, §4.3 |
| 1 | 「機材使い放題」バナー | 黒地カード + 右上ゼブラ縞透かし + 赤丸ピル「機材使い放題」 + 「機材は使い放題。」コピー（"使い放題" を `--brand-mint`） | §3.1, §6.5, §6.3 |
| 2 | 通常帯セクション H3 | 黒ピル「通常帯」+ 「基本料金（8:00〜23:00）」+ 右に英字 `DAYTIME` | §6.3, §6.4 |
| 3 | 通常帯カード 2 列 | grid `1.15fr 0.85fr`<br>左 (10名以下): card-pop, 赤ピル, 価格 40px en bold<br>右 (11名以上): card-soft, グレーピル, 価格 30px en bold | §6.2, §6.3, §4.3 |
| 4 | 深夜帯セクション H3 | 紺ピル「深夜帯」+ 「23:00〜翌8:00」+ 補足「通常料金の 50%UP」 | §6.4 |
| 5 | 深夜帯カード（行レイアウト） | card-soft 内に 2 行（10名以下 / 11名以上）。各行: 左に絵文字 🌙 + 範囲、右に価格 24px en | §6.2 |
| 6 | 最低利用時間 + 追加料金 2 列 | grid `1fr 1fr`, それぞれ card-soft（パディング 20px）。リスト各項目は `--paper-1` 背景の薄い行 | §6.2, §6.3 |
| 7 | キャンセル料セクション | 既存 dl 構造を踏襲。card-soft 1 枚にまとめる。表頭は `--font-display` 700 | §6.2 |

### 14.3 削除・廃止する旧要素

- `.wow.fadeInUp` / `.wow.fadeInLeft` / `.wow.fadeInRight` クラス（§9.3）
- `<img src="/img/price/bnr_price_main.webp">` 等の **PNG/WebP バナー画像** — テキスト + CSS で再構築
- `<img src="/img/price/bnr_price_EquipmentInsurance.webp">` の機材保険セクション — テキスト + バッジで再構築（保険文面は維持）
- `<font size="6">` レガシータグ
- `#lead` セクション全体（旧 lead-section.css 依存を切る）

### 14.4 PageHeader の扱い

[../src/components/common/PageHeader.astro](../src/components/common/PageHeader.astro) は他ページでも使われているため壊さないこと。次のいずれか:

- **推奨 A**: PageHeader に `variant="v2"` プロップを追加し、Phase 1-2 ページからのみ渡す。v2 では eyebrow pill + chunky 見出し
- **代替 B**: PageHeader をバイパスし、price.astro 内に直接ヒーローを書く

A の方が他ページとの一貫性管理が楽。

### 14.5 必要な追加データ

- 「機材使い放題」の対象機材は §15 機材ページにリンク（`<a href="/rental/">`）
- ワークショップ加算 +¥2,200・グリッター加算 +¥2,200 のコピーは既存維持（§11 のルール文体に揃える）
- 注意事項リスト 4 項目（深夜帯・ゴミ回収・機材持ち込み・HMI）は §11 文体で書き直し

### 14.6 アクセシビリティ

- 価格カードの主要数字 (40px) は `aria-label="¥5,500（税込）"` 等を補う
- 通常帯と深夜帯のセクション区切りは `<section aria-labelledby>` で読み上げ可能に
- 色だけで「強調 / 控えめ」を伝えていないか確認（フォントサイズと位置でも階層をつける）

---

## 15. 適用ガイド: rental.astro

### 15.1 参考実装

[/tmp/design-extract/design-system/project/ui_kits/website/RentalPage.jsx](/tmp/design-extract/design-system/project/ui_kits/website/RentalPage.jsx)

### 15.2 セクション構成と章マッピング

| # | セクション | DOM 構造（概略） | 参照章 |
|---|---|---|---|
| 0 | ヒーロー | 黒地 + 大きいゼブラ縞透かし + eyebrow 白半透明 `RENTAL EQUIPMENT` + 大見出し「機材は、使い放題。」（"使い放題" を mint + italic） + 下端 zebra-band | §6.4, §6.5, §3.1 |
| 1 | 01 ストロボ・ジェネレーター | 2 カラム grid `1.15fr 1fr`<br>左: card-pop に `generator.webp` + 黒帯ラベル `FULL STROBE LINEUP / 3 GENERATORS · 7 HEADS`<br>右: `--paper-2` スペックパネル（COMET 3 機種リスト + CB-25H ヘッド帯ミント + シンクロコード等ピル） | §6.2, §6.3, §3.1 |
| 2 | 02 ライティング機材 | 3 列 × 2 段 / 6 項目 (octa, rect-softbox, umbrella, reflector, grid, radioslave) | §6.2 (photo card) |
| 3 | 03 スタンド・グリップ | 5 列 / 5 項目 (stand, autopole, weight, clamp, extension-cord) | §6.2 |
| 4 | 04 スタジオ備品 | 4 列 × 3 段 / 11 項目 (stepladder, tripod, minitable, wood-table, chair, stool, hangerrack-mirror, applebox, wagon, blower, speaker) | §6.2 |
| 5 | 05 別途料金オプション | 白カード + 赤左ボーダー 6px + danger バッジ「別途料金」 + 「背景紙」コピー + 問い合わせリンク（mint underline） | §6.2, §6.3, §11 |
| 6 | 下部 CTA | 黒地 pop ブロック + ゼブラ縞透かし + eyebrow `READY TO SHOOT?` + 「機材も場所も、まるごと使い倒そう。」+ primary button「ご予約はこちら →」 | §6.1, §6.5 |

### 15.3 セクションヘッダー共通

各章は `SectionHeader` 相当:

```html
<div class="section-header">
  <span class="section-num">01</span>
  <h2 class="t-h2">ストロボ・ジェネレーター</h2>
  <span class="label-en">STROBE / GENERATOR</span>
</div>
```

- `section-num`: `--font-en`, 12px, 700, `color: var(--brand-red)`, letter-spacing 0.16em
- `label-en`: 右寄せ、`--font-en`, 10px, `color: var(--ink-3)`

### 15.4 PhotoCard 共通

```
card-soft
├ <div> aspect 4/3, 背景画像 cover
└ <div> padding 10-12px
    ├ name (font-body 800, 13-14px)
    └ sub (12px, --ink-3, 余白 3px top)
```

### 15.5 既存 `消耗品（有料）` セクションの扱い

現状 rental.astro 末尾に背景紙・トレーシングペーパー・ユポ・タフニール・ケント紙の dl 一覧があります。新デザインでは:

- **推奨**: §15.2 の「05 別途料金オプション」に統合。背景紙のみ独立カード化し、残りはアコーディオン or 別ページに移す
- 既存テーブル構造を温存したい場合は、card-soft 1 枚で囲って §11 文体に揃える

判断は次セッションでユーザーに確認。

### 15.6 既存データ (`src/content/rental/equipment.json`) との関係

現状の `getEntry('rental', 'equipment')` の構造を確認し、新ページで必要なフィールド（`image`, `name`, `sub`, `category`）に拡張。`category` で 02-04 のセクション分けが可能になる。

### 15.7 削除・廃止する旧要素

- `.wow.fadeInUp` クラス（§9.3）
- `<img src="/img/rental/btn_dowload.webp">` 等の PNG ボタン画像 — `.btn-secondary` で再構築
- ダウンロード PDF セクション（`#download-flie`、タイポも含む）は維持するが、ボタンを CSS 化

---

## 16. 未確定事項 (Open Questions)

次セッション以降でユーザーに確認すべき項目です。本書を更新する形で順次クローズしてください。

1. **ロゴ書体**: `Zen Maru Gothic Black` は近似代替。原ロゴの書体ファイル/ベクターデータの提供可否。
2. **Brand red の最終仕様**: `#E84A3D` は bundle で PNG ボタン画像からサンプリングした値。印刷物との連携がある場合の Pantone 指定の有無。
3. **旧 `--color-accent #FF463C` と新 `--brand-red #E84A3D` の統合時期**: 共存はサイト全体新デザイン化完了まで。完了基準と削除タイミング。
4. **機材写真の最終ライブラリ**: bundle 同梱 24 点で十分か、追加撮影・差し替えが必要か（特にストロボ本体・ヘッド単体写真）。
5. **マスコット**: 他ポーズ（waving / ありがとう / またね）を作るか。固定予約ボタンとの統合タイミング。
6. **DM Sans のサブセット**: latin のみで OK か、英字以外（特殊記号）も含めるか。
7. **Lucide 導入時期**: npm パッケージ追加 vs SVG 個別配置の判断。既存 PNG ナビとの併存期間。
8. **rental.astro の消耗品セクション再編方針**（§15.5）。
9. **PageHeader の v2 分岐方針**（§14.4 案 A vs B）。
10. **新 CSS のスコープ分離手段**: namespace prefix (`.brand-v2`) vs ページ単位の条件読み込み（§12.3）。

---

## 17. ロールアウト計画

| Phase | ページ / 範囲 | ゴール | タイミング |
|---|---|---|---|
| **1** | `price.astro` | 料金表を card-pop + zebra-band で再構成。注意事項を §11 文体に統一 | **直近** |
| **2** | `rental.astro` | 機材グリッドを chunky photo card 化。背景紙オプションを danger card 分離 | **直近** |
| 3 | `studio.astro` | ヒーロー刷新・3 reasons パターン適用（赤・ミント・黒の 3 カード） | 保留 (TBD) |
| 4 | `index.astro` | トップ再設計（Hero / News / CTA） | 保留 (TBD) |
| 5 | `access.astro` / `faq.astro` / `horizon.astro` | eyebrow + RuleList 統一 | 保留 (TBD) |
| 6 | `reservation.astro` | BookingCalendar / BookingForm 再構築 | 保留 (TBD) |
| 7 | `policy.astro` / `blog/` / `news/` | テキスト密度高ページへの最小適用 | 保留 (TBD) |
| 共通 | `Header.astro` / `Footer.astro` | Lucide 化・新トークン化・マスコット CTA 統合 | 保留 (TBD) |
| 共通 | 旧トークン廃止 | `--color-*` の段階削除、`--brand-*` への移行完了 | 全ページ移行後 |

各 Phase の完了基準は次のとおり:

- 該当ページで `--brand-*` / `--paper-*` トークンが正しく適用されている
- スクロールアニメーション (`.wow.*`) が当該ページから消えている
- PNG バナー画像が CSS / テキスト + バッジに置き換わっている
- §11 ルール文体が適用されている（該当する場合）
- Lighthouse パフォーマンス 90+（CLAUDE.md §6 と整合）

---

## 付録 A: 次セッションで最初に読むべきファイル

実装エージェントへの動線:

1. 本書（[design-system.md](design-system.md)）を §0〜§5 まで通読
2. [/tmp/design-extract/design-system/project/ui_kits/website/PriceBoard.jsx](/tmp/design-extract/design-system/project/ui_kits/website/PriceBoard.jsx) を読み、§14 のマッピング表と照合
3. [../src/pages/price.astro](../src/pages/price.astro) の現状を確認
4. [../public/styles/global/variables.css](../public/styles/global/variables.css) に §3.1 のトークンを追記
5. `public/styles/global/brand.css` を新規作成（§6 のコンポーネントクラスを定義）
6. `public/images/design/zebra-stripe.svg` を bundle から配置
7. `price.astro` を §14.2 のセクション順に書き換え
8. 動作確認 → Phase 1 完了
9. 同じ流れで Phase 2 (rental.astro) へ

---

**変更履歴**

- 2026-05-15: 初版作成。Claude Design bundle v1 を一次資料として採用。
