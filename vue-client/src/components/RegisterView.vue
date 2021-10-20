<template>
  <div class="registerForm">
      <h1>Register</h1>
      <form @submit.prevent="register">
         <div class="form-group">
          <input type="text" v-model="formValues.name" class="form-control" id="name" placeholder="Full Name">
          <br>
        </div>
        <div class="form-group">
          <input type="text" v-model="formValues.email" class="form-control" id="email" placeholder="Email address">
          <br>
        </div>
        <div class="form-group">
          <input type="password" v-model="formValues.password" class="form-control" id="password" placeholder="Password">
          <br>
        </div>
        <div class="form-group">
          <input type="password" v-model="formValues.password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
          <br>
        </div>
        <div class="form-group">
          <input type="text" v-model="formValues.mobile" class="form-control" id="mobile" placeholder="Mobile number">
          <br>
        </div>
        <div class="" style="float:right; padding: 10px;">
            <button type="submit">Submit</button>
        </div>
    </form>
  </div>

</template>

<script>
import UrlService from '../service/UrlService.js'
import RouteService from '../service/RouteService.js';

export default {
   name: 'RegisterView',

  data () {
    return {
      formValues: {
        name : '',
        email: '',
        password: '',
        password_confirmation: '',
        mobile: ''
      }
    }
  },
  methods: {
    register () {
      UrlService.getRegister(this.formValues).then((response) => {
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
  .registerForm{
    height: auto;
    width: auto;
    padding: 5%;
    display: block;
    justify-content: center;
    background-color: gainsboro;
  }
</style>
