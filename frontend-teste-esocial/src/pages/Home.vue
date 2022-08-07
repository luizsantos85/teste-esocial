<template>
   <section class="py-3 mt-4">
      <div class="container">
         <div class="d-flex justify-content-around text-white">
            <div class="col-md-5">
               <ListDomains title="Domínios cadastrados" :data="domains" />
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
         domains: {},
      };
   },
   created() {
      fetch(`http://localhost:8000/domains`)
         .then((res) => res.json())
         .then((json) => {
            this.domains = json;
         });
   },
};
</script>

<style></style>
