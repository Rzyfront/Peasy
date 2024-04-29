<script setup>
//Components
import Sidebar from '@/components/AppComponents/SidebarComponent.vue'

// const SidebarMode = ref(false)
</script>

<template>
  <div class="w-[100%] h-[100vh] flex bg-color6">
    <!-- Sidebar -->
    <Sidebar />
    <!-- App -->
    <div class="flex flex-col w-[100%] h-[100%]">
      <div class="w-[100%] h-[110px] p-5">
        <div class="shadow-section p-1 h-[100%] rounded-lg bg-color1 border-color2 flex gap-2">
          <div class="avatar w-[60px]">
            <div class="w-18 mask mask-squircle">
              <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
            </div>
          </div>
          <div class="flex flex-col justify-end">
            <p class="text-sm font-medium">Usuario: Lucas Marín</p>
            <p class="text-sm flex items-center font-medium">
              Estado: Online
              <span class="loading loading-ring loading-md text-color3"></span>
            </p>
            <p class="text-sm">Ultima conexion: Ayer / 28/04/2024</p>
          </div>
        </div>
      </div>
      <slot></slot>
    </div>
  </div>
</template>

<style scoped></style>
