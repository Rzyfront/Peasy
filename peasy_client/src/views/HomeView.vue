<script setup>
//Utils
import { RouterLink } from 'vue-router'

//Images
import hotel3 from '@/assets/images/hotels3.jpg'

//Components

//Languages
import { SPANISH_HOMEVIEW } from '@/assets/Languages/HomeView'
</script>

<template>
  <main class="w-[100%] h-[100vh] flex gap-5 justify-center items-center">
    <div class="w-[55%] h-[100%] flex flex-col justify-around items-center">
      <div class="w-[100%] h-[70%] flex flex-col justify-center items-start p-20 gap-10">
        <div class="w-[90%] flex flex-col gap-4">
          <h2 class="text-4xl font-bold" v-html="SPANISH_HOMEVIEW.Title"></h2>

          <p class="font-normal text-base">
            {{ SPANISH_HOMEVIEW.AditionalText }}
          </p>
        </div>

        <div class="flex flex-col gap-5">
          <RouterLink
            to="/register"
            class="btn-primary flex justify-center items-center w-[300px] h-[50px]"
          >
            {{ SPANISH_HOMEVIEW.ButtoText }}
          </RouterLink>
          <p v-html="SPANISH_HOMEVIEW.SmallText"></p>
        </div>
      </div>
    </div>

    <div class="w-[45%] h-[100%] flex justify-center items-center">
      <img :src="hotel3" alt="Hotel Image" class="w-[100%] h-[100%] overflow-hidden" />
    </div>
  </main>
</template>

<style scoped>
.custom-style-home-card {
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
</style>
