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
  <div class="rounded-xl bg-color1 border-color2" :class="props.CustomClass">
    <slot />
  </div>
</template>

<style scoped></style>
