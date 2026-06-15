import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const projects = defineCollection({
  loader: glob({ pattern: '**/[^_]*.{md,mdx}', base: "./src/content/projects" }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    date: z.coerce.date(),
    category: z.string(),
    cover_image: z.string(),
    featured: z.boolean().optional().default(false),
    is_video: z.boolean().optional().default(false),
    link: z.string().optional(),
    reference_link: z.string().optional(),
    tags: z.array(z.string()).optional().default([]),
  }),
});

export const collections = { projects };
