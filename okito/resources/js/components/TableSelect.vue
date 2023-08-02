<template>
    <div>
        <h2>Sélectionnez votre table</h2>
        <select v-model="selectedTable">
            <option v-for="table in tables" :key="table.id" :value="table.id">
                {{ table.id }}
            </option>
        </select>

        <button @click="createOrder">Confirmer</button>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            tables: [],
            selectedTable: null
        }
    },

    mounted() {
        this.getTables()
    },

    methods: {
        async getTables() {
            try {
                let response = await axios.get('/api/tables') 
                this.tables = response.data
            } catch (error) {
                console.error(error)
            }
        },

        async selectTable(table_id) {
        axios.post(`/commandes/createWithTable/${table_id}`)

            .then(response => {
                
            })
            .catch(error => {
                
            });
    },
    }
}
</script>
