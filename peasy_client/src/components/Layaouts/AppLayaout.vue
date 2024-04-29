<script setup>
//Components
import Sidebar from '@/components/AppComponents/SidebarComponent.vue'

// const SidebarMode = ref(false)
</script>

<template>
  <div class="w-[100%] h-[100vh] bg-color-white flex">
    <!-- Sidebar -->
    <Sidebar />
    <!-- App -->
    <slot></slot>
  </div>
</template>

<style scoped></style>
