import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '../pages/Home.vue'
import Booking from '../pages/Booking.vue'
import Login from '../pages/auth/Login.vue'
import Registration from '../pages/auth/Registration.vue'

const routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home',
        },

        {
            path: '/movie/:id',
            component: Booking,
            name: 'booking',
        },

        {
            path: '/login',
            component: Login,
            name: 'login',
        },

        {
            path: '/registration',
            component: Registration,
            name: 'registration',
        },
    ]
});

export default routes;
