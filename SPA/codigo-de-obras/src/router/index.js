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
			},
			meta:{
				pdf: 'apresentacao.pdf',
				tituloMenu: 'Apresentação',
				tituloDownload: 'Apresentação',

			}
		},
		{
			path: '/capitulo1',
			name: 'Capítulo I',
			components: {
				header: Header,
				main: Capitulo1
			},
			meta:{
				pdf: 'capitulo1.pdf',
				tituloMenu: 'Cap. I: Disposições gerais',
				tituloDownload: 'Capítulo I - Das disposições gerais',
			}
		},
		{
			path: '/capitulo2',
			name: 'Capítulo II',
			components: {
				header: Header,
				main: Capitulo2
			},
			meta:{
				pdf: 'capitulo2.pdf',
				tituloMenu: 'Cap. II: Controle',
				tituloDownload: 'Capítlo II - Do controle da atividade edilícia',
			}
		},
		{
			path: '/capitulo3',
			name: 'Capítulo III',
			components: {
				header: Header,
				main: Capitulo3
			},
			meta:{
				pdf: 'capitulo3.pdf',
				tituloMenu: 'Cap. III: Taxas',
				tituloDownload: 'Capítulo III - Das taxas (das isenções de taxas e dispensa do pagamento dos preços públicos)',
			}
		},
		{
			path: '/capitulo4',
			name: 'Capítulo IV',
			components: {
				header: Header,
				main: Capitulo4
			},
			meta:{
				pdf: 'capitulo4.pdf',
				tituloMenu: 'Cap. IV: Procedimentos administrativos',
				tituloDownload: 'Capítulo IV - Dos procedimentos administrativos',
			}
		},
		{
			path: '/capitulo5',
			name: 'Capítulo V',
			components: {
				header: Header,
				main: Capitulo5
			},
			meta:{
				pdf: 'capitulo5.pdf',
				tituloMenu: 'Cap. V: Edificação existente',
				tituloDownload: 'Capítulo V - Da edificação existente',
			}
		},
		{
			path: '/capitulo6',
			name: 'Capítulo VI',
			components: {
				header: Header,
				main: Capitulo6
			},
			meta:{
				pdf: 'capitulo6.pdf',
				tituloMenu: 'Cap. VI: Procedimentos fiscalizatórios',
				tituloDownload: 'Capítulo VI - Dos procedimentos fiscalizatórios relativos à atividade edilícia',
			}
		},
		{
			path: '/capitulo7',
			name: 'Capítulo VII',
			components: {
				header: Header,
				main: Capitulo7
			},
			meta:{
				pdf: 'capitulo7.pdf',
				tituloMenu: 'Cap. VII: Alinhamento e melhoramento viário',
				tituloDownload: 'Capítulo VII - Do alinhamento e do melhoramento viário',
			}
		},
		{
			path: '/capitulo8',
			name: 'Capítulo VIII',
			components: {
				header: Header,
				main: Capitulo8
			},
			meta:{
				pdf: 'capitulo8.pdf',
				tituloMenu: 'Cap. VIII: Disposições finais',
				tituloDownload: 'Capítulo VIII - Das disposições finais e transitórias',
			}
		},
		{
			path: '/anexo1',
			name: 'Anexo I',
			components: {
				header: Header,
				main: Anexo1
			},
			meta:{
				pdf: 'anexo1.pdf',
				tituloMenu: 'Anexo I: Disposições técnicas',
				tituloDownload: 'Anexo I - Disposições técnicas',
			}
		},
		{
			path: '/anexo2_desenhos',
			name: 'Anexo II - Desenhos',
			components: {
				header: Header,
				main: Anexo2_desenhos
			},
			meta:{
				pdf: 'anexo2-desenhos.pdf',
				tituloMenu: 'Anexo II: Desenhos',
				tituloDownload: 'Anexo II - Desenhos',
			}
		},
		{
			path: '/anexo2_tabelas',
			name: 'Anexo II - Tabela',
			components: {
				header: Header,
				main: Anexo2_tabelas
			},
			meta:{
				pdf: 'anexo2-tabelas.pdf',
				tituloMenu: 'Anexo II: Tabela de Taxas',
				tituloDownload: 'Anexo II: Tabela de Taxas',
			}
		},
		{
			path: '/anexo3',
			name: 'Anexo III',
			components: {
				header: Header,
				main: Anexo3
			},
			meta:{
				pdf: 'anexo3.pdf',
				tituloMenu: 'Anexo III: Tabelas de Multas',
				tituloDownload: 'Anexo III - Tabelas de Multas',
			}
		},
		{
			path: '/anexo4',
			name: 'Anexo IV',
			components: {
				header: Header,
				main: Anexo4
			},
			meta:{
				pdf: 'anexo4.pdf',
				tituloMenu: 'Anexo IV: Tabelas áreas não computáveis',
				tituloDownload: 'Anexo IV - Tabelas relativas às áreas não computáveis',
			}
		},
		{
			path: '/portaria',
			name: 'Portaria',
			components: {
				header: Header,
				main: Portaria
			},
			meta:{
				pdf: 'portaria.pdf',
				tituloMenu: 'Portaria',
				tituloDownload: 'Portaria',
			}
		},
		{
			path: '/vetos',
			name: 'Vetos',
			components: {
				header: Header,
				main: Vetos
			},
			meta:{
				pdf: 'vetos.pdf',
				tituloMenu: 'Vetos',
				tituloDownload: 'Vetos',
			}
		},
		{
			path: '/indice_remissivo',
			name: 'Índice Remissivo',
			components: {
				header: Header,
				main: Indice_remissivo
			},
			meta:{
				pdf: 'indice_remissivo.pdf',
				tituloMenu: 'Índice remissivo',
				tituloDownload: 'Índice remissivo',
			}
		},
		{
			path: '/creditos',
			name: 'Créditos',
			components: {
				header: Header,
				main: Creditos
			},
			meta:{
				pdf: 'creditos.pdf',
				tituloMenu: 'Créditos',
				tituloDownload: 'Créditos',
			}
		}
   ]
})

export default router;