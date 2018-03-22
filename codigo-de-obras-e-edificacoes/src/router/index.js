import Vue from 'vue';
import Router from 'vue-router';

import Header from '../components/shared/Header.vue';
import Apresentacao from '../components/Apresentacao.vue';
import Capitulo1 from '../components/Capitulo1.vue';
import Capitulo2 from '../components/Capitulo2.vue';

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
        },
        {
            path: '/capitulo1',
            name: 'Capítulo I',
            components: {
                header: Header,
                main: Capitulo1
            }
        },
        {
            path: '/capitulo2',
            name: 'Capítulo 2',
            components: {
                header: Header,
                main: Capitulo2
            }
        }
   ]
})

export default router;