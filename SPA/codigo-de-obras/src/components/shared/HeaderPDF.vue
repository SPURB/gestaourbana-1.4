<template>
	<div class="HeaderPDF">
		<a :href="caminhoPdf + linkPdf" :download="tituloPdf+'.pdf'" :title="tituloPdf+'.pdf'">
			<span>Baixar {{ sectionName }}</span>
			<i class="small material-icons">picture_as_pdf</i>
		</a>
	</div>
</template>

<script>
export default {
	name: 'HeaderPDF',
	data() {
		return {
		}
	},
	computed: {
		linkPdf() { 
			return this.$route.meta.pdf 
		},
		sectionName() {
			return this.$route.name
		},
		tituloPdf() {
			return this.$route.meta.tituloDownload
		},
		caminhoPdf() {
			if(location.port == '8080' || location.port == '8082' ){
				return '../../../static/pdf/' 
			}
			else{
				return template_url +'/SPA/codigo-de-obras-e-edificacoes/dist/static/pdf/' 
			}
		}
	},
	props:['navItems']
}
</script>

<style lang="scss" scoped>
.HeaderPDF {
	max-height: 24px;
	padding: 12px;
	line-height: 24px;
	font-size: 15px;
	font-weight: 500;
	color: #333;
	border-right: 1px solid #EEEEEE;
	a { color: #333; };
	a:hover {
		color: #EB5757;
	};
	i { float: right; margin-left: 12px; }
}
.HeaderPDF:hover {
	i {	color: #EB5757; };
	cursor: pointer;
}
@media (max-width: 959px) {
	.HeaderPDF {
		border-right: 0;
		border-left:1px solid #EEEEEE;
		flex-grow: 0;
		span {
			display: none;
		};
		i { margin: 0; }
	}
}
</style>