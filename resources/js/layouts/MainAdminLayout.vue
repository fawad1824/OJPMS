<template>
    <Sidebar />
    <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
        <Header />

        <main class="p-4 min-vh-100">
            <section class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- card -->
                    <article class="p-4 rounded shadow-sm border-left mb-4">
                        <a href="#" class="d-flex align-items-center">
                            <span class="bi bi-box h5"></span>
                            <h5 class="ml-2">Products</h5>
                        </a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="p-4 rounded shadow-sm border-left mb-4">
                        <a href="#" class="d-flex align-items-center">
                            <span class="bi bi-person h5"></span>
                            <h5 class="ml-2">Customers</h5>
                        </a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="p-4 rounded shadow-sm border-left mb-4">
                        <a href="#" class="d-flex align-items-center">
                            <span class="bi bi-person-check h5"></span>
                            <h5 class="ml-2">Sellers</h5>
                        </a>
                    </article>
                </div>
            </section>

            <div
                class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4"
            >
                <div class="container">
                    <h1 class="display-4 mb-2 text-primary">Simple</h1>
                    <p class="lead text-muted">
                        Simple Admin Dashboard with Bootstrap.
                    </p>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import Sidebar from "./AdminPanel/Sidebar.vue";
import Header from "./AdminPanel/Header.vue";
export default {
    components: {
        Sidebar,
        Header,
    },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow&display=swap");

body {
    font-family: "Barlow", sans-serif;
}

a:hover {
    text-decoration: none;
}

.border-left {
    border-left: 2px solid var(--primary) !important;
}

.sidebar {
    top: 0;
    left: 0;
    z-index: 100;
    overflow-y: auto;
}

.overlay {
    background-color: rgb(0 0 0 / 45%);
    z-index: 99;
}

/* sidebar for small screens */
@media screen and (max-width: 767px) {
    .sidebar {
        max-width: 18rem;
        transform: translateX(-100%);
        transition: transform 0.4s ease-out;
    }

    .sidebar.active {
        transform: translateX(0);
    }
}
</style>
