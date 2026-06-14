import { defineConfig } from 'astro/config';
import alpinejs from '@astrojs/alpinejs';

// https://astro.build/config
export default defineConfig({
  site: 'https://akhmami.github.io',
  integrations: [alpinejs()],
});
