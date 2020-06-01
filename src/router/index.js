import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import FirstItem from '../views/firstItem.vue'
import SecondItem from '../views/secondItem.vue'
import ThirdItem from '../views/thirdItem.vue'
import FourthItem from '../views/fourthItem.vue'
import FifthItem from '../views/fifthItem.vue'
import SixthItem from '../views/sixthItem.vue'
import SeventhItem from '../views/seventhItem.vue'
import EightItem from '../views/eightItem.vue'
import NinethItem from '../views/ninethItem.vue'
import TenthItem from '../views/tenthItem.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/firstItem',
    name: 'FirstItem',
    component: FirstItem
  },
  {
    path: '/secondItem',
    name: 'SecondtItem',
    component: SecondItem
  },
  {
    path: '/thirdItem',
    name: 'ThirdItem',
    component: ThirdItem
  },
  {
    path: '/fourthItem',
    name: 'FourthItem',
    component: FourthItem
  },
  {
    path: '/fifthItem',
    name: 'FifthItem',
    component: FifthItem
  },
  {
    path: '/sixthItem',
    name: 'SixItem',
    component: SixthItem
  },
  {
    path: '/seventhItem',
    name: 'SeventhItem',
    component: SeventhItem
  },
  {
    path: '/eightItem',
    name: 'EightItem',
    component: EightItem
  },
  {
    path: '/ninethItem',
    name: 'NinethItem',
    component: NinethItem
  },
  {
    path: '/tenthItem',
    name: 'TenthItem',
    component: TenthItem
  },

]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
