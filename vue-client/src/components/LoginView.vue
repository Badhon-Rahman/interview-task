<template>
  <div class="loginForm">
      <h1 class="loginForm">login</h1>
      <form @submit.prevent="CreateContact">
        <div class="form-group">
          <input type="text" v-model="formValues.email" class="form-control" id="email" placeholder="Email address">
          <br>
        </div>
        <div class="form-group">
          <input type="password" v-model="formValues.password" class="form-control" id="password" placeholder="Password">
          <br>
        </div>
        <div class="" style="float:right; padding: 10px;">
            <button type="submit">Login</button>
        </div>
    </form>
  </div>

</template>

<script>
import UrlService from '../service/UrlService.js'
import RouteService from '../service/RouteService.js';

export default {
  name: 'LoginView',

  data () {
    return {
      loginStatus: 0,
      formValues: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    CreateContact () {
      UrlService.getLogin(this.formValues).then((response) => {
        if(response.data == 1){
          window.location.href = RouteService.getDashboard();
        }
        else{
          loginStatus = 0;
        }
      })
      .catch((error) => {
        console.log(error)
      })
    }
  }

}
</script>

<style>
  .loginForm{
    height: auto;
    width: auto;
    padding: 5%;
    display: block;
    justify-content: center;
    background-color: gainsboro;
  }
</style>
