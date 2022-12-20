import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CrearTorneo from '../components/CrearTorneo.vue'
import NewList from '../components/NewList.vue'
import MainPage from '../components/MainPage.vue'
import LogIn from '../components/LogIn.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },

  {
    path: '/creartorneo',
    name: 'CrearTorneo',
    component: CrearTorneo
  },

  {
    path: '/login',
    name: 'LogIn',
    component: LogIn
  },  
  {
    path: '/newlist',
    name: 'NewList',
    component: NewList
  },

  {
    path: '/mainpage',
    name: 'MainPage',
    component: MainPage
  },



  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
