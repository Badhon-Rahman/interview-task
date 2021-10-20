import Vue from 'vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import VueRouter from 'vue-router'
import App from './App.vue'
import Home from './components/Home.vue'
import GuestView from './components/GuestView.vue'
import LoginPageView from './components/LoginView.vue'
import RegisterView from './components/RegisterView.vue'
import UserList from './components/UserList.vue'
import UserProfile from './components/UserProfile.vue'
import CreateRole from './components/CreateRole.vue'
import AssignRole from './components/AssignRole.vue'
import DeleteRole from './components/DeleteRole.vue'
import Logout from './components/Logout.vue'

Vue.config.productionTip = true

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: GuestView },
    { path: '/dashboard', component: Home },
    { path: '/login', component: LoginPageView },
    { path: '/register', component: RegisterView },
    { path: '/user/list', component: UserList },
    { path: '/user/profile', component: UserProfile },
    { path: '/create/role', component: CreateRole },
    { path: '/assign/role', component: AssignRole },
    { path: '/delete/role', component: DeleteRole },
    { path: '/logout', component: Logout }
  ]
})

new Vue({
  el: '#app',
  router,
  render: h => h(App)
}).$mount('#app')
