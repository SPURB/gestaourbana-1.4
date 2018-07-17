<template>
	<div class="HeaderMenu">
		<div class="menu" @click="showMenu = !showMenu">
			{{ tituloMenu }}
			<i class="small material-icons" v-if="!showMenu">arrow_drop_down</i>
			<i class="small material-icons" v-else>arrow_drop_up</i>
		</div>

		<div class="menu-exp" v-if="showMenu">
			<ul>
				<template v-for="navitem in navItems" >
					<li @click="showMenu = !showMenu">
						<router-link :to='navitem.path' active-class="menuLi">
							<div @click="topo">{{ navitem.meta.tituloMenu }}
							</div>
						</router-link>
					</li>
				</template>
				<li>
					<div>
						<a 
							href="http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2018/04/codigo_de_obras_ilustrado.pdf" 
							download>Baixar Versão Completa <i class="small material-icons">picture_as_pdf</i></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	name: 'HeaderMenu',
	data() {
		return {
			tituloMenu: "Seções",
			showMenu: false,
		}
	},
	methods: {
		topo() {
			window.scrollTo({
				top: 0,
				left: 0,
				behavior: "smooth"
			});
		}
	},
	props:['navItems']
}
</script>

<style lang="scss" scoped>
.HeaderMenu {
	width: 290px;
	div.menu {
		max-height: 24px;
		padding: 12px;
		line-height: 24px;
		font-size: 15px;
		text-transform: uppercase;
		font-weight: 500;
		color: #EB5757;
		cursor: pointer;
		min-height: 100%;
		box-sizing: border-box;
		i { float: right; }
	}

	div.menu-exp {
		position: absolute;
		border-left: 1px solid #EEEEEE;
		border-right: 1px solid #EEEEEE;
		border-top: 1px solid #EEEEEE;
		border-radius: 0 0 2px 2px;
		box-shadow: 0 2px 2px rgba(0,0,0,0.12);
		background-color: #FFF;
		right: 0px;
		top: 48px;
		width: 291px;
		box-sizing: border-box;
		ul li div {
			padding: 8px;
			line-height: 20px;
			border-bottom:1px solid #EEEEEE;
			&:hover {
				background-color: #F5F5F5;
				transition: 200ms all;
			};
		};
	}
}
@media (max-width: 360px) {
	.HeaderMenu {
		width: auto;
	}
}

@media (max-width: 959px) {
	.HeaderMenu {
		flex-grow: 1;
	}
	.HeaderMenu > div.menu {
		padding: 12px 12px 12px 0;
	}
	.HeaderMenu > div.menu-exp {
		width: 100%;
	}
}
</style>