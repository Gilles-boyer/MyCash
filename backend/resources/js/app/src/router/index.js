import Vue from "vue";
import VueRouter from "vue-router";
import Login from "../views/Login.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Login",
        component: Login,
    },
];

const router = new VueRouter({
    mode: "history",
    base: "app",
    routes,
});

export default router;
