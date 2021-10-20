import Vue from 'vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import VueRouter from 'vue-router'
import App from './App.vue'
import Home from './components/Home.vue'
// import LoginPage from './components/LoginPage.vue'
// import Register from './components/Register.vue'
import GuestView from './components/GuestView.vue'
import LoginPageView from './components/LoginView.vue'
import RegisterView from './components/RegisterView.vue'

Vue.config.productionTip = true

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: GuestView },
    { path: '/dashboard', component: Home },
    { path: '/login', component: LoginPageView },
    { path: '/register', component: RegisterView }
  ]
})

new Vue({
  el: '#app',
  router,
  render: h => h(App)
}).$mount('#app')
