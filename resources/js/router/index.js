import { createRouter, createWebHistory } from "vue-router";
import invoidIndex from "../components/invoices/index.vue";
import invoicesNew from "../components/invoices/new.vue";
import notFound from "../components/notFound.vue";

const routes = [
    {
        path: "/",
        component: invoidIndex,
    },
    {
        path: "/invoice/new",
        component: invoicesNew,
    },
    {
        path: "/:pathMatch(.*)*",
        component: notFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
