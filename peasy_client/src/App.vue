<script setup>
// Utils
import { ref, watchEffect } from 'vue'
import { RouterView, useRoute } from 'vue-router'
// Components
import NavbarComponent from './components/AppComponents/NavbarComponent.vue'

// Scripts
const route = useRoute()
const showNavbar = ref(true)
const hideNavbarRoutes = ['/login', '/register']

watchEffect(() => {
  //Si incluye las rutas devuelve true pero como queremos que sea hide si las encuentra lo cambiamos
  showNavbar.value = !hideNavbarRoutes.includes(route.path)
})
</script>

<template>
  <div class="App w-[100%] h-[100vh] flex justify-center items-center">
    <NavbarComponent v-if="showNavbar" />
    <RouterView />
  </div>
</template>

<style scoped></style>
