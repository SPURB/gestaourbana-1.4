new Vue({
	el: '#app',
	data: {
		tootltipsData:[
			{ 	// 0
				title: "CA", 
				text: 'Coeficiente de Aproveitamento',
				style: {
					left: undefined,
					top: undefined
				}, 
				clicked: false
			},
			{	// 1
				title: "TO", 
				text: 'Taxa de Ocupação',
				style: {
					left: undefined,
					top: undefined
				},
				clicked: false
			},
			{	// 2
				title: "Gabarito", 
				text: 'É a dimensão vertical medida desde a cota de soleira até ao ponto mais alto do edifício',
				style: {
					left: undefined,
					top: undefined
				},
				clicked: false
			}

		]
	},
	components: { tooltipbox },
	mixins: 	[ tooltipbox_event_methods ],
	computed:{
		imgUrl(){ return template_url + '/SPA/infograficos/dist/images/oucfl.jpg' }
	},
	template:`
	<div id="g-ouc-faria_lima-box" class="ai2html ai2html-box-v5">
		<tooltipbox :attr="tootltipsData[0]" @reset="tipReset"></tooltipbox>
		<tooltipbox :attr="tootltipsData[1]" @reset="tipReset"></tooltipbox>
		<tooltipbox :attr="tootltipsData[2]" @reset="tipReset"></tooltipbox>

		<!-- Artboard: Prancheta_1 -->
		<div id="g-ouc-faria_lima-Prancheta_1" class="g-artboard" data-aspect-ratio="0.192" data-min-width="960">
			<img id="g-ouc-faria_lima-Prancheta_1-img" class="g-aiImg" :src="imgUrl"/>
			<div id="g-ai0-1" class="g-conte_do g-aiAbs g-aiPointText" style="top:2.8179%;margin-top:-8.6px;left:47.3066%;width:137px;">
				<p class="g-pstyle0">SETOR PINHEIROS</p>
			</div>
			<div id="g-ai0-2" class="g-conte_do g-aiAbs g-aiPointText" style="top:5.9452%;margin-top:-8.6px;left:55%;width:138px;">
				<p class="g-pstyle0">SETOR FARIA LIMA</p>
			</div>
			<div id="g-ai0-3" class="g-conte_do g-aiAbs g-aiPointText" style="top:10.5415%;margin-top:-8.8px;left:17.3903%;width:146px;">
				<p class="g-pstyle0">SETOR OLIMPÍADAS</p>
			</div>
			<div id="g-ai0-4" class="g-conte_do g-aiAbs g-aiPointText" style="top:12.9471%;margin-top:-8.8px;left:71.3343%;width:182px;">
				<p class="g-pstyle0">SETOR HÉLIO PELEGRINO</p>
			</div>
			<div id="g-ai0-5" class="g-conte_do g-aiAbs" style="top:14.9549%;left:61.0303%;width:14.6875%;">
				<p class="g-pstyle1">OLIMPÍADAS</p>
			</div>
			<div id="g-ai0-6" class="g-conte_do g-aiAbs" style="top:14.9549%;left:81.0778%;width:13.8542%;">
				<p class="g-pstyle1">HÉLIO PELEGRINO</p>
			</div>
			<div id="g-ai0-7" class="g-conte_do g-aiAbs" style="top:14.9549%;left:21.0417%;width:15.4167%;">
				<p class="g-pstyle1">PINHIEROS</p>
			</div>
			<div id="g-ai0-8" class="g-conte_do g-aiAbs" style="top:14.9549%;left:40.9376%;width:19.0625%;">
				<p class="g-pstyle1">FARIA LIMA</p>
			</div>
			<div id="g-ai0-9" class="g-conte_do g-aiAbs" style="top:14.9549%;left:1.25%;width:14.8958%;">
				<p class="g-pstyle1">SETORES</p>
			</div>
			<div id="g-ai0-10" class="g-conte_do g-aiAbs" style="top:15.837%;left:1.25%;width:15.2083%;">
				<p>Especificações</p>
			</div>
			<div id="g-ai0-11" class="g-conte_do g-aiAbs" style="top:15.837%;left:20.9014%;width:18.9583%;">
				<p>Inciso II, Artigo 14</p>
			</div>
			<div id="g-ai0-12" class="g-conte_do g-aiAbs" style="top:15.837%;left:40.9014%;width:18.9583%;">
				<p>Inciso III, Artigo 14 </p>
			</div>
			<div id="g-ai0-13" class="g-conte_do g-aiAbs" style="top:15.837%;left:60.9375%;width:18.9583%;">
				<p>Inciso IV, Artigo 14</p>
			</div>
			<div id="g-ai0-14" class="g-conte_do g-aiAbs" style="top:15.837%;left:81.0778%;width:18.9583%;">
				<p>Inciso IV, Artigo 14</p>
			</div>
			<div id="g-ai0-15" class="g-conte_do g-aiAbs g-aiPointText" style="top:18.1197%;margin-top:-12.9px;left:0.1042%;width:319px;">
				<p class="g-pstyle2"><span class="g-cstyle0">ZONEAMENTO </span>(LEI 16.402/2016)</p>
			</div>
			<div id="g-ai0-16" class="g-conte_do g-aiAbs" style="top:19.0444%;left:61.2544%;width:38.75%;">
				<p class="g-pstyle3">ZC |  Zona Centralidade</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">ZM | Zona Mista</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">ZER 1 | Zona Exclusivamente Residencial 1</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">ZCOR 2 | Zona Corredor 2</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">ZEIS 3 | Zona Especial de Interesse Social 3</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">ZE<span class="g-cstyle1">P</span>AM | Zona Especial de Preservação Ambiental</p>
			</div>
			<div id="g-ai0-17" class="g-conte_do g-aiAbs g-aiPointText" style="top:28.4682%;margin-top:-13.1px;left:0%;width:226px;">
				<p class="g-pstyle4">RESUMO LEGISLAÇÃO</p>
			</div>
			<div id="g-ai0-18" class="g-conte_do g-aiAbs" style="top:29.128%;left:0%;width:51.5625%;">
				<p class="g-pstyle5">LEIS</p>
				<p class="g-pstyle6"> <a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=19610"> LEI N&ordm; 13.769/2004 (vigente)</a></p>
				<p class="g-pstyle7"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=19613"> LEI N&ordm; 13.871/2004 (substitui os artigos 1&ordm;, 2&ordm;, 3&ordm;, 4&ordm;, 8&ordm;, 5&ordm;, 6&ordm;, 7&ordm;, 14&ordm;, 9&ordm;, 21&ordm;, 10&ordm;, 21&ordf;, 11&ordm;, 12&ordm;, 13&ordm;)</a></p>
				<p class="g-pstyle7"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=36684"> LEI N&ordm; 15.519/2011 (substitui os artigos 1&ordm;, 8&ordm;, 2&ordm;, 4&ordm;, 5&ordm; e 6&ordm;)</a></p>
				<p class="g-pstyle7"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=200816"> LEI N&ordm; 16.242/2015 (substitui os artigos 1&ordm;, 3&ordm; e 4&ordm;)</a></p>
			</div>
			<div id="g-ai0-19" class="g-conte_do g-aiAbs" style="top:28.9676%;left:58.2292%;width:41.875%;">
				<p class="g-pstyle8">DECRETOS</p>
				<p class="g-pstyle9"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/upload/desenvolvimento_urbano/sp_urbanismo/arquivos/ouae/decreto_45726_2005.pdf">45.726/2005;</a></p>
				<p class="g-pstyle9"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/upload/desenvolvimento_urbano/sp_urbanismo/arquivos/ouae/decreto_45817_2005.pdf">45.817/2005;</a></p>
				<p class="g-pstyle10"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/upload/desenvolvimento_urbano/sp_urbanismo/FARIA_LIMA/decreto_53094_regulamenta_lei_oucfl_anexo_1.pdf">53.094/2012 - Anexo 1 - Cálculo da Contrapartida;</a></p>
				<p class="g-pstyle9"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=200821"> 56.301/2015;</a></p>
				<p class="g-pstyle9"><a href="http://www.prefeitura.sp.gov.br/cidade/secretarias/urbanismo/sp_urbanismo/operacoes_urbanas/faria_lima/index.php?p=207423"> 56.635/2015 </a></p>
			</div>
			<div id="g-ai0-20" class="g-conte_do g-aiAbs g-aiPointText" style="top:33.7604%;margin-top:-13.1px;left:0%;width:481px;">
				<p class="g-pstyle4">BENEFÍCIOS E DIRETRIZES URBANÍSTICAS <span class="g-cstyle2">(ART. 5)</span></p>
			</div>
			<div id="g-ai0-21" class="g-conte_do g-aiAbs" style="top:34.0795%;left:0%;width:45.2083%;">
				<p class="g-pstyle11">Especificações de recuos: Apenas no Setor Faria Lima - Trechos da Rua Hungria e Avenida Juscelino Kubistschek</p>
			</div>
			<div id="g-ai0-22" class="g-conte_do g-aiAbs g-aiPointText" style="top:34.5245%;margin-top:-10.2px;left:50.5245%;width:272px;">
				<p class="g-pstyle12">Median<span class="g-cstyle3">t</span>e <span class="g-cstyle4">p</span>agamen<span class="g-cstyle3">t</span>o em CE<span class="g-cstyle1">P</span><span class="g-cstyle5">A</span>Cs</p>
			</div>
			<div id="g-ai0-23" class="g-conte_do g-aiAbs g-aiPointText" style="top:34.5245%;margin-top:-10.2px;left:83.0961%;width:188px;">
				<p class="g-pstyle12">Condições de Adesão </p>
			</div>
			<div id="g-ai0-24" class="g-conte_do g-aiAbs" style="top:36.1644%;left:72.1173%;margin-left:-55px;width:11.4583%;">
				<p class="g-pstyle13">Mudança </p>
				<p class="g-pstyle13">de uso</p>
			</div>
			<div id="g-ai0-25" class="g-conte_do g-aiAbs" style="top:36.1644%;left:94.2193%;margin-left:-53.5px;width:11.1458%;">
				<p class="g-pstyle13"><span class="g-cstyle6">LO</span>TE</p>
				<p class="g-pstyle13">mínimo</p>
			</div>
			<div id="g-ai0-26" class="g-conte_do g-aiAbs" style="top:36.2847%;left:49.918%;margin-left:-53px;width:11.0417%;">
				<p class="g-pstyle13"><a @click="tip(2, $event)">Gabarito</a></p>
			</div>
			<div id="g-ai0-27" class="g-conte_do g-aiAbs" style="top:36.3649%;left:5.7313%;margin-left:-53.5px;width:11.1458%;">
				<p class="g-pstyle13"><a @click="tip(0, $event)">CA = 4</a></p>
			</div>
			<div id="g-ai0-28" class="g-conte_do g-aiAbs" style="top:36.3649%;left:27.851%;margin-left:-55px;width:11.4583%;">
				<p class="g-pstyle13"><a @click="tip(1,$event)">TO = 0,7</a></p>
			</div>
			<div id="g-ai0-29" class="g-conte_do g-aiAbs" style="top:38.7504%;left:94.0584%;margin-left:-46px;width:9.5833%;">
				<p class="g-pstyle14">1000m&sup2; </p>
			</div>
			<div id="g-ai0-30" class="g-conte_do g-aiAbs g-aiPointText" style="top:42.6569%;margin-top:-12.9px;left:0%;width:289px;">
				<p class="g-pstyle4">INCENTIVOS DA LEI <span class="g-cstyle2">(ART. 13)</span></p>
			</div>
			<div id="g-ai0-31" class="g-conte_do g-aiAbs" style="top:43.3612%;left:57.9688%;width:42.0833%;">
				<p class="g-pstyle15">USO ABERTO AO PÚBLICO NO TÉRREO </p>
				<p class="g-pstyle11">I2 <span class="g-cstyle9">- </span>Para lotes com área &ge; 2.000m&sup2; + área do pavimento térreo destinada à circulação e atividades de uso aberto ao público - Será concedido, de forma gratuita, área de construção computável igual a 20% da área do lote. (Art. 13, Inciso II).</p>
			</div>
			<div id="g-ai0-32" class="g-conte_do g-aiAbs" style="top:43.3612%;left:0%;width:52.1875%;">
				<p class="g-pstyle15">REMEMBRAMENTO DE LOTES</p>
				<p class="g-pstyle11">I1 - Remembramento de lotes com menos de 2.000m&sup2; que originarem lotes com mais de 2.500m&sup2; - Será concedido de forma gratuita, área de construção computável igual a 20% da área do lote resultante do remembramento, respeitado o CAmáx igual a 4. (Art. 13, Inciso I);</p>
			</div>
			<div id="g-ai0-33" class="g-conte_do g-aiAbs g-aiPointText" style="top:47.5528%;margin-top:-13.1px;left:0%;width:326px;">
				<p class="g-pstyle4">PROCEDIMENTOS PARA ADESÃO</p>
			</div>
			<div id="g-ai0-34" class="g-conte_do g-aiAbs g-aiPointText" style="top:48.9982%;margin-top:-10.2px;left:3.0348%;width:145px;">
				<p class="g-pstyle16">Tipos de Adesão</p>
			</div>
			<div id="g-ai0-35" class="g-conte_do g-aiAbs g-aiPointText" style="top:49.0183%;margin-top:-10.2px;left:56.3466%;width:110px;">
				<p class="g-pstyle16">Fluxograma</p>
			</div>
			<div id="g-ai0-36" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.3317%;margin-top:-18.7px;left:27.3174%;width:37px;">
				<p class="g-pstyle17">1</p>
			</div>
			<div id="g-ai0-37" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.3517%;margin-top:-18.7px;left:59.305%;width:38px;">
				<p class="g-pstyle17">3</p>
			</div>
			<div id="g-ai0-38" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.3517%;margin-top:-18.7px;left:76.4233%;width:39px;">
				<p class="g-pstyle17">4</p>
			</div>
			<div id="g-ai0-39" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.3517%;margin-top:-18.7px;left:92.223%;width:39px;">
				<p class="g-pstyle17">5</p>
			</div>
			<div id="g-ai0-40" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.3718%;margin-top:-18.7px;left:42.7555%;width:39px;">
				<p class="g-pstyle17">2</p>
			</div>
			<div id="g-ai0-41" class="g-conte_do g-aiAbs g-aiPointText" style="top:50.7223%;margin-top:-10.2px;left:5.3815%;width:100px;">
				<p class="g-pstyle18">Voluntária</p>
			</div>
			<div id="g-ai0-42" class="g-conte_do g-aiAbs" style="top:50.8787%;left:43.8262%;margin-left:-41px;width:8.5417%;">
				<p class="g-pstyle19">Análises: documentos e ﬁnanceiro</p>
			</div>
			<div id="g-ai0-43" class="g-conte_do g-aiAbs" style="top:50.8988%;left:60.0966%;margin-left:-36px;width:7.5%;">
				<p class="g-pstyle19">Análise Urbana </p>
			</div>
			<div id="g-ai0-44" class="g-conte_do g-aiAbs" style="top:50.9188%;left:28.3333%;margin-left:-39.5px;width:8.2292%;">
				<p class="g-pstyle19">Entrada no Protocolo </p>
			</div>
			<div id="g-ai0-45" class="g-conte_do g-aiAbs" style="top:50.9188%;left:77.8333%;margin-left:-35.5px;width:7.3958%;">
				<p class="g-pstyle19">Análise Jurídica </p>
			</div>
			<div id="g-ai0-46" class="g-conte_do g-aiAbs" style="top:50.9188%;left:93.2701%;margin-left:-43.5px;width:9.0625%;">
				<p class="g-pstyle19">Emissão da Certidão </p>
			</div>
			<div id="g-ai0-47" class="g-conte_do g-aiAbs g-aiPointText" style="top:54.2081%;margin-top:-13.1px;left:0.4167%;width:262px;">
				<p class="g-pstyle4">EQUIVALÊNCIA DE CEPAC</p>
			</div>
			<div id="g-ai0-48" class="g-conte_do g-aiAbs" style="top:54.9081%;left:29.2708%;width:13.2292%;">
				<p class="g-pstyle1">COLUNA A (F1)</p>
			</div>
			<div id="g-ai0-49" class="g-conte_do g-aiAbs" style="top:54.9081%;left:74.375%;width:13.3333%;">
				<p class="g-pstyle1">COLUNA C (F3)</p>
			</div>
			<div id="g-ai0-50" class="g-conte_do g-aiAbs" style="top:54.9282%;left:56.4981%;width:13.3333%;">
				<p class="g-pstyle1">COLUNA B (F2)</p>
			</div>
			<div id="g-ai0-51" class="g-conte_do g-aiAbs" style="top:54.9883%;left:1.0417%;width:13.3333%;">
				<p class="g-pstyle1">PERÍMETRO</p>
			</div>
			<div id="g-ai0-52" class="g-conte_do g-aiAbs" style="top:55.7701%;left:29.5153%;width:25.4167%;">
				<p>Equivalência de 1 CEPAC em m&sup2; de</p>
				<p>área adicional de construção</p>
				<p>computável (CA)</p>
			</div>
			<div id="g-ai0-53" class="g-conte_do g-aiAbs" style="top:55.7701%;left:56.0778%;width:15.3125%;">
				<p>Equivalência de 1</p>
				<p>CEPAC em m&sup2; de área de terreno referente a</p>
				<p>mudança de uso e</p>
				<p>parâmetros</p>
				<p>urbanísticos</p>
			</div>
			<div id="g-ai0-54" class="g-conte_do g-aiAbs" style="top:55.7701%;left:73.9944%;width:26.0417%;">
				<p>Equivalência de 1 CEPAC em m&sup2; de terreno para taxa de ocupação</p>
				<p>adicional (acima de 50% até 70%)</p>
			</div>
			<div id="g-ai0-55" class="g-conte_do g-aiAbs" style="top:56.5319%;left:1.1819%;width:13.0208%;">
				<p>SETOR</p>
			</div>
			<div id="g-ai0-56" class="g-conte_do g-aiAbs" style="top:56.552%;left:15.625%;width:12.8125%;">
				<p>SUBSETORES</p>
			</div>
			<div id="g-ai0-57" class="g-conte_do g-aiAbs" style="top:57.6144%;left:29.5153%;width:10.5208%;">
				<p>Residencial</p>
			</div>
			<div id="g-ai0-58" class="g-conte_do g-aiAbs" style="top:57.6144%;left:42.9167%;width:9.8958%;">
				<p>Com/Serv</p>
			</div>
			<div id="g-ai0-59" class="g-conte_do g-aiAbs" style="top:57.6545%;left:73.9944%;width:12.1875%;">
				<p>Residencial</p>
			</div>
			<div id="g-ai0-60" class="g-conte_do g-aiAbs" style="top:57.6545%;left:87.3958%;width:10.8333%;">
				<p>Com/Serv</p>
			</div>
			<div id="g-ai0-61" class="g-conte_do g-aiAbs" style="top:58.5165%;left:15.625%;width:12.7083%;">
				<p>1a</p>
				<p>(frente F. Lima)</p>
			</div>
			<div id="g-ai0-62" class="g-conte_do g-aiAbs" style="top:58.6168%;left:29.5153%;width:12.1875%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-63" class="g-conte_do g-aiAbs" style="top:58.6168%;left:42.9167%;width:10.4167%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-64" class="g-conte_do g-aiAbs" style="top:58.6168%;left:56.0778%;width:13.6458%;">
				<p>2</p>
			</div>
			<div id="g-ai0-65" class="g-conte_do g-aiAbs" style="top:58.6168%;left:73.9944%;width:12.1875%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-66" class="g-conte_do g-aiAbs" style="top:58.6168%;left:87.3958%;width:10.8333%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-67" class="g-conte_do g-aiAbs" style="top:59.3986%;left:15.625%;width:12.7083%;">
				<p>1b</p>
			</div>
			<div id="g-ai0-68" class="g-conte_do g-aiAbs" style="top:59.3986%;left:29.5153%;width:12.1875%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-69" class="g-conte_do g-aiAbs" style="top:59.3986%;left:42.9167%;width:11.9792%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-70" class="g-conte_do g-aiAbs" style="top:59.3986%;left:56.0778%;width:13.6458%;">
				<p>2</p>
			</div>
			<div id="g-ai0-71" class="g-conte_do g-aiAbs" style="top:59.3986%;left:73.9944%;width:12.1875%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-72" class="g-conte_do g-aiAbs" style="top:59.3986%;left:87.3958%;width:10.8333%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-73" class="g-conte_do g-aiAbs" style="top:59.8396%;left:1.1819%;width:13.0208%;">
				<p>PINHEIROS</p>
			</div>
			<div id="g-ai0-74" class="g-conte_do g-aiAbs" style="top:60.3007%;left:15.625%;width:12.7083%;">
				<p>1c</p>
			</div>
			<div id="g-ai0-75" class="g-conte_do g-aiAbs" style="top:60.3007%;left:29.5153%;width:12.1875%;">
				<p>2,6</p>
			</div>
			<div id="g-ai0-76" class="g-conte_do g-aiAbs" style="top:60.3007%;left:42.9167%;width:11.9792%;">
				<p>1,7</p>
			</div>
			<div id="g-ai0-77" class="g-conte_do g-aiAbs" style="top:60.3007%;left:56.0778%;width:13.6458%;">
				<p>2</p>
			</div>
			<div id="g-ai0-78" class="g-conte_do g-aiAbs" style="top:60.3007%;left:73.9944%;width:12.1875%;">
				<p>2,6</p>
			</div>
			<div id="g-ai0-79" class="g-conte_do g-aiAbs" style="top:60.3007%;left:87.3958%;width:10.8333%;">
				<p>1,7</p>
			</div>
			<div id="g-ai0-80" class="g-conte_do g-aiAbs" style="top:61.2229%;left:15.625%;width:12.7083%;">
				<p>1d</p>
			</div>
			<div id="g-ai0-81" class="g-conte_do g-aiAbs" style="top:61.2429%;left:29.5153%;width:12.1875%;">
				<p>2,8</p>
			</div>
			<div id="g-ai0-82" class="g-conte_do g-aiAbs" style="top:61.2429%;left:42.9167%;width:10.5208%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-83" class="g-conte_do g-aiAbs" style="top:61.2429%;left:56.0778%;width:13.6458%;">
				<p>2</p>
			</div>
			<div id="g-ai0-84" class="g-conte_do g-aiAbs" style="top:61.2429%;left:73.9944%;width:10.5208%;">
				<p>2,3</p>
			</div>
			<div id="g-ai0-85" class="g-conte_do g-aiAbs" style="top:61.2429%;left:87.3958%;width:10.8333%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-86" class="g-conte_do g-aiAbs" style="top:62.1049%;left:15.625%;width:12.7083%;">
				<p>2a</p>
				<p>(frente F. Lima,</p>
				<p>entre Rebouças</p>
				<p>e C. Jardim)</p>
			</div>
			<div id="g-ai0-87" class="g-conte_do g-aiAbs" style="top:62.4457%;left:29.5153%;width:12.1875%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-88" class="g-conte_do g-aiAbs" style="top:62.4457%;left:42.9167%;width:10.625%;">
				<p>0,5</p>
			</div>
			<div id="g-ai0-89" class="g-conte_do g-aiAbs" style="top:62.4457%;left:56.0778%;width:13.6458%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-90" class="g-conte_do g-aiAbs" style="top:62.4457%;left:73.9944%;width:10.8333%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-91" class="g-conte_do g-aiAbs" style="top:62.4457%;left:87.3958%;width:10.8333%;">
				<p>0,5</p>
			</div>
			<div id="g-ai0-92" class="g-conte_do g-aiAbs" style="top:63.8891%;left:15.625%;width:12.7083%;">
				<p>2b</p>
				<p>(frente F. Lima,</p>
				<p>entre C. Jardim e</p>
				<p>Juscelino)</p>
			</div>
			<div id="g-ai0-93" class="g-conte_do g-aiAbs" style="top:64.2299%;left:29.5153%;width:12.1875%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-94" class="g-conte_do g-aiAbs" style="top:64.2299%;left:42.9167%;width:11.9792%;">
				<p>0,6</p>
			</div>
			<div id="g-ai0-95" class="g-conte_do g-aiAbs" style="top:64.2299%;left:56.0778%;width:13.6458%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-96" class="g-conte_do g-aiAbs" style="top:64.2299%;left:73.9944%;width:12.1875%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-97" class="g-conte_do g-aiAbs" style="top:64.2299%;left:87.3958%;width:10.8333%;">
				<p>0,6</p>
			</div>
			<div id="g-ai0-98" class="g-conte_do g-aiAbs" style="top:65.132%;left:1.1819%;width:13.0208%;">
				<p>FARIA LIMA</p>
			</div>
			<div id="g-ai0-99" class="g-conte_do g-aiAbs" style="top:65.4327%;left:15.625%;width:12.7083%;">
				<p>2c</p>
				<p>(incluindo frente</p>
				<p>C. Jardim)</p>
			</div>
			<div id="g-ai0-100" class="g-conte_do g-aiAbs" style="top:65.7334%;left:29.5833%;width:11.0417%;">
				<p>1,1</p>
			</div>
			<div id="g-ai0-101" class="g-conte_do g-aiAbs" style="top:65.7334%;left:42.9847%;width:10.8333%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-102" class="g-conte_do g-aiAbs" style="top:65.7334%;left:56.1458%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-103" class="g-conte_do g-aiAbs" style="top:65.7334%;left:74.0625%;width:11.0417%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-104" class="g-conte_do g-aiAbs" style="top:65.7334%;left:87.4639%;width:12.3958%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-105" class="g-conte_do g-aiAbs" style="top:66.7758%;left:15.625%;width:12.7083%;">
				<p>2d</p>
			</div>
			<div id="g-ai0-106" class="g-conte_do g-aiAbs" style="top:66.8159%;left:29.5153%;width:11.0417%;">
				<p>1,3</p>
			</div>
			<div id="g-ai0-107" class="g-conte_do g-aiAbs" style="top:66.8159%;left:42.9167%;width:10.8333%;">
				<p>0,5</p>
			</div>
			<div id="g-ai0-108" class="g-conte_do g-aiAbs" style="top:66.8159%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-109" class="g-conte_do g-aiAbs" style="top:66.8159%;left:73.9944%;width:11.0417%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-110" class="g-conte_do g-aiAbs" style="top:66.8159%;left:87.3958%;width:12.3958%;">
				<p>0,5</p>
			</div>
			<div id="g-ai0-111" class="g-conte_do g-aiAbs" style="top:67.6579%;left:15.625%;width:12.7083%;">
				<p>2e </p>
			</div>
			<div id="g-ai0-112" class="g-conte_do g-aiAbs" style="top:67.698%;left:29.5153%;width:11.0417%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-113" class="g-conte_do g-aiAbs" style="top:67.698%;left:42.9167%;width:10.8333%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-114" class="g-conte_do g-aiAbs" style="top:67.698%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-115" class="g-conte_do g-aiAbs" style="top:67.698%;left:73.9944%;width:11.0417%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-116" class="g-conte_do g-aiAbs" style="top:67.698%;left:87.3958%;width:12.3958%;">
				<p>1</p>
			</div>
			<div id="g-ai0-117" class="g-conte_do g-aiAbs" style="top:68.4197%;left:15.625%;width:12.7083%;">
				<p>3a</p>
				<p>(frente F. Lima)</p>
			</div>
			<div id="g-ai0-118" class="g-conte_do g-aiAbs" style="top:68.4998%;left:29.5153%;width:11.0417%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-119" class="g-conte_do g-aiAbs" style="top:68.4998%;left:42.9167%;width:10.8333%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-120" class="g-conte_do g-aiAbs" style="top:68.4998%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-121" class="g-conte_do g-aiAbs" style="top:68.4998%;left:73.9944%;width:11.0417%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-122" class="g-conte_do g-aiAbs" style="top:68.4998%;left:87.3958%;width:12.3958%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-123" class="g-conte_do g-aiAbs" style="top:69.2817%;left:15.625%;width:12.7083%;">
				<p>3b</p>
				<p>(frente Juscelino)</p>
			</div>
			<div id="g-ai0-124" class="g-conte_do g-aiAbs" style="top:69.3819%;left:29.5153%;width:11.0417%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-125" class="g-conte_do g-aiAbs" style="top:69.3819%;left:42.9167%;width:10.8333%;">
				<p>1</p>
			</div>
			<div id="g-ai0-126" class="g-conte_do g-aiAbs" style="top:69.3819%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-127" class="g-conte_do g-aiAbs" style="top:69.3819%;left:73.9944%;width:11.0417%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-128" class="g-conte_do g-aiAbs" style="top:69.3819%;left:87.3958%;width:12.3958%;">
				<p>0,8</p>
			</div>
			<div id="g-ai0-129" class="g-conte_do g-aiAbs" style="top:70.264%;left:1.1819%;width:13.0208%;">
				<p>HÉLIO PELEGRINO</p>
			</div>
			<div id="g-ai0-130" class="g-conte_do g-aiAbs" style="top:70.264%;left:15.625%;width:12.6042%;">
				<p>3c</p>
			</div>
			<div id="g-ai0-131" class="g-conte_do g-aiAbs" style="top:70.264%;left:29.5153%;width:11.0417%;">
				<p>2,5</p>
			</div>
			<div id="g-ai0-132" class="g-conte_do g-aiAbs" style="top:70.264%;left:42.9167%;width:10.5208%;">
				<p>1</p>
			</div>
			<div id="g-ai0-133" class="g-conte_do g-aiAbs" style="top:70.264%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-134" class="g-conte_do g-aiAbs" style="top:70.264%;left:73.9944%;width:11.0417%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-135" class="g-conte_do g-aiAbs" style="top:70.264%;left:87.3958%;width:12.3958%;">
				<p>1</p>
			</div>
			<div id="g-ai0-136" class="g-conte_do g-aiAbs" style="top:71.1059%;left:15.625%;width:12.6042%;">
				<p>3d</p>
			</div>
			<div id="g-ai0-137" class="g-conte_do g-aiAbs" style="top:71.1059%;left:29.5153%;width:11.0417%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-138" class="g-conte_do g-aiAbs" style="top:71.1059%;left:42.9167%;width:10.625%;">
				<p>1</p>
			</div>
			<div id="g-ai0-139" class="g-conte_do g-aiAbs" style="top:71.1059%;left:56.0778%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-140" class="g-conte_do g-aiAbs" style="top:71.1059%;left:73.9944%;width:11.0417%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-141" class="g-conte_do g-aiAbs" style="top:71.1059%;left:87.3958%;width:12.3958%;">
				<p>1</p>
			</div>
			<div id="g-ai0-142" class="g-conte_do g-aiAbs" style="top:71.9679%;left:15.4167%;width:12.6042%;">
				<p>3e</p>
			</div>
			<div id="g-ai0-143" class="g-conte_do g-aiAbs" style="top:71.9679%;left:29.3069%;width:11.0417%;">
				<p>2,5</p>
			</div>
			<div id="g-ai0-144" class="g-conte_do g-aiAbs" style="top:71.9679%;left:42.7083%;width:10.625%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-145" class="g-conte_do g-aiAbs" style="top:71.9679%;left:55.8694%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-146" class="g-conte_do g-aiAbs" style="top:71.9679%;left:73.7861%;width:11.0417%;">
				<p>2,3</p>
			</div>
			<div id="g-ai0-147" class="g-conte_do g-aiAbs" style="top:71.9679%;left:87.1875%;width:12.3958%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-148" class="g-conte_do g-aiAbs" style="top:72.6295%;left:15.625%;width:12.7083%;">
				<p>4a</p>
				<p>(frente F. Lima)</p>
			</div>
			<div id="g-ai0-149" class="g-conte_do g-aiAbs" style="top:72.7698%;left:29.5153%;width:11.0417%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-150" class="g-conte_do g-aiAbs" style="top:72.7698%;left:42.9167%;width:10.625%;">
				<p>0,6</p>
			</div>
			<div id="g-ai0-151" class="g-conte_do g-aiAbs" style="top:72.7698%;left:56.0778%;width:12.3958%;">
				<p>2</p>
			</div>
			<div id="g-ai0-152" class="g-conte_do g-aiAbs" style="top:72.7698%;left:73.9944%;width:11.0417%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-153" class="g-conte_do g-aiAbs" style="top:72.7698%;left:87.3958%;width:12.3958%;">
				<p>0,6</p>
			</div>
			<div id="g-ai0-154" class="g-conte_do g-aiAbs" style="top:73.5717%;left:15.795%;width:11.5625%;">
				<p>4b</p>
			</div>
			<div id="g-ai0-155" class="g-conte_do g-aiAbs" style="top:73.5717%;left:29.6853%;width:11.0417%;">
				<p>2</p>
			</div>
			<div id="g-ai0-156" class="g-conte_do g-aiAbs" style="top:73.5717%;left:43.0866%;width:10.625%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-157" class="g-conte_do g-aiAbs" style="top:73.5717%;left:56.0778%;width:12.3958%;">
				<p>2</p>
			</div>
			<div id="g-ai0-158" class="g-conte_do g-aiAbs" style="top:73.5717%;left:73.9944%;width:11.0417%;">
				<p>1,4</p>
			</div>
			<div id="g-ai0-159" class="g-conte_do g-aiAbs" style="top:73.5717%;left:87.3958%;width:12.3958%;">
				<p>0,9</p>
			</div>
			<div id="g-ai0-160" class="g-conte_do g-aiAbs" style="top:74.0528%;left:1.1819%;width:13.0208%;">
				<p>OLIMPÍADAS</p>
			</div>
			<div id="g-ai0-161" class="g-conte_do g-aiAbs" style="top:74.3535%;left:15.795%;width:11.5625%;">
				<p>4c</p>
			</div>
			<div id="g-ai0-162" class="g-conte_do g-aiAbs" style="top:74.3535%;left:29.6853%;width:11.0417%;">
				<p>2</p>
			</div>
			<div id="g-ai0-163" class="g-conte_do g-aiAbs" style="top:74.3535%;left:42.9167%;width:10.625%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-164" class="g-conte_do g-aiAbs" style="top:74.3535%;left:56.0778%;width:12.3958%;">
				<p>2</p>
			</div>
			<div id="g-ai0-165" class="g-conte_do g-aiAbs" style="top:74.3535%;left:73.9944%;width:11.0417%;">
				<p>1,8</p>
			</div>
			<div id="g-ai0-166" class="g-conte_do g-aiAbs" style="top:74.3535%;left:87.3958%;width:12.3958%;">
				<p>1,2</p>
			</div>
			<div id="g-ai0-167" class="g-conte_do g-aiAbs" style="top:75.1554%;left:15.795%;width:11.5625%;">
				<p>4d</p>
			</div>
			<div id="g-ai0-168" class="g-conte_do g-aiAbs" style="top:75.1554%;left:29.6853%;width:11.0417%;">
				<p>2</p>
			</div>
			<div id="g-ai0-169" class="g-conte_do g-aiAbs" style="top:75.1554%;left:42.9167%;width:10.625%;">
				<p>1</p>
			</div>
			<div id="g-ai0-170" class="g-conte_do g-aiAbs" style="top:75.1554%;left:56.0778%;width:12.3958%;">
				<p>2</p>
			</div>
			<div id="g-ai0-171" class="g-conte_do g-aiAbs" style="top:75.1554%;left:73.9944%;width:11.0417%;">
				<p>1,5</p>
			</div>
			<div id="g-ai0-172" class="g-conte_do g-aiAbs" style="top:75.1554%;left:87.3958%;width:12.3958%;">
				<p>1</p>
			</div>
			<div id="g-ai0-173" class="g-conte_do g-aiAbs" style="top:78.2827%;left:0.5171%;width:84.8958%;">
				<p class="g-pstyle20"><span class="g-cstyle10">CÁLCULO DA CONTRAPARTIDA  </span>53.094/2012 - Anexo I - Cálculo da Contrapartida</p>
			</div>
			<div id="g-ai0-174" class="g-conte_do g-aiAbs g-aiPointText" style="top:79.7099%;margin-top:-10.2px;left:0.8241%;width:147px;">
				<p class="g-pstyle18">1. AUMENTO CA</p>
			</div>
			<div id="g-ai0-175" class="g-conte_do g-aiAbs g-aiPointText" style="top:80.6722%;margin-top:-10.2px;left:33.0208%;width:248px;">
				<p class="g-pstyle21">ACA=(Ato x Cproj) - (Ato x CB)</p>
			</div>
			<div id="g-ai0-176" class="g-conte_do g-aiAbs g-aiPointText" style="top:80.6922%;margin-top:-10.2px;left:0.1042%;width:188px;">
				<p class="g-pstyle16"><span class="g-cstyle1">P</span>asso 1 - Cálculo <span class="g-cstyle11">A</span>CA</p>
			</div>
			<div id="g-ai0-177" class="g-conte_do g-aiAbs g-aiPointText" style="top:82.0153%;margin-top:-10.2px;left:0.1042%;width:238px;">
				<p class="g-pstyle16">Passo 2 - Cálculo Incentivos</p>
			</div>
			<div id="g-ai0-178" class="g-conte_do g-aiAbs g-aiPointText" style="top:82.2559%;margin-top:-10.2px;left:33.2932%;width:182px;">
				<p class="g-pstyle12">I1 e I2 = 20:100 x Ato</p>
			</div>
			<div id="g-ai0-179" class="g-conte_do g-aiAbs g-aiPointText" style="top:82.4637%;margin-top:-18.6px;left:0.1042%;width:281px;">
				<p class="g-pstyle22">Incisos I e II do Artigo 13 da lei 13.769/2004 </p>
			</div>
			<div id="g-ai0-180" class="g-conte_do g-aiAbs g-aiPointText" style="top:83.8195%;margin-top:-10.2px;left:0.1042%;width:226px;">
				<p class="g-pstyle16">Passo 3 - Quantidade Final</p>
			</div>
			<div id="g-ai0-181" class="g-conte_do g-aiAbs g-aiPointText" style="top:83.8195%;margin-top:-10.2px;left:33.3334%;width:197px;">
				<p class="g-pstyle12">Qad = (Aca - I1 - I2): F1</p>
			</div>
			<div id="g-ai0-182" class="g-conte_do g-aiAbs g-aiPointText" style="top:85.8683%;margin-top:-29.4px;left:0.8006%;width:199px;">
				<p class="g-pstyle18">2. USO MISTO, </p>
				<p class="g-pstyle18">MODIFICAÇÃO DE USO</p>
				<p class="g-pstyle18">E GABARITO</p>
			</div>
			<div id="g-ai0-183" class="g-conte_do g-aiAbs g-aiPointText" style="top:85.8843%;margin-top:-10.2px;left:33.2292%;width:189px;">
				<p class="g-pstyle12">Qmp = (Ato - Atd) : F2</p>
			</div>
			<div id="g-ai0-184" class="g-conte_do g-aiAbs g-aiPointText" style="top:88.2015%;margin-top:-11.8px;left:33.9651%;width:267px;">
				<p class="g-pstyle23">Aape = Ape - (50 : 100 x Ato)</p>
			</div>
			<div id="g-ai0-185" class="g-conte_do g-aiAbs g-aiPointText" style="top:88.237%;margin-top:-10.6px;left:0.8241%;width:206px;">
				<p class="g-pstyle18">3.  TAXA DE OCUPAÇÃO</p>
			</div>
			<div id="g-ai0-186" class="g-conte_do g-aiAbs g-aiPointText" style="top:90.9095%;margin-top:-12.9px;left:0.3125%;width:259px;">
				<p class="g-pstyle4">PROJETO SANTO AMARO</p>
			</div>
			<div id="g-ai0-187" class="g-conte_do g-aiAbs" style="top:91.4334%;left:58.125%;width:41.9792%;">
				<p class="g-pstyle24">LEI 14.193/2006 | Plano de Melhoramento da Av. Santo Amaro</p>
				<p class="g-pstyle24">DUP 56.061/2015 | Decreto de Utilidade Pública</p>
				<p class="g-pstyle24">LEI 16.242/2015 | Regramentos específicos Av. Santo Amaro</p>
			</div>
			<div id="g-ai0-188" class="g-conte_do g-aiAbs" style="top:98.8507%;left:60.3125%;width:21.7708%;">
				<p class="g-pstyle3">Avenida Santo Amaro</p>
				<p>&nbsp;</p>
				<p class="g-pstyle3">Perímetro OUC Faria Lima</p>
			</div>
		</div>
	</div>
	`
})