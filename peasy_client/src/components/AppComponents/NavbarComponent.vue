<script setup>
//Utils
import { RouterLink } from 'vue-router'

//Images
import PeasyLogoHorizontal from '@/assets/images/peasyhorizontallogonobg.png'
</script>

<template>
  <nav
    class="fixed top-0 left-0 w-[100%] h-[90px] px-7 py-2 shadowhover flex justify-between items-center gap-10"
  >
    <RouterLink to="/" class="w-[210px] h-[50px]">
      <img :src="PeasyLogoHorizontal" alt="Peasy Image" class="w-[100%] h-[100%]" />
    </RouterLink>

    <div class="flex justify-between w-[100%] items-center">
      <div class="flex gap-10 items-center">
        <RouterLink
          to="/"
          class="font-medium text-color2 border-b-2 border-transparent hover:border-color2 transition duration-150 ease-in-out"
        >
          Planes
        </RouterLink>
        <RouterLink
          to="/"
          class="font-medium text-color2 border-b-2 border-transparent hover:border-color2 transition duration-150 ease-in-out"
        >
          Simular
        </RouterLink>
        <RouterLink
          to="/"
          class="font-medium text-color2 border-b-2 border-transparent hover:border-color2 transition duration-150 ease-in-out"
        >
          ¿Tienes dudas?
        </RouterLink>
        <RouterLink
          to="/"
          class="font-medium text-color2 border-b-2 border-transparent hover:border-color2 transition duration-150 ease-in-out"
        >
          Acerca de Peasy Hotels
        </RouterLink>
      </div>

      <div class="flex gap-10 items-center">
        <RouterLink
          to="/"
          class="font-medium text-neutral-50 border-b-2 border-transparent hover:border-neutral-50 transition duration-150 ease-in-out"
        >
          Login
        </RouterLink>
        <RouterLink to="/" class="btn-bordered-light"> Register </RouterLink>
      </div>
    </div>
  </nav>
</template>

<style scoped></style>
