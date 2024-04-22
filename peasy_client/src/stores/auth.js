import { defineStore } from 'pinia'
import { API } from '@/utils/api'
import router from '@/router'
//Doc:
// ESTE ES EL STORE DE AUTENTICACION, AQUI PODRAS ENCONTRAR LOS METODOS NECESARIOS PARA AUTENTICAR USUARIOS
// ESTOS HACE USO DE "API" UNA FUCION CUSTOM PARA REAIZAR PETICIONES HTTP.

export const useAuthStore = defineStore('auth', {
  state: () => {
    return {
      isAuthenticated: false,
      user: null
    }
  },
  actions: {
    async login(credentials) {
      try {
        const response = await API('login', 'POST', credentials)
        const { token, user } = response

        // Almacena el token de acceso de forma segura
        localStorage.setItem('accessToken', token)

        // Actualiza el estado de autenticación y los datos del usuario
        this.isAuthenticated = true
        this.user = user

        router.replace('/dashboard')
      } catch (error) {
        console.error('Error al iniciar sesión:', error)
        // Maneja el error de forma adecuada (mostrar mensaje al usuario, etc.)
      }
    },
    async register(userData) {
      try {
        const response = await API('register', 'POST', userData)
        const { token, user } = response

        // Almacena el token de acceso de forma segura
        localStorage.setItem('accessToken', token)

        // Actualiza el estado de autenticación y los datos del usuario
        this.isAuthenticated = true
        this.user = user
      } catch (error) {
        console.error('Error al registrarse:', error)
        // Maneja el error de forma adecuada (mostrar mensaje al usuario, etc.)
      }
    },
    async checkAccess() {
      try {
        const token = localStorage.getItem('accessToken')
        if (!token) {
          return false
        }
        const response = await API(
          'check_access',
          'GET',
          {},
          {
            Authorization: `Bearer ${token}`
          }
        )

        const { user } = response

        // Actualiza el estado de autenticación y los datos del usuario
        if (user) {
          this.isAuthenticated = true
          this.user = user
          return true
        }
      } catch (error) {
        if (error.response && error.response.status === 401) {
          // El token ha caducado o es inválido, cierra la sesión
          this.logout()
          return false
        }

        console.error('Error al verificar el acceso:', error)
        return false
      }
    },
    logout() {
      // Elimina el token de acceso del almacenamiento seguro
      localStorage.removeItem('accessToken')

      // Restablece el estado de autenticación y los datos del usuario
      this.isAuthenticated = false
      this.user = null
    }
  },
  getters: {
    currentUser: (state) => state.user
  }
})
