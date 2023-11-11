<template>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="https://themewagon.github.io/jobfinderportal/assets/img/logo/logo.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <router-link to="/">
                                    <img src="https://themewagon.github.io/jobfinderportal/assets/img/logo/logo.png"
                                        alt="" />
                                </router-link>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li class="active">
                                                <router-link to="/">Home</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/findjob">Find a Jobs</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/company">Companies</router-link>
                                            </li>

                                            <li>
                                                <router-link to="/contact">Contact</router-link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <router-link to="/auth/login">
                                        <div class="btn head-btn1">

                                            Login / Register
                                        </div>

                                    </router-link>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</template>

<script>
export default {
    name: "header",
};
</script>

<style></style>
