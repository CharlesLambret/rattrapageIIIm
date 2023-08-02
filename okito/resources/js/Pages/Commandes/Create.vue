<template>
	<div class="container w-50 p-3 shadow d-flex justify-content-center align-items-center my-auto mx-auto bg-white rounded flex-column" >
	<img src="https://hoodspot.fr/uploads/830/086/83008671600016/logo.jpg"/>
		<h1>Sélectionnez votre table</h1>
		<div class="flex-wrap overflow-auto">
			<button 
				v-for="number in 48" 
				:key="number" 
				@click="confirmTable(number)"
				class="btn btn-outline-warning text-warning m-2"
				style="width:6%"
			>
				{{ number }}
			</button>
		</div>
		<div v-if="tableSelected">
			<div v-for="article in articles" :key="article.id" class="card card-body" style="width:18rem">
				<h2>{{ article.nom }}</h2>
				<p>{{ article.description }}</p>
				<img :src="article.url" alt="Article image">
				<p>Prix: {{ article.prix }}</p>
			</div>
		</div>
	</div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
import axios from 'axios';

export default {
	name: "CreateCommand",
	data() {
    return {
			tableSelected: false,
			articles: [],
		};
	},
	methods: {
		confirmTable(number) {
			if (window.confirm(`Voulez-vous sélectionner la table ${number} ?`)) {
				this.createOrder(number);
				this.tableSelected = true;
			}
		},
		createOrder(number) {
			Inertia.post(('/commandes'), { table: number })
				.then(response => {
					console.log("commande créee")
				})
				.catch(error => {
					console.log("erreur", error)
				});
		},
	},
	async created() {
		const response = await axios.get('/articles');
		this.articles = response.data;
	},
};
</script>
