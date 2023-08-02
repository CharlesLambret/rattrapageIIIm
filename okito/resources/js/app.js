import Vue from 'vue';
import CreateCommand from './Pages/Commandes/Create.vue';

const app = new Vue({
    el: '#app',
    components: {
        'create-command': CreateCommand
    }
});
