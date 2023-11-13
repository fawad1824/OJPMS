<template>
    <div>
        <router-link to="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
            <span class="bi bi-border-all"></span>
            <span class="ml-2">Dashboard</span>
        </router-link>

        <router-link to="/companycategory" class="list-group-item list-group-item-action border-0 align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Companies Category</span>
        </router-link>

        <router-link to="#" class="list-group-item list-group-item-action border-0 align-items-center">
            <span class="bi bi-box"></span>
            <span class="ml-2">Companies</span>
        </router-link>

        <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
          <div>
            <span class="bi bi-cart-dash"></span>
            <span class="ml-2">Users</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="sale-collapse" data-parent="#sidebar">
          <div class="list-group">
            <router-link to="#" class="list-group-item list-group-item-action border-0 pl-5">Seekers</router-link>
            <router-link to="#" class="list-group-item list-group-item-action border-0 pl-5">Vendors</router-link>
          </div>
        </div>
    </div>
  </template>

  <script>
  export default {

  }
  </script>

  <style>

  </style>
