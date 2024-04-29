import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

//ApexCharts
import VueApexCharts from 'vue3-apexcharts'
import 'apexcharts'

//Agrego los iconos que se usan en la app para disminur el peso del bundle
import { OhVueIcon, addIcons } from 'oh-vue-icons'
import {
  BiArrowRight,
  FcGoogle,
  BiArrowLeftCircleFill,
  RiEyeFill,
  RiEyeCloseLine,
  MdEmail,
  FaUser,
  FaKey,
  MdMenu,
  MdMenuopenRound,
  MdDashboardOutlined,
  LaCalendarDaySolid,
  IoSettingsSharp,
  FaCashRegister,
  GiCash,
  CoGraph,
  GiVacuumCleaner,
  MdHelpcenterRound,
  GiExitDoor,
  MdKeyboardarrowrightOutlined,
  RiMoneyDollarCircleFill,
  GiReceiveMoney,
  GiPayMoney
} from 'oh-vue-icons/icons'

addIcons(
  BiArrowRight,
  FcGoogle,
  BiArrowLeftCircleFill,
  RiEyeFill,
  RiEyeCloseLine,
  MdEmail,
  FaUser,
  FaKey,
  MdMenu,
  MdMenuopenRound,
  LaCalendarDaySolid,
  MdDashboardOutlined,
  IoSettingsSharp,
  FaCashRegister,
  GiCash,
  CoGraph,
  GiVacuumCleaner,
  MdHelpcenterRound,
  GiExitDoor,
  MdKeyboardarrowrightOutlined,
  RiMoneyDollarCircleFill,
  GiReceiveMoney,
  GiPayMoney
)

const app = createApp(App)
app.use(VueApexCharts)
app.use(createPinia())
app.use(router)

app.component('v-icon', OhVueIcon)
app.mount('#app')
