import { defineCollection, z } from 'astro:content';

const blog = defineCollection({
  type: 'content',
  schema: z.object({
    title: z.string(),
    description: z.string(),
    pubDate: z.coerce.date(),
    updatedDate: z.coerce.date().optional(),
    author: z.string().default('スタジオゼブラ'),
    category: z.string(),
    image: z.string().optional(),
    tags: z.array(z.string()).default([]),
  }),
});

const news = defineCollection({
  type: 'content',
  schema: z.object({
    title: z.string(),
    description: z.string(),
    pubDate: z.coerce.date(),
    updatedDate: z.coerce.date().optional(),
    author: z.string().default('スタジオゼブラ'),
    category: z.string(),
    image: z.string().optional(),
  }),
});

const studio = defineCollection({
  type: 'data',
  schema: z.object({
    popups: z.array(z.object({
      id: z.string(), // 'A', 'B', 'C', 'D', 'E', 'F'
      images: z.array(z.object({
        src: z.string(),
        alt: z.string(),
      }))
    })),
    gallery: z.array(z.object({
      main: z.string(),
      thumbnail: z.string(),
      alt: z.string(),
    })),
  }),
});

const rental = defineCollection({
  type: 'data',
  schema: z.object({
    items: z.array(z.object({
      image: z.string(),
      text: z.string(),
    })),
  }),
});

const faq = defineCollection({
  type: 'data',
  schema: z.object({
    categories: z.array(z.object({
      title: z.string(),
      questions: z.array(z.object({
        question: z.string(),
        answer: z.string(),
      })),
    })),
  }),
});

const slides = defineCollection({
  type: 'data',
  schema: z.object({
    slides: z.array(z.object({
      imagePC: z.string(),
      imageSP: z.string(),
      alt: z.string(),
    })),
  }),
});

export const collections = { blog, news, studio, rental, faq, slides };
