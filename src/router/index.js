import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import AboutUs from '@/pages/about-us/about-us'
import FirstVisit from '@/pages/first-visit/first-visit'
import Treatments from '@/pages/treatments/treatments'
import Community from '@/pages/community/community'
import Contact from '@/pages/contact/contact'
import Styleguide from '@/pages/styleguide/styleguide'
import PageNotFound from '@/pages/404/404'
import scrollBehavior from '@/shared/functionality/scroll-behavior'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      navigation: true,
      component: Home
    },
    {
      path: '/about-us',
      name: 'About Us',
      navigation: true,
      component: AboutUs
    },
    {
      path: '/first-visit',
      name: 'First Visit',
      navigation: true,
      component: FirstVisit
    },
    {
      path: '/treatments',
      name: 'Treatments',
      navigation: true,
      component: Treatments
    },
    {
      path: '/community',
      name: 'Community',
      navigation: true,
      component: Community
    },
    {
      path: '/contact',
      name: 'Contact',
      navigation: true,
      component: Contact
    },
    {
      path: '/styleguide',
      name: 'Styleguide',
      navigation: false,
      component: Styleguide
    },
    {
      path: '/*',
      name: '404',
      navigation: false,
      component: PageNotFound
    }
  ],
  scrollBehavior
})

export default router
