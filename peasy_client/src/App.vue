<script setup>
//Untils
import { RouterView } from 'vue-router'
import { useRoute } from 'vue-router'

//Components
import NavbarComponent from './components/AppComponents/NavbarComponent.vue'

//Scripts
const route = useRoute()
const hideNavbarRoutes = ['/login', '/register']
const showNavbar = !hideNavbarRoutes.includes(route.path)
</script>

<template>
  <div class="App w-[100%] h-[100vh] flex justify-center items-center">
    <NavbarComponent v-if="showNavbar" />
    <RouterView />
  </div>
</template>

<style scoped></style>
