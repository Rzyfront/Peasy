import { defineStore } from 'pinia'
import { API } from '@/utils/api'

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
        const response = await axios.post('/api/login', credentials)
        const { token, user } = response.data

        // Almacena el token de acceso de forma segura
        localStorage.setItem('accessToken', token)

        // Actualiza el estado de autenticación y los datos del usuario
        this.isAuthenticated = true
        this.user = user
      } catch (error) {
        console.error('Error al iniciar sesión:', error)
        // Maneja el error de forma adecuada (mostrar mensaje al usuario, etc.)
      }
    },
    async register(userData) {
      try {
        const response = await axios.post('/api/register', userData)
        const { token, user } = response.data

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

        const response = await axios.get('/api/me', {
          headers: {
            Authorization: `Bearer ${token}`
          }
        })
        const { user } = response.data

        // Actualiza el estado de autenticación y los datos del usuario
        this.isAuthenticated = true
        this.user = user

        return true
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
