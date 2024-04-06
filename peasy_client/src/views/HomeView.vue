<script setup>
import { RouterLink } from 'vue-router'
import hotel3 from '@/assets/images/hotels3.jpg';

</script>

<template>
  <main class="
  w-[100%]
  h-[100vh]
  flex
  gap-5
  justify-center
  items-center
  ">
    <div class="
        w-[55%]
        h-[100%]
        flex
        flex-col
        justify-around
        items-center
      ">


    <div class="
    w-[100%]
    h-[70%]
    flex
    flex-col
    justify-center
    items-start
    p-20
    gap-10
    ">
    <div class="w-[90%] flex flex-col gap-4">

      <h2 class="text-4xl font-bold">
        Con <span class="text-color3 font-bold cursor-pointer hover:text-color3hover">Peasy</span> hotels admistra tus hoteles, glampings, hostales, Apartamentos y todo lo demas <span class="text-color2 font-bold cursor-pointer hover:text-color3hover">Easy Peasy</span>
      </h2>

      <p class="font-normal text-base">
        Olvídese de los procesos manuales y las herramientas desorganizadas. Nuestro software de gestión hotelera integral le ofrece una solución completa para optimizar y agilizar las operaciones de su negocio.
        
      </p>
    </div>
    
    
      <div class="flex flex-col gap-5">
        <RouterLink to="/Login" class="
        btn-primary
        flex
        justify-center
        items-center
        w-[300px]
        h-[50px]
        ">
        Adquirir Peasy Hotels ya!
      </RouterLink>
        <p>
         ¿Necesitas algo mas para decidirte? <span class="text-color3 font-bold cursor-pointer hover:text-color3hover">Pruebalo en el simulador.</span>
        </p>
    </div>
    </div>
    
      </div>
  
    <div class="
    w-[45%]
    h-[100%]
    flex
    justify-center
    items-center
      ">
        <img :src="hotel3" alt="Hotel Image"
        class="
        w-[100%]
        h-[100%]
        overflow-hidden
        "
        >
      </div>
  </main>
</template>

<style scoped>

.custom-style-home-card{
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
</style>