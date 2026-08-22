import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig(({ command }) => ({
  root: path.resolve(__dirname, 'frontend'),

  // dev時とbuild時で分ける
  base:
    command === 'serve'
      ? '/'
      : '/wp-content/themes/cototabi-3.0/dist/',

  plugins: [vue()],

  publicDir: path.resolve(__dirname, 'frontend/public'),

  server: {
    host: true,
    port: 5173,
    strictPort: true,
    cors: true,
  },

  build: {
    outDir: path.resolve(__dirname, 'dist'),
    emptyOutDir: true,
    manifest: true,

    rollupOptions: {
      input: path.resolve(__dirname, 'frontend/main.js'),
    },
  },
}))