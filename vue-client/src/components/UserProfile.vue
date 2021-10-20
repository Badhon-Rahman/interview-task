<template>
  <div>
    <h1>User Profile</h1>
    <nav class="navbar navbar-light bg-light">
      <button style="float: left;"><router-link to="/create/role">Create Role</router-link></button>
      <button style="float: left;"><router-link to="/assign/role">Assign Role</router-link></button>
      <button style="float: left;"><router-link to="/delete/role">Delete Role</router-link></button>
      <button style="float: right;"><router-link to="/user/list">User List</router-link></button>
      <button style="float: right;"><router-link to="/user/profile">Profile</router-link></button>
      <button style="float: right;"><router-link to="/logout">Logout</router-link></button>
    </nav>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>