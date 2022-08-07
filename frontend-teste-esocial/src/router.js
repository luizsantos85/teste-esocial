import Vue from 'vue';
import Router from 'vue-router';

import Home from './pages/Home';
import AddDomain from './pages/AddDomain';

Vue.use(Router);

export default new Router({
   mode: 'history',
   routes: [
      {
         path: '/',
         component: Home,
      },
      {
         path: '/add',
         component: AddDomain,
      },
      {
         path: '/edit/:id',
         component: AddDomain,
         props: true,
      },
   ],
});
