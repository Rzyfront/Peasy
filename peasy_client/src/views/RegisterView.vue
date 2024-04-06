<script setup>
//Utils

//Options
import { REGISTER_TYPE } from '@/options/RegisterOptions'

//Components
import RegisterComplete from '@/components/ViewComponents/RegisterComponents/RegisterComplete.vue'
import RegisterFast from '@/components/ViewComponents/RegisterComponents/RegisterFast.vue'

//Script
let RegisterType = REGISTER_TYPE.Fast
</script>

<template>
  <div class="w-[100%] h-[100vh] flex justify-center items-center">
    <RegisterFast v-if="(RegisterType = REGISTER_TYPE.Fast)" />
    <RegisterComplete v-if="(RegisterType = REGISTER_TYPE.Complete)" />
  </div>
</template>

<style scoped></style>
