import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  server: {
    // respond to all network requests (same as '0.0.0.0')
    host: true,
    // we need a strict port to match on PHP side
    strictPort: true,
    port: 5173,
    hmr: {
      protocol: 'wss',
      host: `${process.env.DDEV_HOSTNAME}`,
    },
  },
})
