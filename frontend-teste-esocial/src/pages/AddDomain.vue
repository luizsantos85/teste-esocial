<template>
   <section class="container">
      <h1 class="text-center mt-5">Adicionar Domínio</h1>

      <form-request @onSubmit="onSubmit" />

      <p v-show="fullDomain" class="text-center mt-3">
         O domínio registrado será: <strong> {{ fullDomain }}</strong>
      </p>
   </section>
</template>

<script>
import FormRequest from '../components/FormRequest.vue';
import { Api } from '../services/apiDomains';

export default {
   components: { FormRequest },
   name: 'AddDomain',
   data() {
      return {
         name: '',
         tld: '',
      };
   },
   // computed: {
   //    fullDomain(name,tld) {
   //       return (name + tld).toLowerCase();
   //    },
   // },
   methods: {
      async onSubmit(name, tld) {
         await Api.postDomain({
            name: name.toLowerCase(),
            tld: tld.toLowerCase(),
         });

         this.$router.push('/');
      },
   },
};
</script>

<style></style>
