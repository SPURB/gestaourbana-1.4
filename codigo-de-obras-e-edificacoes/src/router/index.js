import Vue from 'vue'
import Router from 'vue-router'

import Header from '../components/shared/Header.vue';
import Apresentacao from '../components/Apresentacao.vue';

Vue.use(Router);

const router = new Router({
    routes: [
        {
            path: '/',
            redirect:'/apresentacao'
        },
        {
            path: '/apresentacao',
            name: 'Código de Obras e Edificações',
            components: {
                header: Header,
                main: Apresentacao
            }
        }
   ]
})

export default router;