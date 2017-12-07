//JSON com Informações de cada categoria
const information = {
  '_1A': {
  'titulo': 'Destamponamento de córrego ',
  'texto': '1A. Destamponar córregos limpos é uma solução adotada para reaproximar as pessoas dos cursos d´água e melhorar a drenagem superficial urbana. Além disso, a abertura promove o contato dos corpos d´água com a atmosfera, colaborando para o ressurgimento da vida aquática e ciliar.'
  },
  '_1B': {
  'titulo': 'Qualificação de córregos abertos',
  'texto': '1B. Qualificar córregos abertos é uma solução adotada para reaproximar as pessoas dos cursos d´água, aproveitando as estruturas existentes para implantação de percursos leves para pedestres e ciclistas, sem comprometer a capacidade de vazão atual.'
  },
  '_2A': {
  'titulo': 'Implantar canteiros drenantes',
  'texto': '2A. Implantar canteiros drenantes em vias públicas é uma forma de reduzir o escoamento superficial das águas pluviais em direção às áreas de alagamento, ao mesmo tempo em que se qualifica as vias públicas com jardins lineares.'
  },
  '_2B': {
  'titulo': 'Implantar pisos drenantes',
  'texto': '2B. Implantar pisos drenantes em vias públicas estreitas é uma forma de reduzir o escoamento superficial das águas pluviais em direção às áreas de alagamento sem diminuir o espaço dos passeios públicos.'
  },
  '_3A': {
  'titulo': 'Praças secas rebaixadas',
  'texto': '3A. Implantar praças de acumulação com capacidade de receber, reter e retardar a descida de grandes volumes d´água durante as chuvas mais intensas contribui para a redução de enchentes e alagamentos e promove espaços públicos para atividades de esporte e lazer.'  
  },
  '_3B': {
  'titulo': 'Praças de absorção',
  'texto': '3B. Implantar praças permeáveis capazes de absorver grandes volumes de água durante as chuvas mais intensas contribui para a redução de enchentes e alagamentos, ao passo em que o plantio de espécies adaptadas às cheias promove áreas ajardinadas de contemplação.'
  },
  '_3C': {
  'titulo': 'Alças de pontes',
  'texto': '3C. Implantar praças com capacidade de absorção das águas pluviais em alças de pontes localizadas sobre fozes de tributários do Rio Tietê contribui para a redução de enchentes e alagamentos, ao passo em que a qualificação destas áreas promove melhoria na acessibilidade aos passeios das pontes existentes.'
  },
  '_4A': {
  'titulo': 'Parques lineares',
  'texto': '4A. A recuperação ambiental das margens do sistema hídrico, além de reaproximar as pessoas dos córregos, colabora para a infiltração e armazenamento da água no lençol freático e para o surgimento da mata ciliar, importante componente para a produção de alimentos para a fauna aquática.'
  },
  '_4B': {
  'titulo': 'Novos parques',
  'texto': '4B. Implantar novos parques aumenta a oferta de áreas de lazer, convívio e contemplação no Arco Tietê, além de colaborar para a absorção da irradiação solar, amenização das ilhas de calor e aumento da umidade relativa do ar.'
  },
  '_5A': {
  'titulo': 'Requalificação de praças existentes',
  'texto': '5A. Requalificar praças existentes aumentando sua arborização e promovendo novos espaços de lazer qualificados é uma estratégia para reaproximar a população local dos espaços públicos hoje subutilizados.'
  },
  '_5B': {
  'titulo': 'Praças oriundas de destinação obrigatória',
  'texto': '5B. Implantar praças oriundas do parcelamento de grandes lotes é uma estratégia de garantia para sua integração à rede de espaços públicos e equipamentos projetada para todo o Arco Tietê, evitando espaços verdes isolados e de difícil acesso.'
  },
  '_5C': {
  'titulo': 'Praças sobre túneis',
  'texto': '5C. Implantar praças sobre túneis, com novas vias locais perimetrais, é uma estratégia para que os espaços hoje ocupados pelas linhas de alta tensão (futuramente enterradas) sejam utilizados pela população, evitando a ruptura dos espaços públicos e criando novas frentes urbanas.'
  },
  '_5D': {
  'titulo': 'Praças sob viadutos',
  'texto': '5D. Implantar praças sob viadutos, com novas vias locais perimetrais, é uma estratégia para que os baixios de viadutos não se tornem fundos subutilizados da cidade, mas sim novos espaços públicos com potencial de gerar novas frentes urbanas.'
  },
  '_5E': {
  'titulo': 'Novas praças',
  'texto': '5E. Implantar novas praças aumenta a oferta de áreas de lazer, convívio e contemplação aos moradores dos bairros, além de colaborar para a absorção da irradiação solar, amenização das ilhas de calor e aumento da umidade relativa do ar.'
  },
  '_6A': {
  'titulo': 'Alamedas',
  'texto': '6A. A implantação de alamedas proporciona percursos sombreados aos pedestres e ciclistas e colabora para a formação de um sistema ambiental em rede, conectando áreas verdes, equipamentos e estações do trem e do metrô.'
  },
  '_6B': {
  'titulo': 'Bulevares',
  'texto': '6B. A implantação de bulevares ao longo de vias públicas que priorizam o transporte público colabora para o desenvolvimento urbano ao longo dos eixos de transporte e para a formação de um sistema ambiental em rede.'
  },
  '_7A': {
  'titulo': 'Abertura de novo viário',
  'texto': '7A. A abertura de novas vias públicas que rompem com as grandes quadras, aumenta a interligação entre áreas do Arco Tietê que hoje se encontram isoladas e possibilita a emergência de novas frentes urbanas.'
  },
  '_7B': {
  'titulo': 'Alargamento de viário existente',
  'texto': '7B. Alargar vias públicas atualmente subdimensionadas assegura que os fluxos de pedestres e ciclistas possam ser garantidos ao lado de automóveis e, eventualmente, ônibus, promovendo diversidade modal às áreas de desenvolvimento urbano.'
  },
  '_7C': {
  'titulo': 'Requalificação de viário existente',
  'texto': '7C. A requalificação do sistema viário é uma estratégia utilizada em vias públicas que devem receber reformas tanto em seus passeios quanto em seu leito carroçável, sem desapropriação, a fim de qualificar a circulação de todos os modos de transporte.'
  },
  '_8A': {
  'titulo': 'Ampliação e melhoria de passeios existentes',
  'texto': '8A. Requalificar os passeios por meio do redesenho de sua geometria, seja ampliando-o em detrimento do leito carroçável, seja diminuindo curvaturas para reduzir a velocidade dos automóveis, incentiva a locomoção de pedestres e ciclistas pela cidade.'
  },
  '_8B': {
  'titulo': 'Acesso - rampas e escadarias',
  'texto': '8B. Implantar novos acessos verticais por meio de rampas e escadarias associadas a passeios e espaços públicos é uma estratégia para promover acessibilidade às áreas com grandes desníveis no tecido urbano.'
  },
  '_9A': {
  'titulo': 'Ciclopassarelas sobre ferrovia',
  'texto': '9A. Implantar novas travessias sobre a ferrovia, associadas a equipamentos, espaços públicos e estações de trem, que priorizem deslocamentos a pé e de bicicleta, garante novas conexões entre bairros e a melhoria no acesso ao trabalho, aos serviços e aos equipamentos públicos.'
  },
  '_9B': {
  'titulo': 'Ciclopassarela sob ferrovia',
  'texto': '9B. Implantar novas travessias sob a ferrovia associadas a equipamentos, espaços públicos e estações de trem, que priorizem deslocamentos a pé e de bicicleta, garante novas conexões entre bairros e a melhoria no acesso ao trabalho, aos serviços e aos equipamentos públicos.'
  },
  '_9C': {
  'titulo': 'Ciclopassarela sobre rios ou córregos',
  'texto': '9C. Implantar novas travessias sobre o Rio Tietê, associadas a equipamentos ou espaços públicos, que priorizem deslocamentos a pé e de bicicleta, garante maior conexão entre as margens do rio, promovendo novos eixos de integração do tecido urbano. '
  },
  '_10A': {
  'titulo': 'Enterramento de linhas de alta tensão',
  'texto': '10A. O enterramento das linhas de alta tensão é uma solução adotada para a implantação de novas vias públicas e áreas verdes sem a necessidade de desapropriação de moradores.'
  },
  '_10B': {
  'titulo': 'Implantar infraestrutura de Tecnologia da Informação (TI) e incentivar setor de negócios',
  'texto': '10B. A implantação de infovias é uma estratégia adotada para incentivar usos produtivos ao longo dos eixos estratégicos.'
  },
  '_10C': {
  'titulo': 'Garantir a permanência de usos produtivos e potencializar a circulação e logística',
  'texto': '10C. Manter e potencializar unidades produtivas dentro das ZDEs e ZPIs definidas pela LPUOS de 2016 é uma estratégia para proteger territórios produtivos da incorporação residencial vertical. A melhoria dos espaços de circulação e logística deve proporcionar a modernização da economia dos setores envolvidos em cada zona produtiva.'
  },
  '_10D': {
    'titulo': 'Incentivar o parcelamento de grandes lotes com manutenção de uso',
    'texto': '10D. Incentivar o parcelamento de grandes lotes com manutenção de uso é uma estratégia adotada para que grandes terrenos mantenham os usos produtivos existentes, podendo desmembrar uma fração do lote, desde que destinem áreas verdes, institucionais e de sistema viário proporcionais à área desmembrada.'
  },
  '_11A': {
  'titulo': 'Equipamentos em terrenos públicos subutilizados',
  'texto': '11A. Implantar novos equipamentos em terrenos públicos subutilizados é uma forma de aproveitar áreas do Arco Tietê providas de infraestrutura e próximas às áreas de adensamento populacional e construtivo previsto.'
  },
  '_11B': {
  'titulo': 'Equipamentos em galpões existentes de valor histórico',
  'texto': '11B. Implantar equipamentos públicos em edifícios de valor histórico é uma forma de preservá-los através da renovação de seu uso, além de promover a sua resignificação para a população.'
  },
  '_11C': {
  'titulo': 'Novos Equipamentos',
  'texto': '11C. Implantar novos equipamentos no território do Arco Tietê é uma forma de aumentar a oferta atual e preparar o território para o adensamento populacional e construtivo previsto.'
  },
  '_11D': {
  'titulo': 'Equipamentos oriundos de destinação de grandes lotes',
  'texto': '11D. Implantar equipamentos em áreas oriundas do parcelamento de grandes lotes é uma estratégia para garantir sua integração à rede de espaços públicos e equipamentos projetada para todo o Arco Tietê, evitando o surgimento de áreas institucionais isoladas e de difícil acesso.'
  },
  '_12A': {
  'titulo': 'Implantação em grandes lotes / glebas',
  'texto': '12A. Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12B': {
  'titulo': 'Pequenas praças como espaços de socialização',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12C': {
  'titulo': 'Divisões condominiais com poucas unidades habitacionais e divididos por faixa de atendimento',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12D': {
  'titulo': 'Fachada ativa',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12E': {
  'titulo': 'Demarcação de áreas para habitação em terrenos menores, distribuídos pelo território',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12F': {
  'titulo': 'Taxas de ocupação mais altas em áreas próximas às áreas verdes',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  },
  '_12G': {
  'titulo': 'Maiores áreascondominiais verdes em regiões com pouca oferta de áreas verdes',
  'texto': 'Implantar Conjuntos de Habitação Social de dimensões menores e mais espalhados pelo território, contemplando fachadas ativas, faixas de fruição pública, mix de rendas e espaços públicos de qualidade, procurando ao máximo relacionar os conjuntos com o espaço urbano à sua volta;'
  }
};

// OUTROS PERIMETROS
const outrosPerimetros = {
  'AIU_APOIOS': {
    'titulo': 'Área de Intervenção Urbana - Apoios Urbanos',
    'texto': 'Os Apoios Urbanos são as áreas envoltórias dos eixos de mobilidade, associados a infraestruturas de drenagem, distribuição de energia e telecomunicações. Associados a estes eixos propõem-se uma rede de espaços livres e equipamentos urbanos que apoiarão o adensamento populacional e construtivo pretendido, articulando a criação de novos postos de trabalho e à oferta de unidades habitacionais. Implantados junto à planície fluvial e paralelos ao rio, propiciam o desenvolvimento social, econômico e ambiental em seu entorno e integram os bairros a norte e a sul do rio Tietê.'
  },
  'AIU_CENTRALIDADE': {
    'titulo': 'Área de Intervenção Urbana - Centralidade da Metrópole',
    'texto': 'O Projeto da Centralidade da Metrópole aborda a consolidação de uma CENTRALIDADE, localizada no núcleo do Arco Tietê, cujo desenvolvimento pretende a urbanização propícia para o desenvolvimento de atividades de escala metropolitana associada à qualificação social e ambiental junto às margens do Rio, articulando o perímetro com o eixo norte-sul da cidade de São Paulo e seus fluxos de mobilidade, economia e infraestrutura.'
  },
  'AIU_LAPA': {
    'titulo': 'Área de Intervenção Urbana - Lapa',
    'texto': 'O projeto urbanístico se estrutura a partir de dois Eixos Estratégicos norte-sul que cruzam o Rio Tietê, localizados ao longo dos córregos hoje tamponados do Curtume (Rua Antônio Ibrahim) e Tiburtino (Av. José Maria de Faria). O alargamento viário desses dois eixos, o destamponamento do Córrego do Curtume e a revalorização da praça do eixo do Tiburtino, darão condições para a criação de amplos passeios, parques lineares e praças associadas ao sistema de drenagem urbana, em cujas áreas lindeiras será induzido o desenvolvimento da atividade imobiliária de uso misto com alta densidade e a fachada ativa. O prolongamento destes eixos deve transpor o Rio Tietê e a ferrovia, conectando os Bairros da Lapa e Freguesia do Ó.'
  }
};
const legenda = "<div id='g-legenda03-box' class='ai2html'><!-- Generated by ai2html v0.61 - 2016-10-25 - 17:56 --><!-- ai file: legenda03 --><style type='text/css' media='screen,print'>.g-artboard {margin:0 auto;}</style><!-- Artboard: Prancheta_1 --><div id='g-legenda03-Prancheta_1' class='g-artboard g-artboard-v3 ' data-min-width='945'><style type='text/css' media='screen,print'>#g-legenda03-Prancheta_1{position:relative;overflow:hidden;width:945px;}.g-aiAbs{position:absolute;}.g-aiImg{display:block;width:100% !important;}#g-legenda03-Prancheta_1 p{font-family:nyt-franklin,arial,helvetica,sans-serif;font-size:13px;line-height:18px;margin:0;}#g-legenda03-Prancheta_1 .g-aiPstyle0 {font-family:arial,helvetica,sans-serif;line-height:16px;font-weight:bold;color:#000000;}#g-legenda03-Prancheta_1 .g-aiPstyle1 {font-family:arial,helvetica,sans-serif;line-height:16px;font-weight:bold;text-align:right;color:#000000;}#g-legenda03-Prancheta_1 .g-aiPstyle2 {font-family:arial,helvetica,sans-serif;font-size:11px;line-height:13px;font-weight:bold;color:#000000;}#g-legenda03-Prancheta_1 .g-aiPstyle3 {font-family:arial,helvetica,sans-serif;font-size:11px;line-height:13px;color:#000000;}#g-legenda03-Prancheta_1 .g-aiPstyle4 {font-family:arial,helvetica,sans-serif;font-size:11px;line-height:15px;color:#000000;}.g-aiPtransformed p { white-space: nowrap; }</style><div id='g-legenda03-Prancheta_1-graphic'><img id='g-ai0-0' class='g-aiImg' src='http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/legenda03-Prancheta_1.png'/><div id='g-ai0-1' class='g-Camada_1 g-aiAbs' style='top:0.4107%;left:0%;'><p class='g-aiPstyle0'>REDE HÍDRICA</p></div><div id='g-ai0-2' class='g-Camada_1 g-aiAbs' style='top:0.4107%;right:45.657%;'><p class='g-aiPstyle1'>REDE DE ESPAÇO PÚBLICO</p></div><div id='g-ai0-3' class='g-Camada_1 g-aiAbs' style='top:0.616%;right:16.0994%;'><p class='g-aiPstyle1'>REDE DE MOBILIDADE</p></div><div id='g-ai0-4' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:0%;'><p class='g-aiPstyle2'>1.</p></div><div id='g-ai0-5' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:0.9897%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-6' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:3.9153%;'><p class='g-aiPstyle2'>Recuperação de Córregos</p></div><div id='g-ai0-7' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:34.8341%;'><p class='g-aiPstyle2'>4.</p></div><div id='g-ai0-8' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:35.8238%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-9' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:38.7494%;'><p class='g-aiPstyle2'>Parques</p></div><div id='g-ai0-10' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:68.1748%;'><p class='g-aiPstyle2'>7.</p></div><div id='g-ai0-11' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:69.1644%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-12' class='g-Camada_1 g-aiAbs' style='top:6.7762%;left:72.0902%;'><p class='g-aiPstyle2'>Sistema Viário</p></div><div id='g-ai0-13' class='g-Camada_1 g-aiAbs' style='top:10.4723%;left:3.9153%;'><p class='g-aiPstyle3'>a. Destamponamento</p></div><div id='g-ai0-14' class='g-Camada_1 g-aiAbs' style='top:10.4723%;left:38.7494%;'><p class='g-aiPstyle3'>a. Parques lineares</p></div><div id='g-ai0-15' class='g-Camada_1 g-aiAbs' style='top:10.4723%;left:72.0902%;'><p class='g-aiPstyle3'>a. Abertura de novo viário</p></div><div id='g-ai0-16' class='g-Camada_1 g-aiAbs' style='top:13.5524%;left:38.7494%;'><p class='g-aiPstyle3'>b. Outros parques</p></div><div id='g-ai0-17' class='g-Camada_1 g-aiAbs' style='top:15.6057%;left:72.0902%;'><p class='g-aiPstyle3'>b. Alargamento de viário existente</p></div><div id='g-ai0-18' class='g-Camada_1 g-aiAbs' style='top:15.6057%;left:3.9153%;'><p class='g-aiPstyle3'>b. Qualificação de córregos abertos</p></div><div id='g-ai0-19' class='g-Camada_1 g-aiAbs' style='top:20.5339%;left:72.0902%;'><p class='g-aiPstyle3'>c. Requalificação de viário existente</p></div><div id='g-ai0-20' class='g-Camada_1 g-aiAbs' style='top:21.3552%;left:34.8341%;'><p class='g-aiPstyle2'>5.</p></div><div id='g-ai0-21' class='g-Camada_1 g-aiAbs' style='top:21.3552%;left:35.8238%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-22' class='g-Camada_1 g-aiAbs' style='top:21.3552%;left:38.7494%;'><p class='g-aiPstyle2'>Praças</p></div><div id='g-ai0-23' class='g-Camada_1 g-aiAbs' style='top:23.614%;left:0%;'><p class='g-aiPstyle2'>2.</p></div><div id='g-ai0-24' class='g-Camada_1 g-aiAbs' style='top:23.614%;left:3.9153%;'><p class='g-aiPstyle2'>Eixos drenantes</p></div><div id='g-ai0-25' class='g-Camada_1 g-aiAbs' style='top:24.0246%;left:0.9897%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-26' class='g-Camada_1 g-aiAbs' style='top:24.6407%;left:38.7495%;width:26.6387%;'><p class='g-aiPstyle3'>a. Requalificação de praças existentes</p><p class='g-aiPstyle3'>b. Praças oriundas de destinação obrigatoria</p><p class='g-aiPstyle3'>c. Praças sobre túneis</p><p class='g-aiPstyle3'>d. Praças sob viadutos</p><p class='g-aiPstyle3'>e. Outras praças</p></div><div id='g-ai0-27' class='g-Camada_1 g-aiAbs' style='top:26.694%;left:3.9153%;'><p class='g-aiPstyle3'>a. Canteiros drenantes</p></div><div id='g-ai0-28' class='g-Camada_1 g-aiAbs' style='top:28.5421%;left:68.1748%;'><p class='g-aiPstyle2'>8.</p></div><div id='g-ai0-29' class='g-Camada_1 g-aiAbs' style='top:28.5421%;left:69.1644%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-30' class='g-Camada_1 g-aiAbs' style='top:28.5421%;left:72.0902%;'><p class='g-aiPstyle2'>Passeios</p></div><div id='g-ai0-31' class='g-Camada_1 g-aiAbs' style='top:29.5688%;left:3.9153%;'><p class='g-aiPstyle3'>b. Pisos drenantes</p></div><div id='g-ai0-32' class='g-Camada_1 g-aiAbs' style='top:32.2382%;left:72.0902%;'><p class='g-aiPstyle3'>a. Ampliação e melhoria de passeios </p><p class='g-aiPstyle3'><strong style='color:white'>....</strong>existentes</p></div><div id='g-ai0-33' class='g-Camada_1 g-aiAbs' style='top:37.577%;left:3.9153%;'><p class='g-aiPstyle2'>Áreas de absorção</p></div><div id='g-ai0-34' class='g-Camada_1 g-aiAbs' style='top:37.7823%;left:72.0902%;'><p class='g-aiPstyle3'>b. Acessos &ndash; rampas e escadarias</p></div><div id='g-ai0-35' class='g-Camada_1 g-aiAbs' style='top:37.7823%;left:0%;'><p class='g-aiPstyle2'>3.</p></div><div id='g-ai0-36' class='g-Camada_1 g-aiAbs' style='top:37.7823%;left:0.9897%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-37' class='g-Camada_1 g-aiAbs' style='top:41.2731%;left:3.9153%;'><p class='g-aiPstyle3'>a. Praças de acumulação</p></div><div id='g-ai0-38' class='g-Camada_1 g-aiAbs' style='top:43.1211%;left:34.8341%;'><p class='g-aiPstyle2'>6.</p></div><div id='g-ai0-39' class='g-Camada_1 g-aiAbs' style='top:43.1211%;left:35.8238%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-40' class='g-Camada_1 g-aiAbs' style='top:43.1211%;left:38.7494%;'><p class='g-aiPstyle2'>Eixos Ambientais </p></div><div id='g-ai0-41' class='g-Camada_1 g-aiAbs' style='top:44.3532%;left:3.9153%;'><p class='g-aiPstyle3'>b. Praças de absorção</p></div><div id='g-ai0-42' class='g-Camada_1 g-aiAbs' style='top:45.5852%;left:68.1748%;'><p class='g-aiPstyle2'>9.</p></div><div id='g-ai0-43' class='g-Camada_1 g-aiAbs' style='top:45.5852%;left:69.1644%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-44' class='g-Camada_1 g-aiAbs' style='top:45.5852%;left:72.0902%;'><p class='g-aiPstyle2'>Transposições </p></div><div id='g-ai0-45' class='g-Camada_1 g-aiAbs' style='top:46.8172%;left:38.7494%;'><p class='g-aiPstyle3'>a. Alamedas </p></div><div id='g-ai0-46' class='g-Camada_1 g-aiAbs' style='top:47.4333%;left:3.9153%;'><p class='g-aiPstyle3'>c. Alças de pontes</p></div><div id='g-ai0-47' class='g-Camada_1 g-aiAbs' style='top:49.2813%;left:72.0902%;'><p class='g-aiPstyle3'>a. Ciclopassarelas sobre ferrovia</p></div><div id='g-ai0-48' class='g-Camada_1 g-aiAbs' style='top:51.9507%;left:38.7494%;'><p class='g-aiPstyle3'>b. Bulevares</p></div><div id='g-ai0-49' class='g-Camada_1 g-aiAbs' style='top:52.3614%;left:72.0902%;'><p class='g-aiPstyle3'>b. Ciclopassarelas sob ferrovia</p></div><div id='g-ai0-50' class='g-Camada_1 g-aiAbs' style='top:55.2361%;left:72.0902%;'><p class='g-aiPstyle3'>c. Ciclopassarelas sobre rios ou córregos</p></div><div id='g-ai0-51' class='g-Camada_1 g-aiAbs' style='top:61.807%;left:0%;'><p class='g-aiPstyle0'>INFRAESTRUTURA</p><p class='g-aiPstyle0'>E BASE PRODUTIVA</p></div><div id='g-ai0-52' class='g-Camada_1 g-aiAbs' style='top:64.8871%;right:46.8885%;'><p class='g-aiPstyle1'>EQUIPAMENTOS PÚBLICO</p></div><div id='g-ai0-53' class='g-Camada_1 g-aiAbs' style='top:66.7351%;right:12.3677%;'><p class='g-aiPstyle1'>PRODUÇÃO HABITACIONAL</p></div><div id='g-ai0-54' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:0%;'><p class='g-aiPstyle2'>10.</p></div><div id='g-ai0-55' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:1.6369%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-56' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:3.9153%;'><p class='g-aiPstyle2'>Espaço Produtivo</p></div><div id='g-ai0-57' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:34.7902%;'><p class='g-aiPstyle2'>11.</p></div><div id='g-ai0-58' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:36.4271%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-59' class='g-Camada_1 g-aiAbs' style='top:71.2526%;left:38.7055%;'><p class='g-aiPstyle2'>Equipamentos Públicos</p></div><div id='g-ai0-60' class='g-Camada_1 g-aiAbs' style='top:73.1006%;left:68.0989%;'><p class='g-aiPstyle2'>12.</p></div><div id='g-ai0-61' class='g-Camada_1 g-aiAbs' style='top:73.1006%;left:69.7358%;'><p class='g-aiPstyle2'> </p></div><div id='g-ai0-62' class='g-Camada_1 g-aiAbs' style='top:73.1006%;left:72.0142%;'><p class='g-aiPstyle2'>Produção Habitacional</p></div><div id='g-ai0-63' class='g-Camada_1 g-aiAbs' style='top:74.7433%;left:3.9153%;width:22.4339%;'><p class='g-aiPstyle4'>a. Enterramento de linhas de alta tensão</p></div><div id='g-ai0-64' class='g-Camada_1 g-aiAbs' style='top:74.9487%;left:38.7486%;width:23.2804%;'><p class='g-aiPstyle3'>a. Equipamentos em terrenos públicos </p><p class='g-aiPstyle3'><strong style='color:white'>....</strong>subutilizados</p><p class='g-aiPstyle3'>b. Equipamentos em galpões existentes de </p><p class='g-aiPstyle3'><strong style='color:white'>....</strong>valor histórico</p><p class='g-aiPstyle3'>c. Novos equipamentos</p><p>&nbsp;</p></div><div id='g-ai0-65' class='g-Camada_1 g-aiAbs' style='top:76.5914%;left:72.0142%;width:18.6243%;'><p class='g-aiPstyle4'>a. Implantação em grandes </p><p class='g-aiPstyle3'><strong style='color:white'>....</strong>lotes / glebas</p><p>&nbsp;</p></div><div id='g-ai0-66' class='g-Camada_1 g-aiAbs' style='top:79.8768%;left:3.9153%;'><p class='g-aiPstyle4'>b. Implantação de infovia</p></div><div id='g-ai0-67' class='g-Camada_1 g-aiAbs' style='top:85.0103%;left:3.9153%;'><p class='g-aiPstyle3'>c. Usos produtivos</p></div><div id='g-ai0-68' class='g-Camada_1 g-aiAbs' style='top:91.3758%;left:38.7485%;width:21.0229%;'><p class='g-aiPstyle4'>d. Equipamentos oriundos de</p><p class='g-aiPstyle3'><strong style='color:white'>....</strong>destinação de grandes lotes</p><p>&nbsp;</p></div></div></div><!-- End ai2html - 2016-10-25 - 17:56 --></div>";
const uploadsDir = "http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/";
var iconFilename = "icone-mapa_11.png";
var cLayer;
var isModal;
var isReallyOpen;
var spCoords = [-5193000, -2695000];
window.onerror = function(){
   return true;
}
// Working
var extent = [-5204950,-2698891,-5181999,-2690035];
var mapImageLayer = new ol.layer.Image({
      source: new ol.source.ImageStatic({
        url: 'http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/tiete_bg.png',
        imageExtent: extent,
        projection: 'EPSG:3857'
      })
    });

// var defaultImg = 'http://gestaourbana.prefeitura.sp.gov.br/wp-content/uploads/2014/08/arco_tiete.jpg';
var cImage;
var proposta;
var acoesIlustradas = '';
var imgUrl;
var mapLayers;
var enlargeThumb;
var enlargeGifThumb;
var arcoFeature;
var kmlUrls;
var currentLayer;


function readProp(obj, prop) {
    return obj[prop];
}
var strokeLineDash = [0];

var lStyle = new ol.style.Style({
          stroke: new ol.style.Stroke({
            color: 'rgba(80,120,200,0.8)',
            width: 2,
            lineDash: strokeLineDash
          }),
          fill: new ol.style.Fill({
            color: 'rgba(120,180,255,0.5)'
          })
        });

jQuery(document).ready(function() {
  jQuery('#legendaMapa').html(legenda);

  // Modal / Lightbox    
  var modal = jQuery('#tiete_container_lightbox');
  isModal = false;
  
  function fixaCloseBT(){
      isModal = true;
      var closeBT = jQuery('.close');
      var mContent = jQuery('.modal_content');
      jQuery('.close').css({'opacity': '1'});
      closeBT.offset({
          top: mContent.offset().top-2,
          left: mContent.offset().left+mContent.width()+20
      });
  }
  function confirmOpenModal(){
    isReallyOpen = true;
  }
  function openModal(){
    jQuery(modal).css({
        'opacity': '1',
        'max-height': '100%',
        'height': '100%',
        'overflow': 'auto',
    });
    jQuery('body').toggleClass('modal_open');

    var modCont = '<h3>'+proposta.titulo+'</h3>'+imgUrl+'<p>'+proposta.texto+'</p>';
    jQuery('#lightbox_content').html(jQuery('#infoContainer').html());    
    setTimeout(fixaCloseBT, 100);
    setTimeout(confirmOpenModal ,300);
  }
  function fechaModal(){
      jQuery('body').removeClass('modal_open');
      isModal = false;
      isReallyOpen = false;
      // hideLinks();
      jQuery('body').css('padding-right', 'initial');
      jQuery(modal).css({
          'opacity': '0',
          'height': '0',
          'overflow': 'hidden',
      });
      jQuery('.close').css({'opacity': '0'});
  }
  enlargeThumb = function(code){
    proposta = readProp(information, '_'+code);
    imgUrl = "<img src='" + "http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/"+code+".png' alt='"+proposta.titulo+"' />";
    jQuery('#propostaTitulo').html(proposta.titulo);      
    jQuery('#propostaTexto').html(proposta.texto);
    jQuery('#propostaImagem').html('<img src="' + 'http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/'+code+'.png" alt="'+code+'" />');
    jQuery('#tiete_container_lightbox').css({
        'opacity': '1',
        'max-height': '100%',
        'height': '100%',
        'overflow': 'auto',
    });    
    jQuery('body').toggleClass('modal_open');

    // var modCont = '<h3>'+proposta.titulo+'</h3>'+imgUrl+'<p>'+proposta.texto+'</p>';
    jQuery('#lightbox_content').html(jQuery('#infoContainer').html());
    isModal = true;
    setTimeout(fixaCloseBT, 100);
    setTimeout(confirmOpenModal, 300);
  }

  enlargeAiuThumb = function(code){
    proposta = readProp(outrosPerimetros, code);
    imgUrl = "<img src='"+uploadsDir+code+".jpg' alt='"+proposta.titulo+"' />";
    jQuery('#propostaTitulo').html(proposta.titulo);      
    jQuery('#propostaTexto').html(proposta.texto);
    jQuery('#propostaImagem').html(imgUrl);
    jQuery('#tiete_container_lightbox').css({
        'opacity': '1',
        'max-height': '100%',
        'height': '100%',
        'overflow': 'auto',
    });
    jQuery('body').toggleClass('modal_open');

    // var modCont = '<h3>'+proposta.titulo+'</h3>'+imgUrl+'<p>'+proposta.texto+'</p>';
    jQuery('#lightbox_content').html(jQuery('#infoContainer').html());
    isModal = true;
    setTimeout(fixaCloseBT, 100);
  }
  
  ///  ATUALIZA INFORMAÇÕES DO MODAL
  var updateModal = function(layer) {
    if (layer.get('name') !== '21') {
      var layerName = layer.get('name');
      proposta = readProp(information, layerName); 
      if(proposta != undefined){
        imgUrl = "<img src='" + "http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/"+layerName.split('_')[1]+".png' alt='"+proposta.titulo+"' />";
        jQuery('#propostaTitulo').html(proposta.titulo);      
        jQuery('#propostaImagem').html(imgUrl);
        jQuery('#propostaTexto').html(proposta.texto);      
      }
      else
        return;
    } else {
      jQuery('#propostaTitulo').html('Clique no perímetro desejado para obter mais informações.');      
      jQuery('#propostaImagem').html('');
      jQuery('#propostaTexto').html('');
    }
  };

  /// GIF DA PROPOSTA 12A
  enlargeGifThumb = function(gifCode) {
    proposta = readProp(information, '_'+gifCode);
    gifUrl = '<img src="'+uploadsDir+gifCode+'.gif" alt="'+gifCode+'" />';
    jQuery('#propostaTitulo').html(proposta.titulo);
    jQuery('#propostaTexto').html('');
    jQuery('#propostaImagem').html(gifUrl);
    jQuery('#tiete_container_lightbox').css({
        'opacity': '1',
        'max-height': '100%',
        'height': '100%',
        'overflow': 'auto',
    });
    jQuery('body').toggleClass('modal_open');
    jQuery('#lightbox_content').html(jQuery('#infoContainer').html());
    isModal = true;
    setTimeout(fixaCloseBT, 100);
  }

  jQuery(document).mouseup(function (e){
      if(isReallyOpen) {
        var container = jQuery(".modal_content");
        if (!container.is(e.target) // se o alvo não for o container
            && (container.has(e.target).length === 0) // ...nem um filho do container
            && (e.target != jQuery('html').get(0))) // nem a scrollbar
        {
            fechaModal();
        }
      }
  });

  jQuery(".close").click(fechaModal);
  /// End Modal / Lightbox

  /// Adiciona camadas ao array mapLayers    

  /// CAMADAS
  mapLayers = [new ol.layer.Tile({
    // source: new ol.source.OSM()
    source: new ol.source.BingMaps({key: 'AsOanmHkUY8fnofQzDZbdilguBznksMGkjFh0OqiY7mrzoMP7Nj_hUA6Vx5HP9-h', imagerySet: 'AerialWithLabels', culture: 'pt-BR'})
  })];
  /// DEFINE NOME DO MAPA
  mapLayers[0].set("name","20");
  
  lStyle = new ol.style.Style({
              stroke: new ol.style.Stroke({
                color: 'rgba(243,146,0,0.8)',
                width: 2
              }),
              fill: new ol.style.Fill({
                color: 'rgba(255,255,255,0.2)'
              })
            });
  var perimetroMaior = platMapAPI.createCustomVectorLayerFromKML("http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/PerimetroACT.kml", lStyle);
  perimetroMaior.set("name", "21"); 
  mapLayers.push(perimetroMaior);
  
  /// OUTROS PERIMETROS  
  var aiuStyle = new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: '#eee',
      width: 1
    })
  });
  /// ÁREAS DE INTERVENÇÃO URBANA (APOS ACOES ILUSTRADAS)
  var aiusThumbs = '';
  for(aiu in outrosPerimetros){
    var perimetro = platMapAPI.createCustomVectorLayerFromKML(uploadsDir+aiu+'.kml', aiuStyle);
    perimetro.set("name", aiu);    
    mapLayers.push(perimetro);

    var _prop = readProp(outrosPerimetros, aiu);
    var thumb = '<img src="'+uploadsDir+aiu+'_thumb.png" onclick="enlargeAiuThumb(\''+aiu+'\')" alt="'+aiu+'" width="150" />';
    var pTitle = _prop.titulo;
    pTitle = pTitle.split('-')[1];
    var box = '<div><h5>'+pTitle+'</h5>'+thumb+'<p>'+_prop.texto+'</p></div>';
    aiusThumbs += box;
  }

  kmlUrls = [];
  /// CORREÇÃO PARA AUSÊNCIA DE INFORMAÇÃO
  var propsNumber = 0;
  for (codigo in information){
    propsNumber++;
    var splitCode = codigo.split('_')[1];
    // ITERAÇÃO CANCELADA - ORDEM ESPECÍFICA DE CAMADAS
    // kmlUrls.push(splitCode+'.kml');
    if(propsNumber < 33 && splitCode != "10D") {
      var _prop = readProp(information, codigo);
      var thumb = '<img src="' + 'http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/'+splitCode+'_thumb.png" onclick="enlargeThumb(\''+splitCode+'\')" alt="'+codigo+'" width="150" />';
      var box = '<div>'+thumb+'<p>'+_prop.texto+'</p></div>';
      acoesIlustradas += box;
    }
  }
  // ACRESCENTA GIF (IMPLEMENTADO POSTERIORMENTE)
  var gif = '<div><img src="'+uploadsDir+'12A-thumb.gif" onclick="enlargeGifThumb(\'12A\')" alt="12A" /></div>';
  acoesIlustradas += gif;
  jQuery('#acoesIlustradas').html(acoesIlustradas);
  jQuery('#aius').html(aiusThumbs);
  
  kmlUrls = [
  "9A.kml", 
  "9B.kml", 
  "9C.kml", 
  "10A.kml", 
  "10B.kml", 
  "10C.kml", 
  //"10D.kml",
  "11A.kml", 
  "11B.kml", 
  "11C.kml", 
  "11D.kml", 
  "12A.kml", 
  // "12B.kml", 
  // "12C.kml", 
  // "12D.kml", 
  // "12E.kml", 
  // "12F.kml", 
  // "12G.kml",
  "6A.kml", 
  "6B.kml", 
  "1A.kml",
  "1B.kml",
  "2A.kml", 
  "2B.kml", 
  "3A.kml", 
  "3B.kml", 
  "3C.kml", 
  "4A.kml", 
  "4B.kml", 
  "5A.kml", 
  "5B.kml", 
  "5C.kml", 
  "5D.kml", 
  "5E.kml", 
  "8A.kml", 
  // "8B.kml", 
  "7A.kml", 
  "7B.kml", 
  "7C.kml",
  
  ];

  // for (var i = 0; i < kmlUrls.length; i++) {
  for (var i = kmlUrls.length-1; i >= 0; i--) {
    var nome = '_'+kmlUrls[i].split('.')[0];
    
    /// Estilo
    var perimCode = parseInt(nome.replace(/[^0-9\.]/g, ''), 10);
    var perimSubcode = nome.split(perimCode)[1];
    var pStrCol = 'rgba(80,120,200,0.8)';
    var pFillCol = 'rgba(80,120,200,0.5)';
    var pWidth = 2;
    var pDash = [0];

    switch (perimCode) {
      case 1:
        pStrCol = 'rgba(120,181,220,0.95)';
        pWidth = 3;
        pDash = [9,8];
        break;
      case 2:
        pStrCol = 'rgba(60,90,131,0.95)';
        pWidth = 3;
        pDash = [7,15];
        break;
      case 3:
        pStrCol = 'rgba(172,189,211,0.95)';
        break;
      case 4:
        pStrCol = 'rgba(71,105,52,0.95)';
        break;
      case 5:
        pStrCol = 'rgba(138,181,61,0.95)';
        break;
      case 6:
        pStrCol = 'rgba(138,181,61,0.95)';
        if (perimSubcode == 'A') {
          pWidth = 3;
          pDash = [2,10];
        }
        else {
          pWidth = 5;
          pDash = [3,10];
        }
        break;
      case 7:
        pStrCol = 'rgba(234,187,46,0.95)';
        if(perimSubcode == 'C')
          pStrCol = 'rgba(249,233,185,0.95)';
        break;
      case 8:        
        pStrCol = 'rgba(216,133,46,0.95)';
        pWidth = 1;
        break;
      case 9:
        pStrCol = 'rgba(237,237,237,0.95)';
        break;
      case 10:       
        pStrCol = 'rgba(10,10,10,0.95)';
        pWidth = 4;
        // pDash = [0,10,0,10,1];
        pDash = [2, 6];
        if(perimSubcode == 'B' || perimSubcode == 'C') {
          pDash = [0];
          pWidth = 2;
        }
        if(perimSubcode == 'C' || perimSubcode == 'D') {
          pStrCol = 'rgba(200,0,0,0.95)';
          pWidth = 3
          if(perimSubcode == 'C'){
            pWidth = 2;
            pStrCol = 'rgba(244,189,189,0.95)';
          }
        }        
        break;
      case 11:
        pStrCol = 'rgba(193,66,146,0.95)';
        if(perimSubcode == 'D')
          continue;
        break;
      default:        
        break;
    }
    pFillCol = pStrCol.replace("0.95","0.25");

    lStyle = new ol.style.Style({
      stroke: new ol.style.Stroke({
        color: pStrCol,
        width: pWidth,
        lineDash: pDash
      }),
      fill: new ol.style.Fill({
        color: pFillCol
      })
    });
    /// END Estilo

    var camada = platMapAPI.createCustomVectorLayerFromKML(uploadsDir+kmlUrls[i], lStyle);
    camada.set("name",nome);

    mapLayers.push(camada);
  }

  /// FEATURES DO TIPO PONTO (ESPECÍFICAS)
  var pointLayers11 = ['11A_PONTO.kml', '11B_PONTO.kml', '11C_PONTO.kml','11D_PONTO.kml'];
  var pointLayers12 = ['12A.kml'];

  for (kml in pointLayers11) {
    estilo = platMapAPI.getStyleLayerWIcon(uploadsDir+'icone-mapa_11.png', 0.5, 0.85);
    var kName = pointLayers11[kml]+'';
    var nome = '_'+kName.split('_')[0];
    var camada = platMapAPI.createCustomVectorLayerFromKML(uploadsDir+pointLayers11[kml], estilo);
    camada.set("name",nome);

    mapLayers.push(camada);
  }

  for (kml in pointLayers12) {
    estilo = platMapAPI.getStyleLayerWIcon(uploadsDir+'icone-mapa_12.png', 0.5, 0.85);
    var kName = pointLayers12[kml]+'';
    var nome = '_'+kName.split('.')[0];
    var camada = platMapAPI.createCustomVectorLayerFromKML(uploadsDir+pointLayers12[kml], estilo);
    camada.set("name",nome);

    mapLayers.push(camada);
  }

  /// DECLARAÇÕES DO MAPA (VIEW, MAP, OVERLAY)
  var view = new ol.View({
    center: spCoords,
    zoom: 12,
    minZoom: 12,
    maxZoom: 30
  });
  
  var map = new ol.Map({
    layers: mapLayers,
    target: 'mapa',
    view: view
  });

  var featureOverlay = new ol.layer.Vector({
    source: new ol.source.Vector(),
    map: map,
    style: new ol.style.Style({
      stroke: new ol.style.Stroke({
        color: 'rgba(255,255,255,0.5)',
        width: 3,
        lineDash: strokeLineDash
      }),
      fill: new ol.style.Fill({
        color: 'rgba(255,255,255,0.2)'
      })
    })
  });

  var selectPointerMove = new ol.interaction.Select({
    condition: ol.events.condition.pointerMove,
    layers: function(layer){
      return layer.get('name') !== '21';
    },
    style: function(layer){
      if(layer.get('Layer') == '_HABITAÃÃO'){
        iconFilename = 'icone-mapa_12.png';
      }
      else {
        iconFilename = 'icone-mapa_11.png';
      }
      var style = new ol.style.Style({
        image: new ol.style.Icon({
               anchor: [0.5, 0.5],
               anchorXUnits: 'fraction',
               anchorYUnits: 'fraction',
               opacity: 1,
               scale: 1,
               src: uploadsDir+iconFilename
             }),
        stroke: new ol.style.Stroke({
          color: 'rgba(255,80,80,0.9)',
          width: 3
        }),
        fill: new ol.style.Fill({
          color: 'rgba(255,80,80,0.5)'
        })
      });
      currentLayer = layer;      
      return style;
    }
  });
  
  map.addInteraction(selectPointerMove);

  var getFeatureLayerInfo = function (pixel) {    
    cLayer = map.forEachLayerAtPixel(pixel, function (layer) {
      if(layer.get('name') != undefined){
        return layer;                     
      }
    });
    var feature = map.forEachFeatureAtPixel(pixel, function(feature){
      return feature;
    });
    
    if (feature && cLayer.get('name') !== '21' && cLayer.get('name') !== '_12A') {      
      var layer = cLayer.get('name');
      var isAIU = false;
      proposta = readProp(information, layer); 
      /// TRATA FEATURES DE OUTROS PERIMETROS
      for (aiu in outrosPerimetros){
        if(layer === aiu){
          proposta = readProp(outrosPerimetros, aiu);          
          isAIU = true;
        }
      }
      if(proposta != undefined){
        if(isAIU){
          imgUrl = "<img src='"+uploadsDir+layer+".jpg' alt='"+proposta.titulo+"' />";
        }
        else {
          imgUrl = "<img src='" + "http://gestaourbana.prefeitura.sp.gov.br/wp-content/themes/gestaourbana-1.2/uploads/"+layer.split('_')[1]+".png' alt='"+proposta.titulo+"' />";
        }
        jQuery('#propostaTitulo').html(proposta.titulo);      
        jQuery('#propostaImagem').html(imgUrl);
        jQuery('#propostaTexto').html(proposta.texto);      
      }
      else
        return;
    } 
    else if(cLayer.get('name') == '_12A'){
      enlargeGifThumb('12A');
      // fechaModal();
    }
    else if (cLayer.get('name') == '21'){
      var titulo = 'Plano Urbanístico do Arco Tietê';
      var texto = 'O Projeto de Intervenção Urbana (PIU) é um processo que reúne e articula os estudos técnicos necessários para promover o ordenamento e a reestruturação urbana em áreas subutilizadas e com potencial de transformação no Município de São Paulo. Regulamentado pelo Decreto Municipal 56.901/2016, é um projeto coordenado pelo poder público com o objetivo de proporcionar condições necessárias ao desenvolvimento urbano e econômico da cidade. Segundo as disposições do Artigo 134, do PDE, caberá ao município desenvolver Projetos de Intervenção Urbana para maior aproveitamento da terra urbana e o consequente aumento nas densidades construtivas e demográficas, implantação de novas atividades econômicas e emprego, atendimento às necessidades de habitação e de equipamentos sociais para a população. O Projeto de Intervenção Urbana (PIU) do Arco Tietê estabelece três territórios para a implantação de novas infraestruturas, parâmetros urbanísticos específicos, procedimentos de gestão e recursos para seu financiamento. São as Áreas de Intervenção Urbana (AIU) que surgem pela primeira vez desde a regulamentação do novo PDE e configuram uma oportunidade de transformação territorial e de ação coordenada entre as diversas agendas setoriais da cidade sobre um mesmo local.';
      imgUrl = "<img src='"+uploadsDir+"ACT.jpg' alt='"+titulo+"' />";
      jQuery('#propostaTitulo').html(titulo);
      jQuery('#propostaImagem').html(imgUrl);
      jQuery('#propostaTexto').html(texto);
    }
    else {
      jQuery('#propostaTitulo').html('Clique no perímetro desejado para obter mais informações.');      
      jQuery('#propostaImagem').html('');
      jQuery('#propostaTexto').html('');
    }
  };
  
  // MouseClick
  map.on('click', function (evt) {
    getFeatureLayerInfo(evt.pixel);    
    openModal();
  });

  // MouseOver
  map.on('pointermove', function (evt) {
    if (evt.dragging) {
      return;
    }
    // getFeatureLayerInfo(evt.pixel);
  });
  
  var redeHidrica = '<h5>Rede Hídrica</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'1\', this)">Recuperação de Córregos</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'2\', this)">Eixos Drenantes</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'3\', this)">Áreas de Absorção</button>';
  var espacoPublico = '<h5>Rede de Espaço Público</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'4\', this)">Parques</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'5\', this)">Praças</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'6\', this)">Eixos Ambientais</button>';
  var mobilidade = '<h5>Rede de Mobilidade</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'7\', this)">Sistema Viário</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'8\', this)">Passeios</button>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'9\', this)">Transposições</button>';
  var infraestrutura = '<h5>Infraestrutura e base produtiva</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'10\', this)">Espaço Produtivo</button>';
  var equipamentosPublicos = '<h5>Equipamentos Públicos</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'11\', this)">Equipamentos Públicos</button>';
  var producaoHabitacional = '<h5>Produção Habitacional</h5>'+'<button class="layerToggleBt unselectable" onclick="tLayers(\'12\', this)">Produção Habitacional</button>';
  var arco = '<button class="layerToggleBt unselectable" style="width: 80px" onclick="tLayers(\'21\', this)">Arco Tietê</button>'+'<button class="layerToggleBt unselectable" style="width: 80px" onclick="tLayers(\'20\', this)">Foto aérea</button>';
  var menuContent = arco+'<hr />'+redeHidrica+'<hr />'+espacoPublico+'<hr />'+mobilidade+'<hr />'+infraestrutura+'<hr />'+equipamentosPublicos+'<hr />'+producaoHabitacional;
  jQuery('#layersMenu').html(menuContent);

  bugMap = map;
});

function tLayers(codigo, elemento) {
  jQuery(elemento).toggleClass('inactiveBt');
  var _layer;
  var _show = jQuery(elemento).html();
  for (var i = mapLayers.length - 1; i >= 0; i--) {
    var layerCode;
    if(mapLayers[i].get('name') != undefined)
      layerCode = mapLayers[i].get('name').replace(/[^0-9\.]/g, '');
    if(layerCode == codigo){
      _layer = mapLayers[i];
      platMapAPI.showHideCamada(_layer, elemento, _show, _show);
    }
  }  
}
