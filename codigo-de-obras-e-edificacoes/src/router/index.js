import Vue from 'vue';
import Router from 'vue-router';

import Header from '../components/shared/Header.vue';
import Apresentacao from '../components/Apresentacao.vue';
import Capitulo1 from '../components/Capitulo1.vue';
import Capitulo2 from '../components/Capitulo2.vue';
import Capitulo3 from '../components/Capitulo3.vue';
import Capitulo4 from '../components/Capitulo4.vue';
import Capitulo5 from '../components/Capitulo5.vue';
import Capitulo6 from '../components/Capitulo6.vue';
import Capitulo7 from '../components/Capitulo7.vue';
import Capitulo8 from '../components/Capitulo8.vue';
import Anexo1 from '../components/Anexo1.vue';
import Anexo2_desenhos from '../components/Anexo2_desenhos.vue';
import Anexo2_tabelas from '../components/Anexo2_tabelas.vue';
import Anexo3 from '../components/Anexo3.vue';
import Anexo4 from '../components/Anexo4.vue';
import Portaria from '../components/Portaria.vue';
import Portaria1 from '../components/Portaria1.vue';
import Portaria2 from '../components/Portaria2.vue';
import Portaria3 from '../components/Portaria3.vue';
import Portaria4 from '../components/Portaria4.vue';
import Portaria5 from '../components/Portaria5.vue';
import Portaria6 from '../components/Portaria6.vue';
import Vetos from '../components/Vetos.vue';
import Indice_remissivo from '../components/Indice_remissivo.vue';
import Creditos from '../components/Creditos.vue';

Vue.use(Router);

const router = new Router({
    routes: [
        {
            path: '/',
            redirect:'/apresentacao'
        },
        {
            path: '/apresentacao',
            name: 'Apresentação',
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
            name: 'Capítulo II',
            components: {
                header: Header,
                main: Capitulo2
            }
        },
        {
            path: '/capitulo3',
            name: 'Capítulo III',
            components: {
                header: Header,
                main: Capitulo3
            }
        },
        {
            path: '/capitulo4',
            name: 'Capítulo IV',
            components: {
                header: Header,
                main: Capitulo4
            }
        },
        {
            path: '/capitulo5',
            name: 'Capítulo V',
            components: {
                header: Header,
                main: Capitulo5
            }
        },
        {
            path: '/capitulo6',
            name: 'Capítulo VI',
            components: {
                header: Header,
                main: Capitulo6
            }
        },
        {
            path: '/capitulo7',
            name: 'Capítulo VII',
            components: {
                header: Header,
                main: Capitulo7
            }
        },
        {
            path: '/capitulo8',
            name: 'Capítulo VIII',
            components: {
                header: Header,
                main: Capitulo8
            }
        },
        {
            path: '/anexo1',
            name: 'Anexo I',
            components: {
                header: Header,
                main: Anexo1
            }
        },
        {
            path: '/anexo2_desenhos',
            name: 'Anexo II - Desenhos',
            components: {
                header: Header,
                main: Anexo2_desenhos
            }
        },
        {
            path: '/anexo2_tabelas',
            name: 'Anexo II - Tabelas',
            components: {
                header: Header,
                main: Anexo2_tabelas
            }
        },
        {
            path: '/anexo3',
            name: 'Anexo III',
            components: {
                header: Header,
                main: Anexo3
            }
        },
        {
            path: '/anexo4',
            name: 'Anexo IV',
            components: {
                header: Header,
                main: Anexo4
            }
        },
        {
            path: '/portaria',
            name: 'Portaria',
            components: {
                header: Header,
                main: Portaria
            }
        },
        {
            path: '/portaria1',
            name: 'Portaria - Capítulo I',
            components: {
                header: Header,
                main: Portaria1
            }
        },
        {
            path: '/portaria2',
            name: 'Portaria - Capítulo II',
            components: {
                header: Header,
                main: Portaria2
            }
        },
        {
            path: '/portaria3',
            name: 'Portaria - Capítulo III',
            components: {
                header: Header,
                main: Portaria3
            }
        },
        {
            path: '/portaria4',
            name: 'Portaria - Capítulo IV',
            components: {
                header: Header,
                main: Portaria4
            }
        },
        {
            path: '/portaria5',
            name: 'Portaria - Capítulo V',
            components: {
                header: Header,
                main: Portaria5
            }
        },
        {
            path: '/portaria6',
            name: 'Portaria - Capítulo VI',
            components: {
                header: Header,
                main: Portaria6
            }
        },
        {
            path: '/vetos',
            name: 'Vetos',
            components: {
                header: Header,
                main: Vetos
            }
        },
        {
            path: '/indice_remissivo',
            name: 'Índice Remissivo',
            components: {
                header: Header,
                main: Indice_remissivo
            }
        },
        {
            path: '/creditos',
            name: 'Créditos',
            components: {
                header: Header,
                main: Creditos
            }
        }
   ]
})

export default router;