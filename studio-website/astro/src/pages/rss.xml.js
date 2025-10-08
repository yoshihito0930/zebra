import rss from '@astrojs/rss';
import { getCollection } from 'astro:content';

export async function GET(context) {
  const blog = await getCollection('blog');
  const news = await getCollection('news');

  // ブログとニュースを結合して日付順にソート
  const allItems = [...blog, ...news]
    .sort((a, b) => b.data.pubDate.valueOf() - a.data.pubDate.valueOf());

  return rss({
    title: 'スタジオゼブラ | ブログ・ニュース',
    description: '新宿・代々木エリアの白ホリゾント撮影スタジオ、スタジオゼブラのブログとニュース',
    site: context.site,
    items: allItems.map((item) => ({
      title: item.data.title,
      description: item.data.description,
      pubDate: item.data.pubDate,
      link: `/${item.collection}/${item.slug}/`,
      categories: [item.data.category],
      author: item.data.author,
    })),
    customData: `<language>ja</language>`,
  });
}
