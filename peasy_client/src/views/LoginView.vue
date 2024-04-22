<script setup>
import { ref } from 'vue'
import { useAuthStore } from '/src/stores/auth'
//Components
import CardComponent from '@/components/AppComponents/CardComponent.vue'
import router from '@/router'

//Options
import { PASSWORD_FIELD_TYPE } from '@/options/RegisterOptions'

const useStore = useAuthStore()

//Scripts
const data_login = ref({
  email: '',
  password: ''
})

const error_tooltips = ref({
  email: false,
  username: false,
  password: false,
  password_confirm: false
})

const inputPasswordType = ref(PASSWORD_FIELD_TYPE.hide)

const onLogin = () => {
  if (data_login.value.email === '') {
    error_tooltips.value.email = true
  } else {
    error_tooltips.value.email = false
  }
  if (data_login.value.password === '') {
    error_tooltips.value.password = true
  } else {
    error_tooltips.value.password = false
  }
  if (!error_tooltips.value.email && !error_tooltips.value.password) {
    const response = useStore.login({
      email: data_login.value.email,
      password: data_login.value.password
    })
    console.log(response)
  }
}
</script>

<template>
  <div class="w-[100%] h-[100vh] flex justify-center items-center relative">
    <div class="w-[100%] h-[100vh] flex justify-center items-center">
      <CardComponent :CustomClass="'flex flex-col gap-5 relative h-[450px]'">
        <div class="h-[20%] absolute flex justify-center items-center">
          <div
            @click="router.replace('/')"
            class="flex justify-center items-center gap-2 p-5 hover:drop-shadow-lg duration-100 group"
          >
            <v-icon name="bi-arrow-left-circle-fill" scale="1.5" class="group-hover:fill-color3" />
            <p class="font-semibold duration-100">Volver</p>
          </div>
        </div>
        <div class="w-100 h-[20%] flex justify-center items-center">
          <h3 class="text-4xl font-bold drop-shadow-lg">Login</h3>
        </div>
        <form class="w-100 h-[80%] flex flex-col justify-start items-center gap-2">
          <div
            class="tooltip tooltip-accent tooltip-right"
            :class="error_tooltips.email ? 'tooltip-open tooltip-error' : ''"
            data-tip="Es necesario ingresar tu correo"
          >
            <label class="input input-bordered flex items-center gap-2 w-80 bg-color1">
              <v-icon name="md-email" />
              <input
                type="text"
                class="grow"
                placeholder="Correo"
                autocomplete="email"
                v-model="data_login.email"
              />
            </label>
          </div>

          <div
            class="tooltip tooltip-accent tooltip-right"
            :class="error_tooltips.password ? 'tooltip-open tooltip-error' : ''"
            data-tip="Es necesario una contraseña"
          >
            <label class="input input-bordered flex items-center gap-2 w-80 bg-color1">
              <div class="tooltip tooltip-accent" data-tip="Mostrar u ocultar contraseña">
                <v-icon
                  v-if="inputPasswordType === PASSWORD_FIELD_TYPE.show"
                  name="ri-eye-fill"
                  class="cursor-pointer"
                  @click="inputPasswordType = PASSWORD_FIELD_TYPE.hide"
                />
                <v-icon
                  v-else
                  name="ri-eye-close-line"
                  class="cursor-pointer"
                  @click="inputPasswordType = PASSWORD_FIELD_TYPE.show"
                />
              </div>
              <input
                :type="inputPasswordType"
                class="grow"
                autocomplete="current-password"
                placeholder="Contraseña"
                v-model="data_login.password"
              />
            </label>
          </div>

          <div class="w-80 flex flex-col gap-1">
            <button
              @click="onLogin"
              type="button"
              class="btn w-80 outline-none border-none bg-color2 hover:bg-color3 hover:text-color2"
            >
              Login
            </button>
            <button
              class="btn w-80 outline-none border-color5 hover:border-none text-color2 bg-color1 hover:bg-color3 hover:text-color2"
            >
              Ingresar con Google <v-icon name="fc-google" />
            </button>
          </div>
          <small class="w-80 text-center"
            >Si aun no tienes cuenta puedes registrarte rapidamente haciendo
            <span
              @click="router.replace('/register')"
              class="font-bold hover:text-color3 cursor-pointer"
              >click aqui<v-icon name="bi-arrow-right" class="pt-1" /></span
          ></small>
        </form>
      </CardComponent>
    </div>
  </div>
</template>

<style scoped></style>
