<template>
   <div class="card">
      <router-link to="/add" class="btn btn-primary mb-4">
         Adicionar Domínio
      </router-link>

      <p class="card-title text-primary text-center">
         {{ title }}
         <span class="badge bg-primary">{{ data.length }}</span>
      </p>

      <div class="card-body text-secondary">
         <ul class="list-group">
            <li
               v-for="(item, index) in data"
               :key="index"
               class="list-group-item d-flex justify-content-between"
            >
               {{ item }}

               <div class="buttons">
                  <button @click="edit(index)">Editar</button>
                  <button>Excluir</button>
               </div>
            </li>
         </ul>
      </div>
   </div>
</template>

<script>
export default {
   name: 'ListDomains',
   props: ['title', 'data'],
   methods: {
      edit(id) {
        console.log(`clicou em ${id}`)
        //  this.$router.push(`/edit/${id}`);
      },
   },
};
</script>

<style scoped>
.buttons button {
   border: 0;
   background: transparent;
   color: #000;
   cursor: pointer;
}
.buttons button:nth-child(2) {
   margin-left: 10px;
   color: #c0392b;
}
</style>
