<template>
   <form>
      <div class="d-flex justify-content-center mt-4 align-bottom">
         <div class="col-md-5">
            <label for="name" class="form-label">
               Digite o nome do domínio
            </label>
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

         <div class="col-md-1 mx-1" v-show="this.id">
            <label for="created_at" class="form-label">Criado em </label>
            <input
               type="text"
               class="form-control px-2"
               id="created_at"
               disabled
               :value="created_at | formatDate"
            />
         </div>

         <div class="col-md-1 mx-1" v-show="this.id">
            <label for="updated_at" class="form-label">Atualizado em </label>
            <input
               type="text"
               class="form-control px-2"
               id="updated_at"
               disabled
               :value="updated_at | formatDate"
            />
         </div>
      </div>

      <div class="d-flex justify-content-center mt-3">
         <button class="btn btn-primary" @click.prevent="handleSubmit">
            Salvar
         </button>
         <button class="btn btn-secondary mx-2" @click="handleCancel">
            Cancelar
         </button>
      </div>
   </form>
</template>

<script>
import { Api } from '../services/apiDomains';

export default {
   name: 'FormRequest',
   props: ['id'],
   data() {
      return {
         name: '',
         tld: '',
         created_at: '',
         updated_at: '',
      };
   },
   methods: {
      handleSubmit() {
         this.$emit('onSubmit', this.name, this.tld);
      },
      handleCancel() {
         this.$router.push('/');
      },
   },

   async created() {
      if (this.id) {
         let json = await Api.showDomain(this.id);
         this.name = json.name;
         this.tld = json.tld;
         this.created_at = json.created_at;
         this.updated_at = json.updated_at;
      }
   },
   
   filters: {
      formatDate: function (value) {
         if (value === null) {
            return null;
         }
         return new Date(value).toLocaleString('pt-BR', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
         });
      },
   },
};
</script>

<style></style>
