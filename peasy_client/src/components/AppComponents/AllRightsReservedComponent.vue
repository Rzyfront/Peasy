<script setup>
//Utils
import { defineProps } from 'vue'

//Images
import PeasyMiniLogoDark from '@/assets/images/peasylogonobg.png'
import PeasyMiniLogoLight from '@/assets/images/peasylogonobglight.png'

//Options
import { COLOR_MODE } from '@/options/AppOptions'

//Script
const props = defineProps({
  CustomClass: {
    type: String,
    default: ''
  },
  ColorMode: {
    type: String,
    default: COLOR_MODE.Light
  }
})
</script>

<template>
  <div
    v-if="ColorMode === COLOR_MODE.Light"
    class="w-[200px] h-[90px] absolute bottom-0 left-0 flex pb-1"
    :class="props.CustomClass"
  >
    <img :src="PeasyMiniLogoDark" alt="Peasy Logo" width="90" class="drop-shadow-lg" />
    <div
      class="flex flex-col justify-center items-start text-sm font-extrabold text-color2 drop-shadow-lg"
    >
      <p class="drop-shadow-lg">All</p>
      <p class="drop-shadow-lg">Right</p>
      <p class="drop-shadow-lg">Reserved</p>
    </div>
  </div>
  <div
    v-if="ColorMode === COLOR_MODE.Dark"
    class="w-[200px] h-[90px] absolute bottom-0 left-0 flex pb-1"
    :class="props.CustomClass"
  >
    <img :src="PeasyMiniLogoLight" alt="Peasy Logo" width="90" class="drop-shadow-lg" />
    <div
      class="flex flex-col justify-center items-start text-sm font-extrabold text-color1 drop-shadow-lg"
    >
      <p class="drop-shadow-lg">All</p>
      <p class="drop-shadow-lg">Right</p>
      <p class="drop-shadow-lg">Reserved</p>
    </div>
  </div>
</template>

<style scoped></style>
