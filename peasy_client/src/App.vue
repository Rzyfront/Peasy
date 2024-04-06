<script setup>
import { RouterView } from 'vue-router'
import NavbarComponent from './components/NavbarComponent.vue';
</script>

<template>
    <div class="App
    w-[100%]
    h-[100vh]
    flex
    justify-center
    items-center
    ">
      <NavbarComponent/>
      <RouterView />
    </div>
</template>

<style scoped>

</style>
