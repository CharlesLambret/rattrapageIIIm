<template>
<div class="container w-50 p-3 shadow d-flex justify-content-center align-items-center my-auto mx-auto bg-white rounded flex-column" >
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
    
  </div>
  </template>
  
  <script>
  import { Inertia } from '@inertiajs/inertia'
  
  export default {
    data() {
    return {
        tableSelected: false,
       
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
  };
  </script>
  