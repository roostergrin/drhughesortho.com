import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
// const AboutUs = () => import(/* webpackChunkName: "group" */ '@/pages/about-us/about-us')
import AboutUs from '@/pages/about-us/about-us'
import FirstVisit from '@/pages/first-visit/first-visit'
import Treatments from '@/pages/treatments/treatments'
import Community from '@/pages/community/community'
import Contact from '@/pages/contact/contact'
import ThankYou from '@/pages/thank-you/thank-you'
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
      video: '/static/HomeVideo.mp4',
      meta: {
        tagline: 'Smiles, Inside and Out ',
        short: false,
        appointment: true
      }
    },
    {
      path: '/about-us',
      name: 'About Us',
      navigation: true,
      component: AboutUs,
      image: 'https://d1t5yf0cbfi8hu.cloudfront.net/HeroAboutUs.jpg',
      meta: {
        tagline: 'About Us',
        short: true
      }
    },
    {
      path: '/first-visit',
      name: 'New Patients',
      navigation: true,
      component: FirstVisit,
      video: '/static/FirstVisitVideo.mp4',
      meta: {
        tagline: 'New Patients',
        short: false,
        appointment: true
      }
    },
    {
      path: '/treatments',
      name: 'Treatments',
      navigation: true,
      component: Treatments,
      image: 'https://d1t5yf0cbfi8hu.cloudfront.net/HeroTreatments.jpg',
      meta: {
        tagline: 'Treatments',
        short: true,
        appointment: true
      }
    },
    {
      path: '/community',
      name: 'Our Community',
      navigation: true,
      component: Community,
      image: 'https://d1t5yf0cbfi8hu.cloudfront.net/HeroCommunity.jpg',
      meta: {
        tagline: 'Our Community',
        short: true,
        appointment: true
      }
    },
    {
      path: '/contact',
      name: 'Contact',
      navigation: true,
      component: Contact,
      image: 'https://d1t5yf0cbfi8hu.cloudfront.net/HeroContact.jpg',
      meta: {
        tagline: 'Contact',
        short: true
      }
    },
    {
      path: '/thank-you',
      name: 'About Us',
      navigation: false,
      component: ThankYou,
      image: 'https://d1t5yf0cbfi8hu.cloudfront.net/HeroContact.jpg',
      meta: {
        tagline: 'Thank You',
        short: true
      }
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
