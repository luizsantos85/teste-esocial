<template>
   <section class="container">
      <h1 class="text-center mt-5">Adicionar Domínio</h1>

      <form @submit.prevent="addDomain">
         <div class="d-flex justify-content-center mt-4 align-bottom">
            <div class="col-md-5">
               <label for="name" class="form-label"
                  >Digite o nome do domínio</label
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
            <button type="submit" class="btn btn-primary">Adicionar</button>
         </div>
      </form>

      <p v-show="fullDomain" class="text-center mt-3">
         O domínio registrado será: <strong> {{ fullDomain }}</strong>
      </p>
   </section>
</template>

<script>
import { Api } from '../services/apiDomains';

export default {
   name: 'AddDomain',
   data() {
      return {
         name: '',
         tld: '',
      };
   },
   computed: {
      fullDomain() {
         return (this.name + this.tld).toLowerCase();
      },
   },
   methods: {
      async addDomain() {
         await Api.postDomain({
            name: this.name.toLowerCase(),
            tld: this.tld.toLowerCase(),
         });

         this.$router.push('/');
      },
   },
};
</script>

<style></style>
