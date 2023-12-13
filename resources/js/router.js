import { createWebHistory, createRouter } from "vue-router";
import Home from "./components/Home.vue";
import axios from "axios"; // Import Axios for making API requests

import IndexWebsite from "./Pages/Website/Index.vue";
import MainAdminLayout from "./layouts/MainAdminLayout.vue";
import AuthLogin from "./Auth/AuthPage.vue";
import About from "./Pages/Website/About.vue";
import Company from "./Pages/Website/Company.vue";
import Contact from "./Pages/Website/Contact.vue";
import Jobs from "./Pages/Website/Jobs.vue";
// Admin  Routes
import CompanyVue from "./Pages/Adminpanel/Catgeory.vue";
const routes = [
    {
        path: "/auth/login",
        name: "AuthLogin",
        component: AuthLogin,
    },
    {
        path: "/",
        name: "Home",
        component: IndexWebsite,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
    {
        path: "/company",
        name: "Company",
        component: Company,
    },
    {
        path: "/contact",
        name: "Contact",
        component: Contact,
    },
    {
        path: "/findjob",
        name: "Jobs",
        component: Jobs,
    },

    {
        path: "/auth/admin",
        name: "MainAdminLayout",
        component: MainAdminLayout,
        meta: { requiresAuth: true },
    } ,
    {
        path: "/companycategory",
        name: "CompanyVue",
        component: CompanyVue,
        meta: { requiresAuth: true },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach(async (to, from, next) => {
    const isAuthenticated = !!localStorage.getItem('Token'); // Check if the token exists in localStorage

    if (to.meta.requiresAuth && !isAuthenticated) {
        next('/auth/login'); // Redirect to login for routes that require authentication
    } else if (to.path === '/auth/login' && isAuthenticated) {
        // If the user is already authenticated and trying to access the login page
        next({ name: 'MainAdminLayout' }); // Redirect to a different route, e.g., MainAdminLayout
    } else {
        next(); // Allow navigation for other cases
    }
});


export default router;
