import rss from '@astrojs/rss';
import { getCollection } from 'astro:content';

export async function GET(context) {
  const news = await getCollection('news');

  return rss({
    title: 'スタジオゼブラ NEWS',
    description: 'スタジオゼブラからのお知らせです',
    site: context.site,
    items: news
      .sort((a, b) => b.data.pubDate.valueOf() - a.data.pubDate.valueOf())
      .map((item) => ({
        title: item.data.title,
        description: item.data.description,
        pubDate: item.data.pubDate,
        link: `/news/${item.slug}/`,
        categories: [item.data.category],
        author: item.data.author,
      })),
    customData: `<language>ja</language>`,
  });
}
