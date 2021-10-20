<template>
  <div class="registerForm">
      <h1>Register</h1>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email address">
          <br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
          <br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
          <br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mobile number">
          <br>
        </div>
        <div class="" style="float:right; padding: 10px;">
            <button>Submit</button>
        </div>
    </form>
  </div>

</template>

<script>
export default {

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
