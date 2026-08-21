<template>
  <div class="p-search">

    <!-- 検索アイコン -->
    <button
      class="p-search__trigger"
      type="button"
      @click="openSearch"
    >
      <i class="fas fa-search"></i>
    </button>

    <!-- 検索パネル -->
    <div
      class="p-search__panel"
      :class="{ 'is-active': isOpen }"
    >

      <form
        class="p-search__form"
        role="search"
        method="get"
        action="/"
      >

        <input
          v-model="keyword"
          type="search"
          name="s"
          placeholder="SEARCH"
        >

        <button type="submit">
          <i class="fas fa-search"></i>
        </button>

      </form>

      <!-- 閉じる -->
      <button
        class="p-search__close"
        type="button"
        @click="closeSearch"
      >
        ×
      </button>

    </div>

  </div>
</template>

<script setup>
import { ref } from 'vue'

const isOpen = ref(false)
const keyword = ref('')

const openSearch = () => {
  isOpen.value = true
}

const closeSearch = () => {
  isOpen.value = false
}
</script>

<style lang="scss" scoped>
.p-search {
    .fa-search {
        font-size: 30px;
        display: flex;
        align-items: center;
        height: 48px;
    }
    &__trigger {
        border: none;
        background: none;
        cursor: pointer;
        font-size: 20px;
    }
  &__panel {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px;
    background: #000;
    z-index: 100;
    transform: translateY(-100%);
    transition: transform 0.2s ease;
    @media (max-width: 767px) {
        height: clamp(60px, 8vw, 80px);
    }
    &.is-active {
      transform: translateY(0);
    }
  }
  &__form {
    display: flex;
    align-items: center;
    width: 80%;
    height: 100%;
    max-width: 1000px;
    margin: 0 auto;
    padding: 30px 0;
    @media (max-width: 767px) {
      width: 70%;
      transform: translateX(-25px);
    }
    input {
      flex: 1;
      border: none;
      background: transparent;
      color: #fff;
      font-size: clamp(20px, 2.4vw, 24px);
      border-bottom: 1px solid #fff;
      outline: none;
      &::placeholder {
        color: #666;
        letter-spacing: 0.01em;
      }
    }
    button {
      border: none;
      background: none;
      color: #fff;
      cursor: pointer;
      font-size: 20px;
    }
  }
  &__close {
    position: absolute;
    top: 50%;
    right: 30px;
    transform: translateY(-50%);
    border: none;
    background: none;
    color: #fff;
    font-size: 32px;
    cursor: pointer;
    @media (max-width: 767px) {
      right: 10px;
      font-size: 24px;
    }
  }
}
</style>