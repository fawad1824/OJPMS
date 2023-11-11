import { createWebHistory, createRouter } from "vue-router";
import Home from "./components/Home.vue";
import IndexWebsite from "./Pages/Website/Index.vue";
import MainAdminLayout from "./layouts/MainAdminLayout.vue";
import AuthLogin from "./Auth/AuthPage.vue";
import About from "./Pages/Website/About.vue";
import Company from "./Pages/Website/Company.vue";
import Contact from "./Pages/Website/Contact.vue";
import Jobs from "./Pages/Website/Jobs.vue";
const routes = [
    {
        path: "/",
        name: "Home",
        component: IndexWebsite,
    },
    {
        path: "/auth/admin",
        name: "MainAdminLayout",
        component: MainAdminLayout,
    },
    {
        path: "/auth/login",
        name: "AuthLogin",
        component: AuthLogin,
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
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
