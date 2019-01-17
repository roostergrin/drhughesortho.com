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
      component: Home,
      video: '/static/HomeVideo.mp4'
    },
    {
      path: '/about-us',
      name: 'About Us',
      navigation: true,
      component: AboutUs,
      image: '/static/AboutHero.jpg'
    },
    {
      path: '/first-visit',
      name: 'First Visit',
      navigation: true,
      component: FirstVisit,
      video: '/static/FirstVisitVideo.mp4'
    },
    {
      path: '/treatments',
      name: 'Treatments',
      navigation: true,
      component: Treatments,
      image: '/static/TreatmentsHero.jpg'
    },
    {
      path: '/community',
      name: 'Our Community',
      navigation: true,
      component: Community,
      image: '/static/OurCommunityHero.jpg'
    },
    {
      path: '/contact',
      name: 'Contact',
      navigation: true,
      component: Contact,
      image: '/static/ContactHero.jpg'
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
