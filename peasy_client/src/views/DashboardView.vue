<script setup>
import { useAuthStore } from '/src/stores/auth'

const useStore = useAuthStore()
const { first_name, last_name } = useStore.user
</script>

<template>
  <div class="w-[100%] h-[100vh] flex justify-center items-center z-10">
    <h2 class="font-bold text-xl">
      {{ first_name + ' ' + last_name + ' Bienvenido a la App Peasy Hotels' }}
    </h2>
  </div>
</template>

<style scoped></style>
