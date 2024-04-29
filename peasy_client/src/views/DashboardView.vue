<script setup>
//Layout
import AppLayaout from '@/components/Layaouts/AppLayaout.vue'

//Component
import CardComponent from '@/components/AppComponents/CardComponent.vue'
//Scripts
const chartOptions1 = {
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

const VentasOptions = {
  chart: {
    type: 'area',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },

  labels: [
    '2023-04-22',
    '2023-04-23',
    '2023-04-24',
    '2023-04-25',
    '2023-04-26',
    '2023-04-27',
    '2023-04-28',
    '2023-04-29',
    '2023-04-30',
    '2023-05-01',
    '2023-05-02',
    '2023-05-03',
    '2023-05-04',
    '2023-05-05'
  ],
  xaxis: {
    type: 'datetime',
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  yaxis: {
    opposite: false,
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  legend: {
    horizontalAlign: 'left'
  }
}

const VentasSeries = [
  {
    name: 'STOCK ABC',
    data: [
      40000, 35000, 22500, 62500, 12000, 22500, 12500, 38000, 32000, 12000, 5000, 15000, 6000, 27000
    ]
  }
]

const GastosOptions = {
  chart: {
    type: 'area',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },

  labels: [
    '2023-04-22',
    '2023-04-23',
    '2023-04-24',
    '2023-04-25',
    '2023-04-26',
    '2023-04-27',
    '2023-04-28',
    '2023-04-29',
    '2023-04-30',
    '2023-05-01',
    '2023-05-02',
    '2023-05-03',
    '2023-05-04',
    '2023-05-05'
  ],
  xaxis: {
    type: 'datetime',
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  yaxis: {
    opposite: false,
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  legend: {
    horizontalAlign: 'left'
  }
}

const GastosSeries = [
  {
    name: 'STOCK ABC',
    data: [500, 1000, 17000, 0, 1000, 2000, 1000, 500, 0, 0, 0, 1000, 1000, 3000]
  }
]

const GananciasOptions = {
  chart: {
    type: 'area',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },

  labels: [
    '2023-04-22',
    '2023-04-23',
    '2023-04-24',
    '2023-04-25',
    '2023-04-26',
    '2023-04-27',
    '2023-04-28',
    '2023-04-29',
    '2023-04-30',
    '2023-05-01',
    '2023-05-02',
    '2023-05-03',
    '2023-05-04',
    '2023-05-05'
  ],
  xaxis: {
    type: 'datetime',
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  yaxis: {
    opposite: false,
    labels: {
      show: false // Oculta las etiquetas del eje Y
    }
  },
  legend: {
    horizontalAlign: 'left'
  }
}

const GananciasSeries = [
  {
    name: 'STOCK ABC',
    data: [39500, 21500, 45500, 12000, 21500, 10500, 37000, 31500, 12000, 0, 15000, 16000, 5000, 0]
  }
]

const FuentesOptions = {
  chart: {
    width: 50,
    type: 'pie'
  },
  labels: ['Reservas', 'Venta', 'Otras funtes'],
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }
  ]
}

const FuentesSeries = [76, 16, 4]

const ReservasOptions = {
  chart: {
    width: 50,
    type: 'polarArea'
  },
  labels: ['Confirmadas', 'Canceladas', 'Reagendadas'],
  stroke: {
    colors: ['#fff']
  },
  fill: {
    opacity: 1
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }
  ]
}

const ReservasSeries = [12, 4, 8]
</script>

<template>
  <AppLayaout>
    <div class="w-[100%] h-[100vh] flex flex-col justify-start items-center z-10 px-5">
      <div class="flex gap-5 w-[100%]">
        <CardComponent
          :CustomClass="'flex flex-col gap-2 relative w-[33%] h-[250px] shadow-section rounded-lg'"
        >
          <div
            class="w-100 h-[60px] p-5 flex justify-center items-center gap-2 absolute bg-color1 z-10 shadow-section rounded-lg"
          >
            <div
              class="shadow-section-lg absolute top-[-5px] left-[-5px] w-[60px] h-[60px] bg-color3hover rounded-md flex justify-center items-center"
            >
              <v-icon name="gi-receive-money" scale="1.5" fill="#ffffff" />
            </div>
            <h4 class="text-xl font-bold pl-[50px]">Ventas:</h4>
            <p class="text-xl font-bold">$245.000</p>
          </div>
          <div class="w-[100%] h-[50%] relative">
            <apexchart type="area" :options="VentasOptions" :series="VentasSeries"></apexchart>
          </div>
        </CardComponent>
        <CardComponent
          :CustomClass="'flex flex-col gap-2 relative w-[33%] h-[250px] shadow-section rounded-lg'"
        >
          <div
            class="w-100 h-[60px] p-5 flex justify-center items-center gap-2 absolute bg-color1 z-10 shadow-section rounded-lg"
          >
            <div
              class="shadow-section-lg absolute top-[-5px] left-[-5px] w-[60px] h-[60px] bg-color_danger rounded-md flex justify-center items-center"
            >
              <v-icon name="gi-receive-money" scale="1.5" fill="#ffffff" />
            </div>
            <h4 class="text-xl font-bold pl-[50px]">Gatos:</h4>
            <p class="text-xl font-bold">$25.500</p>
          </div>
          <div class="w-[100%] h-[50%] relative">
            <apexchart type="area" :options="GastosOptions" :series="GastosSeries"></apexchart>
          </div>
        </CardComponent>
        <CardComponent
          :CustomClass="'flex flex-col gap-2 relative w-[33%] h-[250px] shadow-section rounded-lg'"
        >
          <div
            class="w-100 h-[60px] p-5 flex justify-center items-center gap-2 absolute bg-color1 z-10 shadow-section rounded-lg"
          >
            <div
              class="shadow-section-lg absolute top-[-5px] left-[-5px] w-[60px] h-[60px] bg-color3 rounded-md flex justify-center items-center"
            >
              <v-icon name="gi-receive-money" scale="1.5" fill="#ffffff" />
            </div>
            <h4 class="text-xl font-bold pl-[50px]">Ganancias:</h4>
            <p class="text-xl font-bold">$219.500</p>
          </div>
          <div class="w-[100%] h-[50%] relative">
            <apexchart
              type="area"
              :options="GananciasOptions"
              :series="GananciasSeries"
            ></apexchart>
          </div>
        </CardComponent>
      </div>
      <div class="flex w-[100%] h-[100%] py-5">
        <div class="w-[100%] h-[100%] bg-color1 rounded-lg shadow-section flex">
          <div class="w-[30%] border-r-2 flex justify-center items-center">
            <apexchart type="pie" :options="FuentesOptions" :series="FuentesSeries"></apexchart>
          </div>
          <div class="w-[40%] flex items-center justify-center">
            <div class="overflow-hidden">
              <table class="table table-sm">
                <!-- head -->
                <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- row 1 -->
                  <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Blue</td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <th>2</th>
                    <td>Hart Hagerty</td>
                    <td>Desktop Support Technician</td>
                    <td>Purple</td>
                  </tr>
                  <!-- row 3 -->

                  <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Blue</td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <th>2</th>
                    <td>Hart Hagerty</td>
                    <td>Desktop Support Technician</td>
                    <td>Purple</td>
                  </tr>
                  <!-- row 3 -->
                  <tr>
                    <th>3</th>
                    <td>Brice Swyre</td>
                    <td>Tax Accountant</td>
                    <td>Red</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="w-[30%] border-l-2 flex justify-center items-center">
            <apexchart
              type="polarArea"
              :options="ReservasOptions"
              :series="ReservasSeries"
            ></apexchart>
          </div>
        </div>
      </div>
      <!-- <apexchart type="bar" :options="chartOptions" :series="chartOptions.series"></apexchart> -->
    </div>
  </AppLayaout>
</template>

<style scoped></style>
