import { createRouter, createWebHistory } from 'vue-router'
import { useAuthStore } from '/src/stores/auth'

import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/RegisterView.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import('../views/DashboardView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/booking',
      name: 'booking',
      component: () => import('../views/BookingView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/pos',
      name: 'pos',
      component: () => import('../views/PosView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/expenses',
      name: 'expenses',
      component: () => import('../views/ExpensesView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/task',
      name: 'task',
      component: () => import('../views/TaskView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/reports',
      name: 'reports',
      component: () => import('../views/ReportsView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/help',
      name: 'help',
      component: () => import('../views/HelpView.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/settings',
      name: 'settings',
      component: () => import('../views/SettingsView.vue'),
      meta: { requiresAuth: true }
    }
  ]
})

router.beforeEach(async (to, from, next) => {
  const authStore = useAuthStore()

  if (to.path === '/home') {
    next('/')
    return
  }

  // Verificar si la ruta requiere autenticación
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    // Verificar el acceso
    const isAuthenticated = await authStore.checkAccess()
    if (isAuthenticated) {
      // Si está autenticado, permite acceder a la ruta
      next()
    } else {
      // Si no está autenticado, redirige a la página de inicio de sesión
      next({ name: 'login' })
    }
  } else {
    // Si la ruta no requiere autenticación, permite acceder a la ruta
    next()
  }
})

export default router
