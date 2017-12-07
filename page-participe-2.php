<?php
/*
Template Name: Participe V.2
*/
?>

<?php get_header(); ?>

<style type="text/css">

	h1 {margin-bottom: 50px;}

	.col {
		width: 300px;
		float: left;
		font-family: 'museoSlab', Arial,sans-serif;
		font-weight: bold;
		font-size: 90%;
        text-align: center;
        margin: 0 20px 0 0;
	}
    .col .p1,
    .col .p2,
    .col .p3 {
        text-align: left;
        height: 120px;
    }

	/*.col1, .col2 {
		margin-right: 25px;
	}

	#page-participe p {min-height: 70px} */

	/*.col .arrow {
		margin-left: 150px;
	}

	.col2 .arrow {
		 margin-left: 140px;
	}

	.col3 .arrow {
		margin-left: 110px;
	}*/

	#page-participe {
		background: url(http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/images/participe/bg-participe.jpg) no-repeat center 0 transparent;
        min-height: 670px;
	}

	footer {margin-top: 0;}

</style>

<div id="page-participe">
	<div class="wrapper">
		<h1> <?php the_title() ?> </h1>

		<p>Escolha umas das opções para colaborar com a 4ª e última etapa da revisão do Plano Diretor Estratégico:</p>

		<div class="col1 col">
			<p class="p1">Acompanhe a agenda de atividades e participe através de atividades devolutivas na sua região e audiências públicas.</p>
			<img src="<?php bloginfo('template_url') ?>/images/participe/arrow_1.png" class="arrow">
			<br />&nbsp;<a href="http://gestaourbana.prefeitura.sp.gov.br/evento/">
				<img class="big-btn" src="<?php bloginfo('template_url') ?>/images/participe/botao_participe_agenda.png">
			</a>
		</div>

		<div class="col2 col">
			<p class="p2">Faça sua contribuição diretamente no Plano Diretor Estratégico analisando e comentando o texto da Minuta de Projeto de Lei que será enviada para a Câmara.</p>
			<!-- <p style="position:absolute; height:1px">Em breve </p> -->
			<img src="<?php bloginfo('template_url') ?>/images/participe/arrow_1.png" class="arrow">
			<br />&nbsp;<a href="http://minuta.gestaourbana.prefeitura.sp.gov.br">
				<img class="big-btn" src="<?php bloginfo('template_url') ?>/images/participe/botao_participe_minuta.png">
			</a>
		</div>

		<div class="col3 col">
			<p class="p3">Aponte no mapa da capital o que está bom ou precisa melhorar na sua região. De ideias como intervenções urbanísticas, corredores urbanos, parques lineares, etc.</p>
			<!-- <p style="position:absolute; height:1px">Em breve </p> -->
			<img src="<?php bloginfo('template_url') ?>/images/participe/arrow_1.png" class="arrow">
			<br />&nbsp;<a href="http://mapa.gestaourbana.prefeitura.sp.gov.br/">
				<img class="big-btn" src="<?php bloginfo('template_url') ?>/images/participe/btn-mapaeamento.jpg">
			</a>
		</div>


		<!--
		<div class="col12 clear alpha omega">
			<p><br /><br />ATENÇÃO - REGRAS<br /><br />
			Para que todos possam participar de forma produtiva é necessário pactuar algumas regras. De um lado, a prefeitura se compromete em analisar e dar a devolutiva de cada proposta apresentada, mas de outro, é necessário que todos participem respeitando os demais grupos e agentes da cidade e construindo propostas consistentes com os objetivos do PDE. Dessa forma, a Prefeitura se compromete a analisar e fazer a devolutiva das propostas desta 2ª etapa que respeitem o exposto abaixo:<br /><br />
			• Só serão aceitas contribuições identificadas, inclusive com um endereço eletrônico (email) para possível confirmação;<br />
			• As contribuições devem ser encaminhadas em formulários próprios, devidamente
			preenchidos. Os formulários serão distribuídos nas oficinas participativas
			realizadas nas Subprefeituras e também estarão disponíveis online até o término da 2ª Etapa de Revisão Participativa (30 de julho de 2013);<br />
			• Só será aceita uma contribuição por formulário. Quando o formulário possuir mais de
			uma contribuição, só a primeira será considerada. Não há limite de formulários por
			pessoa;<br />
			• Serão desconsideradas contribuições com mensagens ofensivas a quem quer que seja.<br />
			• Não serão aceitas contribuições com citações sem as fontes.<br /><br />
			RECOMENDAÇÕES<br /><br />
			• Faça um texto enxuto com a ideia de sua proposta, evite textos longos com várias
			argumentações em uma mesma contribuição (lembrando que, em contribuições com mais
			de uma ideia, só a primeira será considerada);<br />
			• Ler um texto sem pontuação gera desconforto, e, além disso, aumenta as chances dele
			ser mal interpretado. Portanto, confira se o texto está de acordo com sua intenção;<br />
			• Evite enviar mensagens exclusivamente em maiúsculas;<br />
			• Não use abreviações e evite o uso da linguagem "internetês".<br /></p>
		</div>
		-->
	</div>
</div>

</div>
<script>
    jQuery(document).ready(function() {
    	// Enviar Contribuição
        jQuery('#inline').fancybox({
        'width' : 600,
        'type' : 'iframe',
        'padding' : 35
        });
        //jQuery('#inline').trigger('click');
    });
</script>

<?php get_footer(); ?>