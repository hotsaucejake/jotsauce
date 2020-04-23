import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import Login from './views/login/login';

Vue.use(Router);

const router = new Router({
  mode: 'history',
  base: '/',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Login,
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue'),
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    },
  ],
});

(Vue as any).router = router;

export default router;
