<template>
   <section class="py-3 mt-4">
      <div class="container">
         <div class="d-flex justify-content-around text-white">
            <div class="col-md-5">
               <ListDomains title="Domínios Registrados" :data="domains" />
            </div>
         </div>
      </div>
   </section>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.css';

import ListDomains from '../components/ListDomains';

export default {
   name: 'Home',
   components: {
      ListDomains,
   },
   data() {
      return {
         domains: ['lhscode', 'lhscode', 'lhscode', 'lhscode'],
      };
   },
};
</script>

<style></style>
