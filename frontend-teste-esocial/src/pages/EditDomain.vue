<template>
   <section class="container">
      <h1 class="text-center mt-5">Editar Domínio</h1>

      <form @submit.prevent="alterDomain">
         <div class="d-flex justify-content-center mt-4 align-bottom">
            <div class="col-md-5">
               <label for="name" class="form-label"
                  >Digite o nome do domínio {{ id }}</label
               >
               <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="nome_do_domínio"
                  v-model="name"
               />
            </div>

            <div class="col-md-1 mx-1">
               <label for="tld" class="form-label">TLD</label>
               <input
                  type="text"
                  class="form-control"
                  id="tld"
                  placeholder=".com.br"
                  v-model="tld"
               />
            </div>
         </div>

         <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
         </div>
      </form>
   </section>
</template>

<script>
import { Api } from '../services/apiDomains';

export default {
   name: 'EditDomain',
   props: ['id'],
   data() {
      return {
         name: '',
         tld: '',
      };
   },
   async created() {
      let json = await Api.showDomain(this.id);
      this.name = json.name;
      this.tld = json.tld;
   },
   
   methods: {
      async alterDomain() {
         await Api.updateDomain({
            id: this.id,
            name: this.name.toLowerCase(),
            tld: this.tld.toLowerCase(),
         });

         this.$router.push('/');
      },
   },
};
</script>

<style></style>
