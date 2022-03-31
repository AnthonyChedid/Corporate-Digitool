import Vue from 'vue'
import VueRouter from 'vue-router'
//import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import ToDos from '../components/ToDo.vue'

Vue.use(VueRouter)

const routes = [

  {
    path: '/about',
    name: 'about',
    component: AboutView
  },
  {
    path: '/',
    name: 'home',
    component: ToDos
  }
]

const router = new VueRouter({
  routes
})

export default router
