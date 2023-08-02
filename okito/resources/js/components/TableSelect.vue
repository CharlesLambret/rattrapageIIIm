<template>
    <div>
      <button v-for="number in 40" :key="number" @click="confirmTable(number)">
        {{ number }}
      </button>
    </div>
  </template>
  
  <script>
  import { Inertia } from '@inertiajs/inertia'
  
  export default {
    methods: {
      confirmTable(number) {
        if (window.confirm(`Voulez-vous sélectionner la table ${number} ?`)) {
          this.createOrder(number);
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
  };
  </script>
  