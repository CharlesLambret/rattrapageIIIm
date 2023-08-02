<template>
    <div>
      <div v-for="article in articles" :key="article.id" class="card" style="width:18rem">
        <h2>{{ article.nom }}</h2>
        <p>{{ article.description }}</p>
        <img :src="article.url" alt="Article image">
        <p>Prix: {{ article.prix }}</p>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        articles: [],
        
      };
    },
    async created() {
      const response = await axios.get('/articles');
      this.articles = response.data;
    },
  };
  </script>
  