import './bootstrap';
import Vue from 'vue';
import ExampleComponent from './components/example/example-component.vue';
import Clients from './components/passport/Clients.vue';
import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';


const app = new Vue({
    el: '#app',
    components: { ExampleComponent, Clients, AuthorizedClients, PersonalAccessTokens },
});
