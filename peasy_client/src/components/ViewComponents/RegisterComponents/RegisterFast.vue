<script setup>
//Utils
import { ref, defineEmits } from 'vue'

//Components
import CardComponent from '@/components/AppComponents/CardComponent.vue'
import router from '@/router'

//Options
import { REGISTER_TYPE, PASSWORD_FIELD_TYPE } from '@/options/RegisterOptions'

//Scripts
const data_register = ref({
  email: '',
  username: '',
  password: '',
  password_confirm: ''
})

const error_tooltips = ref({
  email: false,
  username: false,
  password: false,
  password_confirm: false
})

const inputPasswordType = ref(PASSWORD_FIELD_TYPE.hide)

// eslint-disable-next-line
const prop = defineProps({
  onHanldeRegisterType: Function
})

const emit = defineEmits('hanldeRegisterType')

const hanldeRegisterType = (type) => {
  emit('hanldeRegisterType', type)
}
const onRegister = () => {
  if (data_register.value.email === '') {
    error_tooltips.value.email = true
  }
  if (data_register.value.username === '') {
    error_tooltips.value.username = true
  }
  if (data_register.value.password === '') {
    error_tooltips.value.password = true
  }
  if (data_register.value.password_confirm === '') {
    error_tooltips.value.password_confirm = true
  }
}
</script>

<template>
  <div class="w-[100%] h-[100vh] flex justify-center items-center">
    <CardComponent
      :CustomClass="'flex flex-col gap-5 relative w-[500px] h-[550px] shadow-2xl hover:shadow-4xl'"
    >
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
        <h3 class="text-4xl font-bold drop-shadow-lg">Registarse</h3>
      </div>
      <div class="w-100 h-[80%] flex flex-col justify-start items-center gap-2">
        <div
          class="tooltip tooltip-accent tooltip-right"
          :class="error_tooltips.email ? 'tooltip-open tooltip-error' : ''"
          data-tip="Es necesario ingresar tu correo"
        >
          <label class="input input-bordered flex items-center gap-2 w-80 bg-color1">
            <v-icon name="md-email" />
            <input type="text" class="grow" placeholder="Correo" v-model="data_register.email" />
          </label>
        </div>
        <div
          class="tooltip tooltip-accent tooltip-right"
          :class="error_tooltips.username ? 'tooltip-open tooltip-error' : ''"
          data-tip="Es necesario crear un usuario"
        >
          <label class="input input-bordered flex items-center gap-2 w-80 bg-color1">
            <v-icon name="fa-user" />
            <input
              type="text"
              class="grow"
              placeholder="Usuario"
              v-model="data_register.username"
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
              placeholder="Contraseña"
              v-model="data_register.password"
            />
          </label>
        </div>
        <div
          class="tooltip tooltip-accent tooltip-right"
          :class="error_tooltips.password_confirm ? 'tooltip-open tooltip-error' : ''"
          data-tip="Es necesario confirmar su contraseña"
        >
          <label class="input input-bordered flex items-center gap-2 w-80 bg-color1">
            <div class="tooltip tooltip-accent" data-tip="Confimela oculta">
              <v-icon name="fa-key" class="cursor-pointer" />
            </div>
            <input
              type="password"
              class="grow"
              placeholder="Repite contraseña"
              v-model="data_register.password_confirm"
            />
          </label>
        </div>
        <div class="w-80 flex flex-col gap-1">
          <button
            @click="onRegister"
            type="button"
            class="btn w-80 outline-none border-none bg-color2 hover:bg-color3 hover:text-color2"
          >
            Registrarse
          </button>
          <button
            class="btn w-80 outline-none border-color5 hover:border-none text-color2 bg-color1 hover:bg-color3 hover:text-color2"
          >
            Resgistrarse con Google <v-icon name="fc-google" />
          </button>
        </div>
        <small class="w-80 text-center"
          >Puedes hacer un resgistro completo para que tu perfil quede configurado
          <span
            @click="hanldeRegisterType(REGISTER_TYPE.Complete)"
            class="font-bold hover:text-color3 cursor-pointer"
            >click aqui para ir <v-icon name="bi-arrow-right" class="pt-1" /></span
        ></small>
      </div>
    </CardComponent>
  </div>
</template>

<style scoped></style>
