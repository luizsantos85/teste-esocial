<template>
   <section class="container">
      <h1 class="text-center mt-5">Editar Domínio</h1>

      <form-request @onSubmit="onSubmit" :id="id" />
   </section>
</template>

<script>
import FormRequest from '../components/FormRequest.vue';
import { Api } from '../services/apiDomains';

export default {
   components: { FormRequest },
   name: 'EditDomain',
   props: ['id'],

   data() {
      return {};
   },

   methods: {
      async onSubmit(name, tld) {
         await Api.updateDomain({
            id: this.id,
            name: name.toLowerCase(),
            tld: tld.toLowerCase(),
         });

         this.$router.push('/');
      },
   },
};
</script>

<style></style>
