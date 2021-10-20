<template>
  <div>
    <h1>Dashboard</h1>
    <nav class="navbar navbar-light bg-light">
      <button style="float: left;"><router-link to="/">Create Role</router-link></button>
      <button style="float: left;"><router-link to="/">Delete Role</router-link></button>
      <button style="float: right;"><router-link to="/login">User List</router-link></button>
      <button style="float: right;"><router-link to="/register">Profile</router-link></button>
      <button style="float: right;"><router-link to="/register">Logout</router-link></button>
    </nav>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>