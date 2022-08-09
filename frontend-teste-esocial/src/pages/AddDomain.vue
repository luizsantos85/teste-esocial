<template>
   <section class="container">
      <h1 class="text-center mt-5">Adicionar Domínio</h1>

      <form-request @onSubmit="onSubmit" />
   </section>
</template>

<script>
import FormRequest from '../components/FormRequest.vue';
import { Api } from '../services/apiDomains';

export default {
   components: { FormRequest },
   name: 'AddDomain',
   data() {
      return {};
   },
   methods: {
      async onSubmit(name, tld) {
         if (name && tld) {
            await Api.postDomain({
               name: name.toLowerCase(),
               tld: tld.toLowerCase(),
            });

            this.$router.push('/');
         }
      },
   },
};
</script>

<style></style>
