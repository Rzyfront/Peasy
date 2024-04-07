<script setup>
//Utils
import { ref } from 'vue'
//Options
import { REGISTER_TYPE } from '@/options/RegisterOptions'
import { COLOR_MODE } from '@/options/AppOptions'

//Components
import RegisterComplete from '@/components/ViewComponents/RegisterComponents/RegisterComplete.vue'
import RegisterFast from '@/components/ViewComponents/RegisterComponents/RegisterFast.vue'
import AllRightsReservedComponent from '@/components/AppComponents/AllRightsReservedComponent.vue'

//Script
let RegisterType = ref(REGISTER_TYPE.Fast)

const hanldeRegisterType = (type) => {
  RegisterType.value = type
}
</script>

<template>
  <div class="w-[100%] h-[100vh] flex justify-center items-center relative">
    <RegisterFast
      v-if="RegisterType === REGISTER_TYPE.Fast"
      @hanldeRegisterType="hanldeRegisterType"
    />
    <RegisterComplete v-if="RegisterType === REGISTER_TYPE.Complete" />
    <AllRightsReservedComponent :ColorMode="COLOR_MODE.Light"></AllRightsReservedComponent>
  </div>
</template>

<style scoped></style>
