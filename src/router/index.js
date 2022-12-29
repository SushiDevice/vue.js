import { createRouter, createWebHistory } from 'vue-router'
//import HomeView from '../views/HomeView.vue'
import CrearTorneo from '../components/CrearTorneo.vue'
import NewList from '../components/NewList.vue'
import MainPage from '../components/MainPage.vue'
import LogIn from '../components/LogIn.vue'
import TorneoPhase1 from '../components/TorneoPhase1.vue'
import MisTorneos from  '../components/MisTorneos.vue'
import EditarTorneo from '../components/EditarTorneo.vue'
import EnviarAqui from '../components/EnviarAqui.vue'
import TorneosUn from '../views/TorneosUn.vue'
import NewTeams from '../components/NewTeams.vue'


const routes = [

  /*{
    path: '/',
    name: 'home',
    component: HomeView
  },*/

  {
    path: '/creartorneo',
    name: 'CrearTorneo',
    component: CrearTorneo
  },
  {
    path: '/newteams',
    name: 'NewTeams',
    component: NewTeams
  },
  {
    path: '/enviaraqui',
    name: 'EnviarAqui',
    component: EnviarAqui
  },
  {
    path: '/editartorneo/:id',
    name: 'EditarTorneo',
    component: EditarTorneo
  },

  {
    path: '/mistorneos',
    name: 'MisTorneos',
    component: MisTorneos
  },
  {
    path: '/torneosun/:id?',
    name: 'TorneosUn',
    component: TorneosUn 
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
    path: '/torneophase1',
    name: 'TorneoPhase1',
    component: TorneoPhase1
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
