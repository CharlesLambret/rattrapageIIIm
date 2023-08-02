import { createApp } from 'vue';
import TableSelect from './components/TableSelect.vue';

createApp({
  components: {
    'select-table': TableSelect,
  }
}).mount('#app');
