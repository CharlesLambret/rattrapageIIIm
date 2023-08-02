import { createApp } from 'vue';
import ArticlesListe from './components/ArticlesListe.vue';
import SelectTable from './components/TableSelect.vue';

const app = createApp({
    data() {
        return {
            tableSelected: false,
        };
    },
    components: {
        'articles-liste': ArticlesListe,
        'select-table': SelectTable
    }
}).mount('#app');
