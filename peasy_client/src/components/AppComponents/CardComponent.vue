<script setup>
//Utils
import { defineProps } from 'vue'

//Script
const props = defineProps({
  CustomClass: {
    type: String,
    default: ''
  }
})
</script>

<template>
  <div
    class="w-[500px] h-[500px] rounded-xl bg-color1 shadow-2xl border-color2 hover:shadow-4xl"
    :class="props.CustomClass"
  >
    <slot />
  </div>
</template>

<style scoped></style>
