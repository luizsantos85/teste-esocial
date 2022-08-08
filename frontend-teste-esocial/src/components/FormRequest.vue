<template>
   <form @submit.prevent="handleSubmit">
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
         <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
   </form>
</template>

<script>
export default {
   name: 'FormRequest',
   data() {
      return {
         name: '',
         tld: '',
      };
   },
   methods: {
      handleSubmit() {
         this.$emit('onSubmit', this.name, this.tld);
      },
   },
};
</script>

<style></style>
