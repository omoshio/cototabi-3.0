/* Vueコンポーネントをまとめて使う場合
import { createApp } from 'vue'
import App from './App.vue'

createApp(App).mount('#App')*/

import { createApp } from 'vue'
import Hello from './components/Hello.vue'
import Slider from './components/Slider.vue'
import Tabs from './components/Tabs.vue'
import Menu from './components/Menu.vue'
import Search from './components/Search.vue'

// Hello
const helloEl = document.querySelector('#Hello')
if (helloEl) {
  createApp(Hello).mount(helloEl)
}

// Slider
const sliderEl = document.querySelector('#Slider')
if (sliderEl) {
  createApp(Slider).mount(sliderEl)
}

// Tabs
const tabsEl = document.querySelector('#Tabs')
if (tabsEl) {
  createApp(Tabs).mount(tabsEl)
}

// Menu
const menu = document.getElementById('Menu')
if (menu) {
  createApp(Menu, {
    isFrontPage: menu.dataset.frontPage === 'true'
  }).mount(menu)
}

// Search
const searchEl = document.querySelector('#Search')
if (searchEl) {
  createApp(Search).mount(searchEl)
}