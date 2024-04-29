<script setup>
//Layout
import AppLayaout from '@/components/Layaouts/AppLayaout.vue'

//Component
import CardComponent from '@/components/AppComponents/CardComponent.vue'
//Scripts
const chartOptions = {
  chart: {
    type: 'lines'
  },
  series: [
    {
      name: 'Sales',
      data: [120, 60, 35, 20, 49, 90, 110, 61, 45, 40, 79, 200]
    }
  ],
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  }
}
</script>

<template>
  <AppLayaout>
    <div class="w-[100%] h-[100vh] flex flex-col justify-start items-center z-10 bg-color6 p-5">
      <div class="flex gap-5 w-[100%]">
        <CardComponent
          :CustomClass="'flex flex-col gap-2 relative w-[25%] h-[180px] shadow-section'"
        >
          <div class="w-100 h-50 p-5 flex gap-2">
            <v-icon name="gi-receive-money" scale="1.5" />
            <h4 class="text-xl font-bold">Ventas</h4>
          </div>
          <div class="w-[100%] h-[100%]">hola</div>
        </CardComponent>
        <CardComponent
          :CustomClass="'flex flex-col gap-5 relative w-[25%] h-[180px] shadow-section '"
        >
          <div class="w-100 h-50 p-5 flex gap-2">
            <v-icon name="gi-pay-money" scale="1.5" />
            <h4 class="text-xl font-bold">Gatos</h4>
          </div>
          <div></div>
        </CardComponent>
        <CardComponent
          :CustomClass="'flex flex-col gap-5 relative w-[25%] h-[180px] shadow-section'"
        >
          <div class="w-100 h-50 p-5 flex gap-2">
            <v-icon name="ri-money-dollar-circle-fill" scale="1.5" />
            <h4 class="text-xl font-bold">Ganancias</h4>
          </div>
          <div></div>
        </CardComponent>
        <CardComponent
          :CustomClass="'flex flex-col gap-5 relative w-[25%] h-[180px] shadow-section'"
        >
          <div class="w-100 h-50 p-5 flex gap-2">
            <v-icon name="ri-money-dollar-circle-fill" scale="1.5" />
            <h4 class="text-xl font-bold">Ganancias</h4>
          </div>
          <div></div>
        </CardComponent>
      </div>
      <!-- <apexchart type="bar" :options="chartOptions" :series="chartOptions.series"></apexchart> -->
    </div>
  </AppLayaout>
</template>

<style scoped></style>
