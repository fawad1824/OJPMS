<template>
    <!-- sidebar -->
  <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
      <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
      <div class="list-group rounded-0">

        <Admin/>
        <Vender/>
        <User/>


        <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
            <span class="bi bi-box"></span>
            <span class="ml-2">Logout</span>
          </a>
      </div>
    </div>
  </template>

  <script>
  import Vender from './RoleVise/Vender.vue';
  import Admin from './RoleVise/Admin.vue';
  import User from './RoleVise/User.vue';
  export default {

    components:{
        Vender,
        Admin,
User
    }
  }
  </script>

  <style>

  </style>
