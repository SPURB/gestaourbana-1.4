<?php
/*
Template Name: pmi-terminais-de-onibuis
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ol.4.6.5.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-terminais-pmi.css">

<div id="default-inner">
	<div class="wrapper">
			<div class="inner">
				<div class="text">
					<?php the_title( '<h3>', '</h3>' ); ?>
					<div id="apresentacao_terminais">
						<?php the_content(); ?>
					</div>
					<div id='container'>
					  <div id="conteudo_botoes_ficha">
						<div id='legenda_container'>
						  <div class='legenda_coluna'>
							<div id='noroeste1' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Noroeste 1')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #4DB757'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Noroeste 1'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
							<div id='norte2' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Norte 2')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #005D97'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Norte 2'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
							<div id='nordeste3' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Nordeste 3')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #F3C615'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Nordeste 3'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
						  </div>
						  <div class='legenda_coluna'>
							<div id='leste4' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Leste 4')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #C9412C'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Leste 4'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
							<div id='sudeste5' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Sudeste 5')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #008570'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Sudeste 5'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
							<div id='sul6' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Sul 6')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #0088CF'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Sul 6'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
						  </div>
						  <div class='legenda_coluna'>
							<div id='sudoeste7' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Sudoeste 7')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #810024'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Sudoeste 7'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
							<div id='centro9' class='setor_consorcio_container' v-on:mouseover="displayHoveredMinimap('Centro 9')" v-on:mouseleave="displayHoveredMinimap('')">
							  <div class='divisor_setor_consorcio' style='background-color: #C5C7C9'>
							  </div>
							  <ul class="ul_btn_terminais"> 
								<template v-for='value in terminais' v-if="value.area_consorciada ==='Centro 9'">
								  <li class='btn_terminais'> 
									<a href="#ficha_container"> 
									  <button type="text" v-bind:id='value.id' class='btn_btn_terminais' v-on:mouseover='displayMinimapaPontos(value.minimapa_ponto_v)' v-on:mouseleave="removeMinimapaPontos()" v-on:click='alteraConteudoEview(value, value.id)'>{{ value.nome }} 
									  </button> 
									</a>
								  </li>
								</template>
							  </ul>
							</div>
						  </div>
						</div>
						<div id='ficha_container' v-bind:style='display_ficha_container'>
						  <div class='fim_container' v-bind:style='active_bg_color'>
						  </div>
						  <h2 id='titulo_terminal' v-bind:style='active_color'>{{ nome }}
						  </h2>
						  <div class='legenda_coluna'>
							<div id='minimapa_pmi'> 
							  <img :src="src_minimapas[10]" class='minimapa_overlay' alt="localizacao_base" width='150' heigth='212'>
							  <img :src='active_minimap_on_hover' class='minimapa_overlay minimap_hover_action' alt="localizacao_preview" width='150' heigth='212'>
							  <img :src='active_minimap' class='minimapa_overlay' alt="localizacao_ativo" width='150' heigth='212'>
							  <img :src="src_minimapas[11]" class='minimapa_overlay' alt="localizacao_preview" width='150' heigth='212'>
							  <img class='minimapa_ponto minimap_hover_action' id='minimapa_ponto_preview' v-bind:style='active_minimap_points_on_btn_hover' :src="src_minimapas[12]" alt="ponto_preview" width='8' heigth='8'>
							  <img class='minimapa_ponto' v-bind:style='minimapa_ponto_v' :src="src_minimapas[12]" alt="ponto_terminal" width='8' heigth='8'>
							</div>
						  </div>
						  <div class='legenda_coluna'>
							<div id="info_resumo">
							  <p class='lg_col_info'>
								<span class='lg_col_endereco'>Endereço:
								</span>
							  </br>{{ endereco }}
							</p>
						  <p class='lg_col_info'>
							<span class='lg_col_endereco'>Prefeitura Regional:
							</span>
						  </br>{{ prefeitura_regional }}
						</p>
					  <p class='lg_col_info'>
						<span class='lg_col_endereco'>Distrito:
						</span>
					  </br>{{ distrito }}
					</p>
					</div>
					</div>
					<div class='fim_container' v-bind:style='active_bg_color'>
					</div>
					<div class='fim_ficha_container' v-bind:style='active_bg_color'>
					</div>
					<h3 class='titulo_setor_consorcio' v-bind:style='active_color'>FICHA TÉCNICA
					</h3>
					<div class='legenda_coluna'>
					  <table class='tabela_terminal'>
						<tbody>
						  <tr>
							<td>Inauguração
							</td>
							<td>{{ inauguracao }}
							</td>
						  </tr>
						  <tr>
							<td>Passageiros embarcados por dia
							</td>
							<td>{{ passageiros_emb_dia }}
							</td>
						  </tr>
						  <tr>
							<td>Área Terreno m²
							</td>
							<td>{{ area_terreno }}
							</td>
						  </tr>
						  <tr>
							<td>Área Edificação m²
							</td>
							<td>{{ area_edif }}
							</td>
						  </tr>
						  <tr>
							<td>Área Cobertura m²
							</td>
							<td>{{ area_cobertura }}
							</td>
						  </tr>
						  <tr>
							<td>Área Locada m²
							</td>
							<td>{{ area_locada }}
							</td>
						  </tr>
						  <tr>
							<td>Custo Mensal (média mensal jul/2014 a jun/2015)
							</td>
							<td>{{ custo_mensal }}
							</td>
						  </tr>
						  <tr>
							<td>Receita Mensal (fev/2017)
							</td>
							<td>{{ receita_mensal }}
							</td>
						  </tr>
						  <tr>
							<td>Corredor existente
							</td>
							<td>{{ corredor_existente }}
							</td>
						  </tr>
						  <tr>
							<td>Corredor projetado
							</td>
							<td>{{ corredor_projetado }}
							</td>
						  </tr>
						</tbody>
					  </table>
					</div>
					<div class='legenda_coluna'>
					  <table class='tabela_terminal'>
						<tbody>
						  <tr>
							<td>Zoneamento
							</td>
							<td>{{ zon }}
							</td>
						  </tr>
						  <tr>
							<td>Macrozona
							</td>
							<td>{{ macrozona }}
							</td>
						  </tr>
						  <tr>
							<td>Macroárea/Setor Macroárea de Estruturação metropolitana
							</td>
							<td>{{ macroarea }}
							</td>
						  </tr>
						  <tr>
							<td>Operação Urbana
							</td>
							<td>{{ ouc }}
							</td>
						  </tr>
						  <tr>
							<td>Área Especial de Tráfego - AET
							</td>
							<td>{{ area_esp_trafego }}
							</td>
						  </tr>
						  <tr>
							<td>Perímetro de Incentivo para Edifício Garagem Zoneamento - Lei 16.402/2016 - Mapa 4
							</td>
							<td>{{ incentivo_garagem }}
							</td>
						  </tr>
						  <tr>
							<td>Perímetro de Incentivo ao Desevolvimento Econômico PDE - Lei 16.050/2014 - Mapa 11
							</td>
							<td>{{ per_incen_des_econo }}
							</td>
						  </tr>
						</tbody>
					  </table>
					</div>
					<div class='legenda_coluna'>
					  <table class='tabela_terminal'>
						<tbody>
						  <tr>
							<td>Melhoramentos viários
							</td>
							<td>{{ melh_viarios }}
							</td>
						  </tr>
						  <tr>
							<td>Tombamentos
							</td>
							<td>{{ tombamentos }}
							</td>
						  </tr>
						  <tr>
							<td>Área de Proteção de Manancial
							</td>
							<td>{{ area_prot_manancial }}
							</td>
						  </tr>
						  <tr>
							<td>Área de Proteção Ambiental
							</td>
							<td>{{ area_prot_ambiental }}
							</td>
						  </tr>
						  <tr>
							<td>Área de Preservação Permanente
							</td>
							<td>{{ app }}
							</td>
						  </tr>
						  <tr>
							<td>Patrimônio Ambiental - Vegetação Significativa Decreto 30.443/89
							</td>
							<td>{{ vegetacao_significativa }}
							</td>
						  </tr>
						  <tr>
							<td>Plano de Proteção aos Aeródromos (menor altitude)
							</td>
							<td>{{ plano_aerodromos }}
							</td>
						  </tr>
						  <tr v-if="observacoes">
							<td>Observações
							</td>
							<td>{{ observacoes }}
							</td>
						  </tr>
						</tbody>
					  </table>
					</div>
					</div>
					</div>
					<div id="map" class="map">
					</div>
					<div id='conteudo_pos_clique'>
					  <div class='fim_container' v-bind:style='active_bg_color'>
					  </div>
					  <div id='arquivo_publicacao' v-if="btn_clicked">
						<h3 class='titulo_setor_consorcio' v-bind:style='active_color'>Ver estudo completo do {{nome}} | (PDF)
						</h3>
						<a :href='pdf_link'>
						  <img id='img_publicacao' :src='img_publicacao'>
						</a>
					  </div>
					</div>
				</div>
			</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/ol.4.6.5.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vue.v2.5.16.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/terminais_pmi.js" defer></script>