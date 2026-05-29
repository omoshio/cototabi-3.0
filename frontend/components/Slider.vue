<template>
  <div class="slide-wrap">
    <vue3-marquee
      v-if="images.length"
      :pause-on-hover="false"
      :duration="60"
      :clone="true"
    >
      <div
        class="slide-item"
        v-for="img in images"
        :key="img.id"
      >
        <a :href="img.permalink" class="slide-link" target="_blank" rel="noopener noreferrer">
            <img :src="img.media_url" alt="" />
            <div class="slide-overlay">
              <span class="slide-icon">
                Instagram
              </span>
            </div>
        </a>
      </div>
    </vue3-marquee>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Vue3Marquee } from 'vue3-marquee'

const images = ref([])

onMounted(async () => {
  try {
    const base = import.meta.env.VITE_API_BASE

    const response = await fetch(
      `${base}/wp-json/custom/v1/instagram`
    )

    console.log('ENV:', import.meta.env)

    const data = await response.json()

    images.value = data.data.filter(item =>
      item.media_type === 'IMAGE' ||
      item.media_type === 'CAROUSEL_ALBUM'
    )

  } catch (error) {
    console.error('Instagram fetch error:', error)
  }
})
</script>

<style scoped>
.slide-wrap {
  overflow: hidden;
}

.slide-item img {
  width: 280px;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  display: block;
}

.slide-item {
  width: 280px;
}

.slide-link {
  position: relative;
  display: block;
  overflow: hidden;
}

.slide-link img {
  width: 100%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  display: block;
  transition: transform .4s;
}

/* hoverで少しズーム */
.slide-link:hover img {
  transform: scale(1.05);
}

/* オーバーレイ */
.slide-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.4);

  display: flex;
  align-items: center;
  justify-content: center;

  opacity: 0;
  transition: opacity .3s;
}

/* hover時だけ表示 */
.slide-link:hover .slide-overlay {
  opacity: 1;
}

.slide-icon {
  color: #fff;
  font-size: 14px;
  letter-spacing: .08em;
}
</style>