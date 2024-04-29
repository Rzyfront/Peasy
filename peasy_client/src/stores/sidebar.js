import { defineStore } from 'pinia'
import { SIDEBARTYPE } from '@/options/AppOptions'

export const useSidebarStore = defineStore('sidebar', {
  state: () => ({
    mode: SIDEBARTYPE.show
  }),
  actions: {
    changeMode(newMode) {
      this.mode = newMode
    }
  },
  getters: {
    currentMode: (state) => state.mode
  }
})
