<template>
   <div>
      <div class="text-center mt-4 theader">
         <h1>Projeto Gerenciamento de Domínios</h1>
         <h6 class="text-secondary">
            Projeto desenvolvido para fins de capacitação.
         </h6>
      </div>

      <router-view></router-view>
   </div>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.css';

export default {
   name: 'App',
};
</script>

<style>
.theader {
   border-bottom: 1px solid #ccc;
}
</style>
