import { createRouter, createWebHistory } from "vue-router";
import HomePageView from "@/views/HomePageView.vue";
import DemoPageView from "@/views/DemoPageView.vue";

const routes = [
    { path: '/', component: HomePageView },
    { path: '/demo', component: DemoPageView }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;