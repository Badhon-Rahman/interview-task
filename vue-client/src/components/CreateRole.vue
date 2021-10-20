<template>
  <div class="createRole">
    <nav class="navbar navbar-light bg-light">
        <button style="float: left;"><router-link to="/create/role">Create Role</router-link></button>
        <button style="float: left;"><router-link to="/assign/role">Assign Role</router-link></button>
        <button style="float: left;"><router-link to="/delete/role">Delete Role</router-link></button>
        <button style="float: right;"><router-link to="/user/list">User List</router-link></button>
        <button style="float: right;"><router-link to="/user/profile">Profile</router-link></button>
        <button style="float: right;"><router-link to="/logout">Logout</router-link></button>
        <br>
        <br>
        <br>
    </nav>
    <h1>Create Role</h1>
    <hr>
    <form @submit.prevent="createRole">
        <div class="form-group">
          <input type="text" v-model="formValues.name" class="form-control" id="name" placeholder="Full Name">
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
   name: 'CreateRole',

  data () {
    return {
      formValues: {
        name : ''
      }
    }
  },
  methods: {
    createRole () {
      UrlService.createRole(this.formValues).then((response) => {
        if(response.data == 1){
          window.alert('Role Created Successfully');
          window.location.href = RouteService.getDashboard();
        }
        else{
          window.alert('Role Create Failed. Try again later.');
          window.location.href = RouteService.getDashboard();
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
  .createRole{
    height: auto;
    width: auto;
    padding: 5%;
    display: block;
    justify-content: center;
    background-color: gainsboro;
  }
</style>
