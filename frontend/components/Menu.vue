<template>
  <div class="p-menu">
      <button
        class="p-menu__trigger"
        :class="{ 'js-is-scrolled': isScrolled }"
        type="button"
        @click="toggleMenu"
      >
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav
      class="p-menu__nav"
      :class="{ 'is-active': isOpen }"
    >

      <ul class="p-menu__list --banglaMN">
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_about'">ABOUT</a>
        </li>
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_work'">WORK</a>
        </li>
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_service'">SERVICE</a>
        </li>
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_blog'">BLOG</a>
        </li>
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_instagram'">Instagram</a>
        </li>
        <li class="p-menu__item">
          <a :href="homeUrl + '#ac_contact'">CONTACT</a>
        </li>
      </ul>

      <button
        class="p-menu__close"
        type="button"
        @click="closeMenu"
      >
        ×
      </button>

      <ul class="p-menu__sns">
          <li>
              <a href="https://www.facebook.com/osamu.moshio.9" target="_blank" class="c-facebook-icon">
                  <i class="fa-brands fa-facebook fa-2x"></i>
              </a>
          </li>
          <li>
              <a href="https://x.com/cototabi_design" target="_blank" class="c-x-icon">
                  <i class="fa-brands fa-x-twitter fa-2x"></i>
              </a>
          </li>
      </ul>

    </nav>
  </div>
</template>

<script setup>
const menuElement = document.getElementById('Menu')
const homeUrl = menuElement?.dataset.homeUrl || '/'

import { ref, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  isFrontPage: {
    type: Boolean,
    default: false
  }
})

const isOpen = ref(false)
const isScrolled = ref(false)

const toggleMenu = () => {
  isOpen.value = !isOpen.value
}

const closeMenu = () => {
  isOpen.value = false
}

const handleScroll = () => {
  if (!props.isFrontPage) return

  isScrolled.value = window.scrollY > 500
}

const handleClickOutside = (event) => {
  const nav = document.querySelector('.p-menu__nav')
  const trigger = document.querySelector('.p-menu__trigger')

  if (
    isOpen.value &&
    nav &&
    trigger &&
    !nav.contains(event.target) &&
    !trigger.contains(event.target)
  ) {
    closeMenu()
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  document.addEventListener('click', handleClickOutside)

  handleScroll()
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
  document.removeEventListener('click', handleClickOutside)
})
</script>

<style lang="scss" scoped>
.js-is-scrolled {
  position: fixed;
  top: clamp(20px, 4vw, 40px);
  right: clamp(20px, 4vw, 40px);
  z-index: 10;
  opacity: 1;
  animation: menuFadeIn 600ms ease forwards;
}
@keyframes menuFadeIn {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.p-menu {
  position: relative;
  &__trigger {
      display: block;
      width: 48px;
      height: 48px;
      cursor: pointer;
      z-index: 10;
      transition: opacity 600ms ease,transform 600ms ease;
  }
  span {
    display: block;
    width: 48px;
    height: 5px;
    background-color: #fff;
    border-radius: 5px;
    position: absolute;
    box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, 0.3);
    z-index: 10;
    &:first-of-type {
      top: 4px;
    }
    &:nth-of-type(2) {
      top: 20px;
    }
    &:nth-of-type(3) {
      top: 36px;
    } 
  }
  &__nav {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: -100vw;
    width: 43%;
    height: 100%;
    z-index: 11;
    transition: left 0.4s;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: center;
    @media (max-width: 767px) {
      width: 75%;
    }
    &.is-active {
      left: 0;
    }
  }
  &__item {
    font-size: clamp(20px, 2.4vw, 24px);
    text-align: center;
    margin-bottom: clamp(20px, 4vw, 40px);
  }
  &__close {
    display: block;
    text-align: center;
    font-size: clamp(48px, 6.4vw, 64px);
    color: #ddd;
    margin-inline: auto;
    line-height: 1;
    cursor: pointer;
  }
  &__sns {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: clamp(25px, 5vw, 50px);
    margin-top: clamp(20px, 4vw, 40px);
  }
}
</style>