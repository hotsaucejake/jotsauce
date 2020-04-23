import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import App from './App.vue';
import router from './router';
import store from './store';
import './registerServiceWorker';
import VueAuth from '@d0whc3r/vue-auth-plugin';
import { AuthResponse } from './interfaces/api/auth/auth-response.interface';

Vue.config.productionTip = false;

Vue.use(VueAxios, axios);

const authOptions = {
  authMeta: 'auth',
  rolesVar: 'roles',
  tokenDefaultName: 'default_auth_token',
  userDefaultName: 'default_auth_user',
  tokenStore: 'cookie',
  headerTokenReplace: '{auth_token}',
  tokenType: 'Bearer',
  vuexStoreSpace: 'vue-auth',

  authRedirect: '/',

  loginData: {
    url: '/api/auth/login',
    method: 'POST',
    redirect: '/about',
    headerToken: 'Authorization',
    fetchUser: false,
    customToken: (response: AuthResponse) => response.data.data.token,
  },
  logoutData: {
    url: '/api/auth/logout',
    method: 'POST',
    redirect: '/',
    makeRequest: false,
  },
  fetchItem: '',
  fetchData: {
    url: '/api/auth/user',
    method: 'GET',
    interval: 30,
    enabled: false,
  },
  refreshData: {
    url: '/api/auth/refresh',
    method: 'GET',
    interval: 30,
    enabled: false,
  },
};
Vue.use(VueAuth, authOptions);

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount('#app');
