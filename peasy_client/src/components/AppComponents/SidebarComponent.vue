<script setup>
//utils
import { ref } from 'vue'
import { RouterLink } from 'vue-router'
import { useAuthStore } from '/src/stores/auth'
import { useSidebarStore } from '/src/stores/sidebar'

//Images
import PeasyLogo_lg from '@/assets/images/peasyhorizontallogonobg.png'
import PeasyLogo_sm from '@/assets/images/peasylogonobg.png'

//Options
import { SIDEBARTYPE } from '@/options/AppOptions'

//Script
const useStore = useAuthStore()
const useSidebar = useSidebarStore()

const MenuList = [
  {
    label: 'Dashboard',
    icon: 'md-dashboard-outlined',
    path: '/dashboard'
  },
  {
    label: 'Reservas',
    icon: 'la-calendar-day-solid',
    path: '/booking'
  },
  {
    label: 'Punto de venta',
    icon: 'fa-cash-register',
    path: '/pos'
  },
  {
    label: 'Gastos',
    icon: 'gi-cash',
    path: '/expenses'
  },
  {
    label: 'Tareas',
    icon: 'gi-vacuum-cleaner',
    path: '/task'
  },
  {
    label: 'Reportes',
    icon: 'co-graph',
    path: '/reports'
  },
  {
    label: 'Ayuda',
    icon: 'md-helpcenter-round',
    path: '/help'
  },
  {
    label: 'Configuracion',
    icon: 'io-settings-sharp',
    path: '/settings'
  }
]

const handleLogout = () => {
  useStore.logout()
}

const handled = ref(false)

const handleSidebar = (src) => {
  if (src === 1) {
    handled.value = true
    useSidebar.changeMode(SIDEBARTYPE.extend)
  } else if (src === 2) {
    handled.value = false
    useSidebar.changeMode(SIDEBARTYPE.show)
  }
}
</script>

<template>
  <!-- Defaul -->
  <div
    v-if="useSidebar.mode === SIDEBARTYPE.show"
    class="w-[80px] h-[100vh] py-5 px-2 flex flex-col bg-white shadow-section z-20"
  >
    <!-- Logo group -->
    <div
      class="w-[100%] h-[60px] flex justify-center items-center mb-20 flex-none relative tooltip tooltip-right"
      @click="handleSidebar(1)"
      data-tip="Extender menú"
    >
      <!-- Image -->
      <img class="cursor-pointer" :src="PeasyLogo_sm" alt="Logo peasy grande" width="60px" />
      <!-- Icon -->
      <v-icon name="md-keyboardarrowright-outlined" scale="2" class="absolute top-2 right-11" />
    </div>

    <!-- List menu -->
    <div class="flex-none">
      <ul class="list-none">
        <li
          v-for="(item, index) in MenuList"
          :key="index"
          class="py-2 hover:hover-item cursor-pointer"
        >
          <RouterLink
            :to="item.path"
            class="flex justify-center items-center gap-2 w-[100%] h-[100%] tooltip tooltip-right"
            :data-tip="item.label"
          >
            <v-icon :name="item.icon" scale="1.2" class="" />
          </RouterLink>
        </li>
      </ul>
    </div>
    <div class="w-[100%] flex-1 flex flex-col justify-end">
      <div class="w-[100%] py-2 hover:hover-danger cursor-pointer" @click="handleLogout">
        <div class="w-100 flex justify-center items-center">
          <v-icon name="gi-exit-door" scale="1.5" class="" fill="#ee2222" />
        </div>
      </div>
    </div>
  </div>
  <!-- Extend -->
  <div
    v-if="useSidebar.mode === SIDEBARTYPE.extend"
    class="w-[240px] h-[100vh] p-5 flex flex-col bg-white shadow-section z-20"
  >
    <!-- Logo group -->
    <div class="w-[100%] h-[50px] flex mb-20 flex-none">
      <!-- Icon -->
      <div
        class="w-[20%] flex justify-center items-center cursor-pointer tooltip tooltip-right"
        @click="handleSidebar(2)"
        data-tip="Contraer menú"
      >
        <v-icon name="md-menuopen-round" scale="2" class="" />
      </div>
      <!-- Image -->
      <div class="w-[80%] flex items-center">
        <RouterLink to="/dashboard" class="flex items-center">
          <img class="cursor-pointer" :src="PeasyLogo_lg" alt="Logo peasy grande" width="80%" />
        </RouterLink>
      </div>
    </div>

    <!-- List menu -->
    <div class="w-[100%] flex-none">
      <ul class="list-none">
        <li
          v-for="(item, index) in MenuList"
          :key="index"
          class="w-100% py-2 hover:hover-item cursor-pointer"
        >
          <RouterLink :to="item.path" class="flex gap-2 w-[100%] h-[100%]">
            <div class="w-[20%] flex justify-center items-center">
              <v-icon :name="item.icon" scale="1.2" class="" />
            </div>
            <div class="w-[80%]">
              <h6>{{ item.label }}</h6>
            </div>
          </RouterLink>
        </li>
      </ul>
    </div>
    <div class="w-[100%] flex-1 flex flex-col justify-end">
      <div
        class="w-[100%] py-2 hover:hover-danger cursor-pointer tooltip tooltip-top"
        @click="handleLogout"
        data-tip="Salir"
      >
        <div class="flex gap-2">
          <div class="w-[20%] flex justify-center items-center">
            <v-icon name="gi-exit-door" scale="1.5" fill="#ee2222" />
          </div>
          <div class="w-[80%]">
            <h6 class="text-color_danger text-left">Cerrar sesión</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Animation */
.scale-up-hor-left {
  -webkit-animation: scale-up-hor-left 0.3s cubic-bezier(0.39, 0.575, 0.565, 1) both;
  animation: scale-up-hor-left 0.3s cubic-bezier(0.39, 0.575, 0.565, 1) both;
}

.scale-down-hor-left {
  -webkit-animation: scale-down-hor-left 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  animation: scale-down-hor-left 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

/* ----------------------------------------------
 * Generated by Animista on 2024-4-27 23:48:16
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation scale-up-hor-left
 * ----------------------------------------
 */
@-webkit-keyframes scale-up-hor-left {
  0% {
    -webkit-transform: scaleX(0.4);
    transform: scaleX(0.4);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
  100% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
}
@keyframes scale-up-hor-left {
  0% {
    -webkit-transform: scaleX(0.4);
    transform: scaleX(0.4);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
  100% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
}

/* ----------------------------------------------
 * Generated by Animista on 2024-4-28 0:48:2
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation scale-down-hor-left
 * ----------------------------------------
 */
@-webkit-keyframes scale-down-hor-left {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
  100% {
    -webkit-transform: scaleX(0.3);
    transform: scaleX(0.3);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
}
@keyframes scale-down-hor-left {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
  100% {
    -webkit-transform: scaleX(0.3);
    transform: scaleX(0.3);
    -webkit-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
  }
}
</style>
