var src_path = "../../wp-content/uploads/2017/07/19/terminais_pmi/";

// presets openlayers
var projection = ol.proj.get('EPSG:3857');
var scaleLineControl = new ol.control.ScaleLine();

// definições das camadas
var raster = new ol.layer.Tile({
    source: new ol.source.BingMaps({
        imagerySet: 'AerialWithLabels', 
        culture: 'pt-BR',
        key: 'efIeX8pQ5PTC2IcEjuVT~s7zLBU5z6I20qWhPhkAy3w~AlgB9eABTaOsOC8LVDJEQhyb4ik0B0mWBpIfDgrVwNYVqgfnxOsXFN3_8XKZlP1d'
    })
});

var perimetros = new ol.layer.Vector({
    source: new ol.source.Vector({
        url: src_path+'./perimetros_pmi-terminais.kml',
        format: new ol.format.KML()
    })
});

var rmsp = new ol.layer.Vector({
    source: new ol.source.Vector({ 
        url: src_path+'./limites_rmsp.kml',
        format: new ol.format.KML()
    })
});

//primeira view
var view = new ol.View({
    center: [-5190080.00000,-2708530.34945],
    projection: projection,
    zoom: 10.65,
    minZoom: 10.65,
    maxZoom: 19
});

var map = new ol.Map({
  controls: ol.control.defaults({
    attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
      collapsible: false
    })
  }).extend([
    scaleLineControl
  ]),
  layers: [
    raster,
    perimetros,
    rmsp
  ],
  target: 'map',
  loadTilesWhileAnimating: true,//manter
  view: view
});


var conteudo_botoes_ficha = new Vue({
    el:"#conteudo_botoes_ficha",
    data:{
        nome:'',
        latlng:'',
        zoom:'',
        cores_setor:[
        '#000000',//Centro 9 -> defaullt
        '#4DB757',//Noroeste 1
        '#005D97',//Norte 2
        '#F3C615',//Nordeste 3
        '#C9412C',//Leste 4
        '#008570',//Sudeste 5
        '#0088CF',//Sul 6
        '#810024',//Sudoeste 7
        '#F48120' //Oeste 8
        ],
        src_minimapas:[
        src_path + 'minimapa_default0.png',
        src_path + 'minimapa_noroeste1.png',
        src_path + 'minimapa_norte2.png',
        src_path + 'minimapa_nordeste3.png',
        src_path + 'minimapa_leste4.png',
        src_path + 'minimapa_sudeste5.png',
        src_path + 'minimapa_sul6.png',
        src_path + 'minimapa_sudoeste7.png',
        src_path + 'minimapa_oeste8.png',
        src_path + 'minimapa_centro9.png',
        src_path + 'minimapa_base.png',
        src_path + 'minimapa_areas.png',
        src_path + 'minimapa_ponto.png',
        src_path + 'minimapa_ponto_invisivel.png'
        ],
        hover_btn:'',
        hover_btn_ponto:'',
        minimapa_ponto_v:'',
        btn_clicked:false,
        area_consorciada:'',
        conteudo:'' ,
        endereco:'',
        prefeitura_regional:'',
        distrito:'',
        inauguracao: '',
        passageiros_emb_dia:'',
        area_terreno: '',
        area_edif:"",
        area_cobertura:'',
        area_locada: '',
        custo_mensal:'',
        receita_mensal:'',
        corredor_existente:'',
        corredor_projetado:'',
        zon:'',
        macrozona:'',
        macroarea:'',
        ouc:'',
        area_esp_trafego:'',
        incentivo_garagem:'',
        per_incen_des_econo:'',
        melh_viarios:'',
        tombamentos:'',
        area_prot_manancial:'',
        area_prot_ambiental:'',
        app:'',
        vegetacao_significativa:'',
        plano_aerodromos:'',
        observacoes:'',
        terminais : {
            pirituba: {
                id: 'pirituba',
                latlng: [-5201520.00000,-2690890.34945],
                //ao procurar endereços converter projeção -https://mygeodata.cloud/cs2cs/
                //WGS 84 (EPSG:4326) - este é usado pelo google maps (fazer busca e ver url)
                //exemplo (terminal casa verde):
                //-23.4968769,-46.6642878

                //WGS 84 / Pseudo-Mercator (EPSG:3857) - este é padrão do open layers tbm usado neste código
                //exemplo (terminal casa verde):
                //-5194644.75613;-2692219.11899

                //cuidado!! 
                // no site, ticar em "Switch X <--> Y" 
                // neste código trocar ';' por ',' ao incluir as coordenadas
                zoom: 15.5,
                nome: 'Terminal Pirituba',
                minimapa_ponto_v: {top:'40px', left:'33px'},
                area_consorciada: 'Noroeste 1',
                conteudo:'<h3>Conteúdo</h3> <p>textual Pirituba</p>', 
                endereco:'Rua Arcangélica, 02',
                prefeitura_regional: 'Pirituba-Jaraguá',
                distrito: 'Pirituba',
                inauguracao: '13/12/2003',
                passageiros_emb_dia: '36.297',
                area_terreno: '13.937,15',
                area_edif:"713,83",
                area_cobertura:'5.187,12',
                area_locada: '92,28',
                custo_mensal:'R$ 425.617,81',
                receita_mensal:'R$ 46.606,19',
                corredor_existente:'Pirituba/Lapa/Centro',
                corredor_projetado: '—',
                zon: 'ZEU',
                macrozona:'Macrozona de Estruturação e Qualificação Urbana',
                macroarea: 'Macroárea de Estruturação Metropolitana / setor II - Eixo de Desenvolvimento Noroeste',
                ouc:'N/C',
                area_esp_trafego: 'N/C',
                incentivo_garagem:'Sim',
                per_incen_des_econo:'N/C',
                melh_viarios:'Lei 6.182/1962, Decreto 16233/1979 PRM 172 e PRM 174',
                tombamentos: 'N/C',
                area_prot_manancial: 'N/C',
                area_prot_ambiental:'N/C',
                app:'Decreto 32.329/1992 faixa não edificável córrego Pirituba',
                vegetacao_significativa: 'N/C',
                plano_aerodromos:'952 metros',
            },
             casa_verde: {
                id:'casa_verde',
                latlng: [-5194644.75613,-2692219.11899],
                zoom: 15.5,
                nome: 'Terminal Casa Verde',
                minimapa_ponto_v: {top:'46px', left:'53px'},
                area_consorciada: 'Norte 2',
                conteudo:'Conteúdo textual casa verde',
                endereco:'Rua Baia Formosa, 80',
                prefeitura_regional: ' Casa verde - Cachoeirinha ',
                distrito: ' Casa Verde',
                inauguracao: "06/03/1985",
                passageiros_emb_dia: "1.913",
                area_terreno: "2.236",
                area_edif: "151",
                area_cobertura: "1.300",
                area_locada: "4,8",
                custo_mensal: "R$ 87.520,04",
                receita_mensal: "R$ 1.375,08",
                corredor_existente: "—",
                corredor_projetado: "—",
                zon: "ZC",
                macrozona: "Macrozona de Estruturação da Qualificação Urbana",
                macroarea: "Macroárea de Qualificação da Urbanização",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 5.396/1957",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Córrego do Mandaqui",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "747,6",
            },
             vila_n_cach: {
                id: 'vila_n_cach',
                latlng: [-5195549.01548,-2689586.42141],
                zoom: 15.5,
                nome: 'Terminal Vila Nova Cachoeirinha',
                minimapa_ponto_v: {top:'38px', left:'50px'},
                area_consorciada: 'Norte 2',
                conteudo:'Conteúdo textual vila nova cachoeirinha',
                endereco:'Avenida Inajar de Souza S/Nº',
                prefeitura_regional: ' Casa verde - Cachoeirinha',
                distrito: 'Cachoeirinha ',
                inauguracao: "30/08/1996",
                passageiros_emb_dia: "49.144",
                area_terreno: " 13.376,12 ",
                area_edif: " 1.530,00 ",
                area_cobertura: "3.715,00 ",
                area_locada: "63",
                custo_mensal: "R$ 526.892,79",
                receita_mensal: "R$ 28457,78",
                corredor_existente: "Inajar/Rio Branco/Centro",
                corredor_projetado: "—",
                zon: "ZEU",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 8.701/1978; DG 40",
                tombamentos: "Conpresp Res. 26/04 e 14/14 - Posto de Saúde e Maternidade  em processo de tombamento",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "899,7 metros",
            },
             ae_carvalho: {
                id: 'ae_carvalho',
                latlng: [-5173911.24493,-2694742.39138],
                zoom: 15.5,
                nome: 'Terminal A. E. Carvalho',
                minimapa_ponto_v: {top:'50px', left:'106px'},
                area_consorciada: 'Nordeste 3',
                conteudo:'Conteúdo textual A. E. Carvalho',
                endereco:'Avenida Imperador, nº 1401 ',
                prefeitura_regional: ' Itaquera',
                distrito: 'Itaquera ',
                inauguracao: "15/10/1985",
                passageiros_emb_dia: "8.605",
                area_terreno: "11.700,6",
                area_edif: "425",
                area_cobertura: "3.305",
                area_locada: "20",
                custo_mensal: "R$ 308.743,40",
                receita_mensal: "R$ 8.830,12",
                corredor_existente: "—",
                corredor_projetado: "—",
                zon: "ZC",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 16.495/2016;DUP 55.891/2015 - instalação de garagem de ônibus; Lei 16.050/2014 - Quadro 7 - Parques Nascentes do Córrego Ponte Rasa (PE) e Ponte Rasa (EM) ",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Córrego Ponte Rasa",
                vegetacao_significativa: "Sim ",
                plano_aerodromos: "899,7 metros",
            },
             aricanduva: {
                id: 'aricanduva',
                latlng: [-5182683.23194,-2696054.63636],
                zoom: 15.5,
                nome: 'Terminal Aricanduva',
                minimapa_ponto_v: {top:'55px', left:'83px'},
                area_consorciada: 'Nordeste 3',
                conteudo:'Conteúdo textual Aricanduva',
                endereco:'Rua Profº Airton Pretini, 86',
                prefeitura_regional: ' Penha',
                distrito: 'Penha ',
                inauguracao: "15/10/1985",
                passageiros_emb_dia: "2.844",
                area_terreno: "4.491",
                area_edif: "130",
                area_cobertura: "604",
                area_locada: "2",
                custo_mensal: "R$ 127.386,74",
                receita_mensal: "R$ 572,95",
                corredor_existente: "—",
                corredor_projetado: "Fase I - Itaquera/Líder/São Teodoro e Aricanduva; Fase II - Celso Garcia",
                zon: "Praça/Canteiro",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor I Arco Leste",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 16.020/2014",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "899,7 metros",
            },
             penha: {
                id: 'penha',
                latlng: [-5181526.27077,-2694901.31087],
                zoom: 15.5,
                nome: 'Terminal Penha',
                minimapa_ponto_v: {top:'52px', left:'88px'},
                area_consorciada: 'Nordeste 3',
                conteudo:'Conteúdo textual Penha',
                endereco:'Av. Cangaiba, 130',
                prefeitura_regional: ' Penha',
                distrito: ' Penha',
                inauguracao: "18/10/1996",
                passageiros_emb_dia: "7.922",
                area_terreno: "5.250",
                area_edif: "505",
                area_cobertura: "2.665",
                area_locada: "8",
                custo_mensal: "R$ 172.567,41",
                receita_mensal: "R$ 3.325,34",
                corredor_existente: "—",
                corredor_projetado: " Fase II - Celso Garcia",
                zon: "ZEUP",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor I Arco Leste",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "Sim",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 860/1935 e 5.760/1960",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "899,7 metros",
            },
             sao_miguel: {
                id: 'sao_miguel',
                latlng: [-5169313.77223,-2691595.834],
                zoom: 15.5,
                nome: 'Terminal São Miguel',
                minimapa_ponto_v: {top:'45px', left:'119px'},
                area_consorciada: 'Nordeste 3',
                conteudo:'Conteúdo textual São Miguel',
                endereco:'Rua Tarde de Maio, 292 ',
                prefeitura_regional: ' Itaim Paulista ',
                distrito: ' Vila Curuçá ',
                inauguracao: "01/09/2006",
                passageiros_emb_dia: "3.533",
                area_terreno: "8.500",
                area_edif: "13.282",
                area_cobertura: "4.780",
                area_locada: "—",
                custo_mensal: "R$ 203.312,87",
                receita_mensal: "R$ 0,00",
                corredor_existente: "—",
                corredor_projetado: "Fase II: Celso Garcia",
                zon: "ZEUP",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação metropolitana - Setor 1 Arco Leste",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "Sim (perímetro de abrangência)",
                per_incen_des_econo: "Arco Jacu-Pêssego",
                melh_viarios: "Lei 9.736/1984, DUP 45.063/2004, DUP 54.335/2013",
                tombamentos: "Conpresp Res. 10/12 - Área envoltória do Complexo Companhia Nitro Química  ",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Rio Itaquera",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "804,7 metros",
                observacoes:'Lei 14.888/2009 Programa de Incentivos Seletivos - Área 9ZL'
            },
             carrao: {
                id: 'carrao',
                latlng: [-5179134.6894,-2699689.90603],
                zoom: 15.5,
                nome: 'Terminal Vila Carrão',
                minimapa_ponto_v: {top:'66px', left:'95px'},
                area_consorciada: 'Leste 4',
                conteudo:'Conteúdo textual São Miguel',
                endereco:'Av Dezenove de Janeiro, 884 ',
                prefeitura_regional: 'Aricanduva-Formosa-Carrão ',
                distrito: ' Carrão ',
                inauguracao: "22/12/1985",
                passageiros_emb_dia: "12.384",
                area_terreno: "9.020",
                area_edif: "270",
                area_cobertura: "5.730",
                area_locada: "26",
                custo_mensal: "R$ 241.675,86",
                receita_mensal: "R$ 11.498,26",
                corredor_existente: "—",
                corredor_projetado: "Fase I - Itaquera/Líder/São Teodoro",
                zon: "Sem zoneamento",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Qualificação da Urbanização",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 6.567/1964, DUP 56.326/2015, Lei 16.020/2014, Lei 16.050/2014 - parque proposto - Parque Cemitério de Vila Formosa (AF)",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "899,7 metros",
            },
             cid_tiradentes: {
                id: 'cid_tiradentes',
                latlng: [-5166357.89465,-2702724.75629],
                zoom: 15.5,
                nome: 'Terminal Cidade Tiradentes',
                minimapa_ponto_v: {top:'68px', left:'124px'},
                area_consorciada: 'Leste 4',
                conteudo:'Conteúdo textual Cidade Tiradentes',
                endereco:' Av. Naylor de Oliveira, s/n',
                prefeitura_regional: 'Cidade Tiradentes ',
                distrito: 'Cidade Tiradentes ',
                inauguracao: "12/11/1996",
                passageiros_emb_dia: "34.927",
                area_terreno: "18.500",
                area_edif: "1.054",
                area_cobertura: "5.094,5",
                area_locada: "34,6",
                custo_mensal: "R$ 433.444,97",
                receita_mensal: "R$ 14.046,20",
                corredor_existente: "—",
                corredor_projetado: "—",
                zon: "ZEUa",
                macrozona: "Macrozona de Proteção e Recuperação Ambiental",
                macroarea: "Macroárea de Controle e Qualificação Urbana e Ambiental",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "Sim (perímetro de abrangência)",
                per_incen_des_econo: "Arco Jacu-Pêssego",
                melh_viarios: "Lei 16.495/2016 e PRM 320 ",
                tombamentos: "Conpresp Resolução 14/2014",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Córrego Itaquera",
                vegetacao_significativa: "Sim (perímetro de abrangência)",
                plano_aerodromos: "899,7 metros",
            },
             sapopemba: {
                id: 'sapopemba',
                latlng: [-5176756.79376,-2706350.86938],
                zoom: 15.5,
                nome: 'Terminal Sapopemba',
                minimapa_ponto_v: {top:'77px', left:'99px'},
                area_consorciada: 'Leste 4',
                conteudo:'Conteúdo textual Sapopemba',
                endereco:'Av Arquiteto Vilanova Artigas S/N',
                prefeitura_regional: 'Sapopemba',
                distrito: 'Sapopemba ',
                inauguracao: "01/10/2006",
                passageiros_emb_dia: "9.481",
                area_terreno: "8.400",
                area_edif: "2.250",
                area_cobertura: "1.970",
                area_locada: "18,8",
                custo_mensal: "R$ 324.726,48",
                receita_mensal: "R$ 7.659,52",
                corredor_existente: "—",
                corredor_projetado: "—",
                zon: "ZEU",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "Sim",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 9.251/1981, PRM 040, ",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/19921 Faixa não edificável - afluente do Rio das Pedras",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "899,7 metros",
            },
             sacoma: {
                id: 'sacoma',
                latlng: [-5187851.25043,-2704968.00847],
                zoom: 15.5,
                nome: 'Terminal Sacomã',
                minimapa_ponto_v: {top:'78px', left:'70px'},
                area_consorciada: 'Sudeste 5',
                conteudo:'Conteúdo textual Sacomã',
                endereco:'Rua Doutor Audísio de Alencar, 201',
                prefeitura_regional: 'Ipiranga ',
                distrito: 'Ipiranga ',
                inauguracao: "01/03/2007",
                passageiros_emb_dia: "50.996",
                area_terreno: "16.700",
                area_edif: "11.300",
                area_cobertura: "10.500",
                area_locada: "163,6",
                custo_mensal: "R$ 1.052.634,85",
                receita_mensal: "R$ 64.796,92",
                corredor_existente: "Expresso Tiradentes",
                corredor_projetado: "Fase II - Perimetral Bandeirantes",
                diretrizes_req: "—",
                zon: "ZM",
                macrozona: "Macrozona de Estruturação e Qaulificação Urbana",
                macroarea: "Macroárea de Urbanização Consolidada",
                ouc: "—",
                area_esp_trafego: "001",
                incentivo_garagem: "Sim",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 8.429/1976",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Consta Córrego Moinho Velho",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "847 metros",
            },
             grajau: {
                id: 'grajau',
                latlng: [-5198534.69328,-2721327.94589],
                zoom: 15.5,
                nome: 'Terminal Grajaú',
                minimapa_ponto_v: {top:'122px', left:'45px'},
                area_consorciada: 'Sul 6',
                conteudo:'Conteúdo textual Grajaú',
                endereco:'Rua Giovanni Bononcini Nº 77',
                prefeitura_regional: ' Capela do Socorro',
                distrito: ' Grajaú ',
                inauguracao: "28/10/2004",
                passageiros_emb_dia: "70.013",
                area_terreno: "31.123",
                area_edif: "794,55",
                area_cobertura: "7.287,46",
                area_locada: "85,2",
                custo_mensal: "R$ 528.201,55",
                receita_mensal: "R$ 35.811,71",
                corredor_existente: "Rio Bonito",
                corredor_projetado: "Fase II - Belmira Marin",
                zon: "ZEUa",
                macrozona: "Macrozona de Proteção e Recuperação Ambiental",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana e Proteção Ambiental",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 16.020/2016",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Rio das Pedras",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "952 metros",
            },
             parelheiros: {
                id: 'parelheiros',
                latlng: [-5201849.45376,-2732491.96428],
                zoom: 15.5,
                nome: 'Terminal Parelheiros',
                minimapa_ponto_v: {top:'150px', left:'34px'},
                area_consorciada: 'Sul 6',
                conteudo:'Conteúdo textual Parelheiros',
                endereco:'Estrada da Colônia, 300',
                prefeitura_regional: 'Parelheiros ',
                distrito: 'Parelheiros ',
                inauguracao: "15/06/2003",
                passageiros_emb_dia: "9.841",
                area_terreno: "2.136,58",
                area_edif: "116",
                area_cobertura: "274",
                area_locada: "8,2",
                custo_mensal: "R$ 240.302,77",
                receita_mensal: "R$ 2.349,09",
                corredor_existente: "Rio Bonito",
                corredor_projetado: "—",
                zon: "Praça/Canteiro",
                macrozona: "Macrozona de Proteção e Recuperação Ambiental",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana e Recuperação Ambiental",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 16.325/2015",
                tombamentos: "N/C",
                area_prot_manancial: "Sim",
                area_prot_ambiental: "Lei 14.162/2006 - Bororé-Colônia",
                app: "N/C",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "N/C",
                observacoes: 'Loteamento a regularizar PA 1979-0.001.556-6'
            },
             sto_amaro: {
                id: 'sto_amaro',
                latlng: [-5200135.24492,-2711334.84874],
                zoom: 15.5,
                nome: 'Terminal Santo Amaro',
                minimapa_ponto_v: {top:'96px', left:'39px'},
                area_consorciada: 'Sul 6',
                conteudo:'Conteúdo textual Santo Amaro',
                endereco:'Av. Padre José Maria, 400 ',
                prefeitura_regional: 'Santo Amaro ',
                distrito: 'Santo Amaro ',
                inauguracao: "25/01/1987",
                passageiros_emb_dia: "76.718",
                area_terreno: "41.000",
                area_edif: "2.825",
                area_cobertura: "10.641",
                area_locada: "145,3",
                custo_mensal: "R$ 948.145,53",
                receita_mensal: "R$ 73.166,70",
                corredor_existente: "Santo Amaro/9 de Julho/Itapecerica/Rio Bonito/Guarapiranga",
                corredor_projetado: "Fase I - Berrini (trecho 1 e 2); Fase II - Miguel Yunes e Sabará",
                zon: "Praça/canteiro",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana/ Setor I - Arco Jurubatuba",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "Sim (perímetro de abrangência)",
                per_incen_des_econo: "N/C",
                melh_viarios: " Lei 6.464/1963",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "—",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "857 metros",
            },
             varginha: {
                id: 'varginha',
                latlng: [-5200687.61223,-2725051.41847],
                zoom: 15.5,
                nome: 'Terminal Varginha',
                minimapa_ponto_v: {top:'129px', left:'40px'},
                area_consorciada: 'Sul 6',
                conteudo:'Conteúdo textual Varginha',
                endereco:'Av.Paulo Guilguer Reimberg, 247 ',
                prefeitura_regional: 'Parelheiros ',
                distrito: 'Parelheiros ',
                inauguracao: "24/07/2004",
                passageiros_emb_dia: "51.159",
                area_terreno: "15.666",
                area_edif: "2.021,26",
                area_cobertura: "5.234",
                area_locada: "48,84",
                custo_mensal: "R$ 507.517,50",
                receita_mensal: "R$ 23.510,37",
                corredor_existente: "Rio Bonito",
                corredor_projetado: "—",
                zon: "Zca",
                macrozona: "Macrozona de Proteção e Recuperação Ambiental",
                macroarea: "Macroárea de Redução da  Vulnerabilidade Urbana e Recuperação Ambiental",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 9.312/1981; Lei 16.020/2014",
                tombamentos: "N/C",
                area_prot_manancial: "Sim",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "952 metros",
            },
             guarapiranga: {
                id: 'guarapiranga',
                latlng: [-5202815.31732,-2713061.8483],
                zoom: 15.5,
                nome: 'Terminal Guarapiranga',
                minimapa_ponto_v: {top:'102px', left:'30px'},
                area_consorciada: 'Sudoeste 7',
                conteudo:'Conteúdo textual Guarapiranga',
                endereco:'Estrada do M. Boi Mirim, 150 ',
                prefeitura_regional: 'M’Boi Mirim ',
                distrito: 'Jardim São Luís ',
                inauguracao: "07/08/2004",
                passageiros_emb_dia: "17.000",
                area_terreno: "17.200",
                area_edif: "620",
                area_cobertura: "3.800",
                area_locada: "17",
                custo_mensal: "R$ 345.336,55",
                receita_mensal: "R$ 7.628,06",
                corredor_existente: "Guarapiranga",
                corredor_projetado: "Fase I - Ponte Baixa",
                zon: "ZEIS-2",
                macrozona: "Macrozona de Estruturação e Qaulificação Urbana",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 15.899/2013; Lei 9.764/1987; DUP 55.785/2014 e PRM 060 ",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 - Faixa não ediﬁcável - Córrego Ponte Baixa",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "952 metros",
            },
             jd_angela: {
                id: 'jd_angela',
                latlng: [-5207092.57951,-2715737.1802],
                zoom: 15.5,
                nome: 'Terminal Jardim Ângela',
                minimapa_ponto_v: {top:'109px', left:'21px'},
                area_consorciada: 'Sudoeste 7',
                conteudo:'Conteúdo textual Jardim Ângela',
                endereco:'Estrada do M. Boi Mirim, 4901 ',
                prefeitura_regional: 'M’Boi Mirim',
                distrito: ' Jardim Ângela',
                inauguracao: "30/06/2003",
                passageiros_emb_dia: "32.806",
                area_terreno: "6.934,52",
                area_edif: "600",
                area_cobertura: "3.316",
                area_locada: "25",
                custo_mensal: "R$ 372.280,64",
                receita_mensal: "R$ 11.040,66",
                corredor_existente: "Guarapiranga",
                corredor_projetado: "Fase I: M'Boi Mirim e Carlos Caldeira",
                zon: "Zca",
                macrozona: "Macrozona de Proteção e Recuperação Ambiental",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana e Recuperação Ambiental",
                ouc: "N/C",
                area_esp_trafego: "002",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 16.020/2014; PRM 060; DUP 49.787/2008",
                tombamentos: "N/C",
                area_prot_manancial: "Sim ",
                area_prot_ambiental: "N/C",
                app: "Decreto 32.329/1992 -  Faixa não edificável - Ribeirão Caulim",
                vegetacao_significativa: "Sim ",
                plano_aerodromos: "952 metros",
            },
             joao_dias: {
                id: 'joao_dias',
                latlng: [-5202553.09313,-2710048.4686],
                zoom: 15.5,
                nome: 'Terminal João Dias',
                minimapa_ponto_v: {top:'91px', left:'31px'},
                area_consorciada: 'Sudoeste 7',
                conteudo:'Conteúdo textual João Dias',
                endereco:' Av. João Dias, 3589',
                prefeitura_regional: ' M’Boi Mirim',
                distrito: 'Jd. São Luís ',
                inauguracao: "23/09/1996",
                passageiros_emb_dia: "39.287",
                area_terreno: "14.000",
                area_edif: "1.388,84",
                area_cobertura: "7.327",
                area_locada: "77,4",
                custo_mensal: "R$ 455.062,09",
                receita_mensal: "R$ 34.980,09",
                corredor_existente: "Itapecerica/João Dias",
                corredor_projetado: "—",
                zon: "Praça/Canteiro",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Redução da Vulnerabilidade Urbana",
                ouc: "N/C",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 8.027/1974",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "952 metros",
            },
             amaral_gurgel: {
                id: 'amaral_gurgel',
                latlng: [-5192750.98433,-2697866.66507],
                zoom: 15.5,
                nome: 'Terminal Amaral Gurgel',
                minimapa_ponto_v: {top:'62px', left:'54px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo textual Amaral Gurgel',
                endereco:' Rua Dr. Frederico Steidel, 107',
                prefeitura_regional: 'Sé ',
                distrito: 'Santa Cecília ',
                inauguracao: "13/12/2003",
                passageiros_emb_dia: "2.550",
                area_terreno: "9.664",
                area_edif: "603",
                area_cobertura: "7.287",
                area_locada: "12,5",
                custo_mensal: "R$ 252.943,67",
                receita_mensal: "R$ 5.518,83",
                corredor_existente: "Pirituba/Lapa/Centro",
                corredor_projetado: "—",
                zon: "ZEIS-3",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor I Arco Tietê",
                ouc: "Lei 12.349/1997 OU Centro no perímetro de estudo",
                area_esp_trafego: "001",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 7.113/1968; Lei 7.386/1969",
                tombamentos: "Condephaat Res. 25/93 - Área Envoltória Casas de Aluguel",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "consta Córrego Anhanguera",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "767,6 metros",
            },
             bandeira: {
                id: 'bandeira',
                latlng: [-5191882.34091,-2698442.69853],
                zoom: 15.5,
                nome: 'Terminal Bandeira',
                minimapa_ponto_v: {top:'63px', left:'58px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo textual Bandeira',
                endereco:'Praça da Bandeira,  s/n ',
                prefeitura_regional: ' Sé',
                distrito: ' República e Sé',
                inauguracao: "08/11/1996",
                passageiros_emb_dia: "40.907",
                area_terreno: "19.900",
                area_edif: "2.471",
                area_cobertura: "3.800",
                area_locada: "86,1",
                custo_mensal: "R$ 602.600,85",
                receita_mensal: "R$ 42.494,13",
                corredor_existente: "Santo Amaro/Nove de Julho",
                corredor_projetado: "Fase II: Norte-Sul",
                diretrizes_req: "—",
                zon: "Praça/Canteiro",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor III Central",
                ouc: "Operação Urbana Centro Lei 12.349/97",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 5.219/57 -  Decreto 45.980/05 Garagem subterrânea",
                tombamentos: "CONPRESP - Res.16/04 Área do Parque Anhangabaú; CONDEPHAAT - Res. 22/2015 Área envoltória Faculdade de Direito",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "857 metros",
            },
             lapa: {
                id: 'lapa',
                latlng: [-5198717.93876,-2695073.76452],
                zoom: 15.5,
                nome: 'Terminal Lapa',
                minimapa_ponto_v: {top:'55px', left:'41px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo textual Lapa',
                endereco:"Praça Miguel Dell'erba, 50",
                prefeitura_regional: 'Lapa ',
                distrito: 'Lapa ',
                inauguracao: "13/12/2003",
                passageiros_emb_dia: "27.977",
                area_terreno: "11.683,15",
                area_edif: "714",
                area_cobertura: "6.597,46",
                area_locada: "81,74",
                custo_mensal: "R$ 398.459,78",
                receita_mensal: "R$ 40.187,04",
                corredor_existente: "Pirituba/Lapa/Centro",
                corredor_projetado: "—",
                zon: "ZC",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor I Arco Tietê",
                ouc: "—",
                area_esp_trafego: "001",
                incentivo_garagem: "Sim (perímetro de abrangência)",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 8.870/1979; Lei 6.610/1964",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "N/C",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "885,37 metros",
            },
             pinheiros: {
                id: 'pinheiros',
                latlng: [-5198802.73348,-2700617.24554],
                zoom: 15.5,
                nome: 'Terminal Pinheiros',
                minimapa_ponto_v: {top:'66px', left:'39px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo textual Pinheiros',
                endereco:'Rua Gilberto Sabino, 133 ',
                prefeitura_regional: 'Pinheiros ',
                distrito: 'Pinheiros ',
                inauguracao: "28/12/2012",
                passageiros_emb_dia: "28.383",
                area_terreno: "19.560",
                area_edif: "12.531",
                area_cobertura: "10.224",
                area_locada: "40,5",
                custo_mensal: "R$ 582.163,34",
                receita_mensal: "R$ 10.974,44",
                corredor_existente: "Rebouças/Centro",
                corredor_projetado: "—",
                zon: "ZM",
                macrozona: "Macrozona de Estruturação e Qualificação Urbana",
                macroarea: "Macroárea de Estruturação Metropolitana - Setor I Faria Lima",
                ouc: "Lei 13.769/2004",
                area_esp_trafego: "N/C",
                incentivo_garagem: "Sim (perímetro de abrangência)",
                per_incen_des_econo: "N/C",
                melh_viarios: "Lei 5.021/1956, DUP 50.194/2008, DUP 43.204/2003, Lei 5.855/1961 e Lei 4.674/1955",
                tombamentos: "N/C",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "—",
                vegetacao_significativa: "N/C",
                plano_aerodromos: "847,8 metros",
            },
             pq_d_pedro: {
                id: 'pq_d_pedro',
                latlng: [-5190830.46067,-2698214.04085],
                zoom: 15.5,
                nome: 'Terminal Parque Dom Pedro',
                minimapa_ponto_v: {top:'62px', left:'58px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo textual Parque Dom Pedro',
                endereco:'Pq. Dom Pedro II, s/n ',
                prefeitura_regional: 'Sé ',
                distrito: ' Sé ', 
                inauguracao: "04/11/1996",
                passageiros_emb_dia: "78.910",
                area_terreno: "30.400",
                area_edif: "550",
                area_cobertura: "9.800",
                area_locada: "234,2",
                custo_mensal: "R$ 978.461,29",
                receita_mensal: "110.529,32",
                corredor_existente: "Expresso Tiradentes",
                corredor_projetado: " Fase I - Radial Leste (trecho 1 e 2 ); Fase II - Celso Garcia",
                zon: "ZC",
                macrozona: "Macrozona de  Estruturação da Qualificação Urbana",
                macroarea: " Macroárea de Estruturação Metropolitana/Setor III - Central",
                ouc: "Operação Urbana Centro Lei 12.349/97 ",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "PRM 147, Decreto 45.980/2005 Garagem Subterrânea, Lei 9.231/1981 - AIU Pq. Dom Pedro II(*) ",
                tombamentos: "Conpresp Res. 07/2015 - Área do Pátio do Colégio Condephaat Res. 14/71 - Área envoltória Solar Marquesa dos Santos",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Rio Tamanduateí",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "Consulta obrigatória SRPV",
                observacoes:'(*) Lei 9.231/1981: revogada pela Lei 13.885/2004'
            },
             mercado: {
                id: 'mercado',
                latlng: [-5190830.46067,-2698214.04085],
                zoom: 15.5,
                nome: 'Terminal Mercado',
                minimapa_ponto_v: {top:'62px', left:'58px'},
                area_consorciada: 'Centro 9',
                conteudo:'Conteúdo Mercado',
                endereco:'Av. do Estado, 3350 ',
                prefeitura_regional: ' Sé',
                distrito: 'Sé ',
                inauguracao: "01/03/2007",
                passageiros_emb_dia: "18.145",
                area_terreno: "10.150",
                area_edif: "3.240",
                area_cobertura: "7.100",
                area_locada: "15",
                custo_mensal: "R$ 753.007,70",
                receita_mensal: "R$ 4.128,58",
                corredor_existente: "Expresso Tiradentes",
                corredor_projetado: "Fase I - Radial Leste (trecho 1 e 2); Fase II - Celso Garcia ",
                zon: "Praça /Canteiro",
                macrozona: "Macrozona de  Estruturação da Qualificação Urbana",
                macroarea: " Macroárea de Estruturação Metropolitana/Setor III - Central",
                ouc: "Operação Urbana Centro Lei 12.349/97 ",
                area_esp_trafego: "N/C",
                incentivo_garagem: "N/C",
                per_incen_des_econo: "N/C",
                melh_viarios: "PRM 147, Decreto 45.980/2005 Garagem Subterrânea, Lei 9.231/1981 - AIU Pq. Dom Pedro II(*) ",
                tombamentos: "Conpresp Res. 07/2015 - Área do Pátio do Colégio, Condephaat Res. 14/71 - Área envoltória Solar Marquesa dos Santos",
                area_prot_manancial: "N/C",
                area_prot_ambiental: "N/C",
                app: "Rio Tamanduateí",
                vegetacao_significativa: "Sim",
                plano_aerodromos: "Consulta obrigatória SRPV",
                observacoes:'(*) Lei 9.231/1981: revogada pela Lei 13.885/2004'
            }
        }
    },
    computed:{
        display_ficha_container: function(){
            var clicked = this.btn_clicked;
            if (clicked) {
               return {display:'block'};
            }
            else {
               return {display:'none'}
            }
        },
        active_color: function(){
            var area = this.area_consorciada;
            switch(area){
                case 'Noroeste 1': return {color:this.cores_setor[1]};break
                case 'Norte 2': return {color:this.cores_setor[2]};break
                case 'Nordeste 3': return {color:this.cores_setor[3]};break
                case 'Leste 4': return {color:this.cores_setor[4]};break
                case 'Sudeste 5': return {color:this.cores_setor[5]};break
                case 'Sul 6': return {color:this.cores_setor[6]};break
                case 'Sudoeste 7': return {color:this.cores_setor[7]};break
                case 'Oeste 8': return {color:this.cores_setor[8]};break
                case 'Centro 9': return {color:this.cores_setor[9]};break
                default: return {color:this.cores_setor[0]};
            }
        },
        active_bg_color: function(){
            var area = this.area_consorciada;
            switch(area){
                case 'Noroeste 1': return {backgroundColor:this.cores_setor[1]};break
                case 'Norte 2': return {backgroundColor:this.cores_setor[2]};break
                case 'Nordeste 3': return {backgroundColor:this.cores_setor[3]};break
                case 'Leste 4': return {backgroundColor:this.cores_setor[4]};break
                case 'Sudeste 5': return {backgroundColor:this.cores_setor[5]};break
                case 'Sul 6': return {backgroundColor:this.cores_setor[6]};break
                case 'Sudoeste 7': return {backgroundColor:this.cores_setor[7]};break
                case 'Oeste 8': return {backgroundColor:this.cores_setor[8]};break
                case 'Centro 9': return {backgroundColor:this.cores_setor[0]};break
                default: return {backgroundColor:this.cores_setor[0]};
            }
        },
        active_minimap: function(){
            var area = this.area_consorciada;
            var minimapa = this.src_minimapas;
            switch(area){
                case 'Noroeste 1': return minimapa[1];break
                case 'Norte 2': return minimapa[2];break
                case 'Nordeste 3': return minimapa[3];break
                case 'Leste 4': return minimapa[4];break
                case 'Sudeste 5': return minimapa[5];break
                case 'Sul 6': return minimapa[6];break
                case 'Sudoeste 7': return minimapa[7];break
                case 'Oeste 8': return minimapa[8];break
                case 'Centro 9': return minimapa[9];break
                default: return minimapa[0];
            }
        },
        active_minimap_on_hover: function(){
            var minimapa = this.src_minimapas;
            switch(this.hover_btn){
                case 'Noroeste 1': return minimapa[1];break
                case 'Norte 2': return minimapa[2];break
                case 'Nordeste 3': return minimapa[3];break
                case 'Leste 4': return minimapa[4];break
                case 'Sudeste 5': return minimapa[5];break
                case 'Sul 6': return minimapa[6];break
                case 'Sudoeste 7': return minimapa[7];break
                case 'Oeste 8': return minimapa[8];break
                case 'Centro 9': return minimapa[9];break
                default: return minimapa[0];
            }
        },
        active_minimap_points_on_btn_hover: function(){
            if (this.hover_btn_ponto!=''){return this.hover_btn_ponto;};
            if (this.hover_btn_ponto='') {return ''};
        }
    },
    watch:{
        latlng: function(){
            var coords = this.latlng;
            var zoom_terminal = this.zoom;
            view.animate({
              center: coords,
              zoom: zoom_terminal,
              duration: 2500
            });
        },
        btn_clicked: function(){
            document.getElementById('conteudo_pos_clique').style.display = 'block';
        }, 
        //renderizar 'observacoes' apenas se existir este campo
        observacoes:function(){
        	if(typeof this.observacoes == 'undefined'){
                this.observacoes = false;
	        }
        }
    },
    methods:{
        alteraConteudoEview: function(terminal, id){
            this.btn_clicked = true;
            this.area_consorciada = terminal.area_consorciada;  
            this.latlng = terminal.latlng;
            this.zoom = terminal.zoom;
            this.nome = terminal.nome;
            this.minimapa_ponto_v = terminal.minimapa_ponto_v;

            // coluna1
            this.inauguracao = terminal.inauguracao;
            this.passageiros_emb_dia = terminal.passageiros_emb_dia;
            this.conteudo = terminal.conteudo;
            this.endereco = terminal.endereco
            this.prefeitura_regional = terminal.prefeitura_regional;
            this.distrito = terminal.distrito;
            this.area_terreno = terminal.area_terreno;
            this.area_edif = terminal.area_edif;
            this.area_cobertura = terminal.area_cobertura;
            this.area_locada = terminal.area_locada;
            this.custo_mensal = terminal.custo_mensal;
            this.receita_mensal = terminal.receita_mensal;
            this.corredor_existente = terminal.corredor_existente;
            this.corredor_projetado = terminal.corredor_projetado;

            // coluna2
            this.diretrizes_req = terminal.diretrizes_req;
            this.zon = terminal.zon;
            this.macrozona = terminal.macrozona;
            this.macroarea = terminal.macroarea;
            this.ouc = terminal.ouc;
            this.area_esp_trafego = terminal.area_esp_trafego;
            this.incentivo_garagem = terminal.incentivo_garagem;
            this.per_incen_des_econo = terminal.per_incen_des_econo;

            //coluna3
            this.melh_viarios = terminal.melh_viarios;
            this.tombamentos = terminal.tombamentos;
            this.area_prot_manancial = terminal.area_prot_manancial;
            this.area_prot_ambiental = terminal.area_prot_ambiental;
            this.app = terminal.app;
            this.plano_aerodromos = terminal.plano_aerodromos;
            this.vegetacao_significativa =  terminal.vegetacao_significativa;
            this.contaminacao = terminal.contaminacao;
			this.observacoes = terminal.observacoes;
        },
        displayHoveredMinimap: function(area){
            if(this.btn_clicked){ this.hover_btn = area}
            else{this.hover_btn = ''}
        },
        displayMinimapaPontos: function(pontos){
            document.getElementById('minimapa_ponto_preview').style.display='block'
            if (this.btn_clicked){this.hover_btn_ponto = pontos}
            else{this.hover_btn_ponto= ''}
        },
        removeMinimapaPontos: function(){
            document.getElementById('minimapa_ponto_preview').style.display='none'
        }
    }
});

var conteudo_pos_clique = new Vue({
    el:'#conteudo_pos_clique',
    data:{
        pdf_img_src:[
            ['PMI_terminais-municipais_PIRITUBA.pdf',
             'PMI_terminais-municipais_PIRITUBA_aplicacao.jpg'],//0

            ['PMI_terminais-municipais_CASA-VERDE.pdf',
             'PMI_terminais-municipais_CASA-VERDE_aplicacao.jpg'],//1

            ['PMI_terminais-municipais_VILA-NOVA-CACHOEIRINHA.pdf',
             'PMI_terminais-municipais_VILA-NOVA-CACHOEIRINHA_aplicacao.jpg'],//2

            ['PMI_terminais-municipais_AE-CARVALHO.pdf',
             'PMI_terminais-municipais_AE-CARVALHO_aplicacao.jpg'],//3

            ['PMI_terminais-municipais_ARICANDUVA.pdf',
             'PMI_terminais-municipais_ARICANDUVA_aplicacao.jpg'],//4

            ['PMI_terminais-municipais_PENHA.pdf',
             'PMI_terminais-municipais_PENHA_aplicacao.jpg'],//5

            ['PMI_terminais-municipais_SAO-MIGUEL.pdf',
             'PMI_terminais-municipais_SAO-MIGUEL_aplicacao.jpg'],//6

            ['PMI_terminais-municipais_CARRAO.pdf',
             'PMI_terminais-municipais_CARRAO_aplicacao.jpg'],//7

            ['PMI_terminais-municipais_CIDADE-TIRADENTES.pdf',
             'PMI_terminais-municipais_CIDADE-TIRADENTES_aplicacao.jpg'],//8

            ['PMI_terminais-municipais_SAPOPEMBA.pdf',
             'PMI_terminais-municipais_SAPOPEMBA_aplicacao.jpg'],//9

            ['PMI_terminais-municipais_SACOMA.pdf',
             'PMI_terminais-municipais_SACOMA_aplicacao.jpg'],//10

            ['PMI_terminais-municipais_GRAJAU.pdf',
             'PMI_terminais-municipais_GRAJAU_aplicacao.jpg'],//11

            ['PMI_terminais-municipais_PARELHEIROS.pdf',
             'PMI_terminais-municipais_PARELHEIROS_aplicacao.jpg'],//12

            ['PMI_terminais-municipais_SANTO-AMARO.pdf',
            'PMI_terminais-municipais_SANTO-AMARO_aplicacao.jpg'],//13

            ['PMI_terminais-municipais_VARGINHA.pdf',
             'PMI_terminais-municipais_VARGINHA_aplicacao.jpg'],//14

            ['PMI_terminais-municipais_GUARAPIRANGA.pdf',
             'PMI_terminais-municipais_GUARAPIRANGA_aplicacao.jpg'],//15

            ['PMI_terminais-municipais_JARDIM-ANGELA.pdf',
            'PMI_terminais-municipais_JARDIM-ANGELA_aplicacao.jpg'],//16

            ['PMI_terminais-municipais_JOAO-DIAS.pdf',
            'PMI_terminais-municipais_JOAO-DIAS_aplicacao.jpg'],//17

            ['PMI_terminais-municipais_AMARAL-GURGEL.pdf',
             'PMI_terminais-municipais_AMARAL-GURGEL_aplicacao.jpg'],//18

            ['PMI_terminais-municipais_BANDEIRA.pdf',
             'PMI_terminais-municipais_BANDEIRA_aplicacao.jpg'],//19

            ['PMI_terminais-municipais_LAPA.pdf',
             'PMI_terminais-municipais_LAPA_aplicacao.jpg'],//20

            ['PMI_terminais-municipais_PINHEIROS.pdf',
             'PMI_terminais-municipais_PINHEIROS_aplicacao.jpg'],//21

            ['PMI_terminais-municipais_PARQUE-DOM-PEDRO_MERCADO.pdf',
             'PMI_terminais-municipais_PARQUE-DOM-PEDRO_MERCADO_aplicacao.jpg']//22
        ],
        currentConteudo: 'home' 
    }, 
    computed:{
        btn_clicked: function(){
            return conteudo_botoes_ficha.btn_clicked
        },
        nome: function(){
            return conteudo_botoes_ficha.nome
        },
        conteudo: function(){
            return conteudo_botoes_ficha.conteudo
        }, 
        active_color: function(){
            return conteudo_botoes_ficha.active_color
        },
        active_bg_color: function(){
            return conteudo_botoes_ficha.active_bg_color
        },
        pdf_link: function(){
            var terminal = conteudo_botoes_ficha.nome
            var src = src_path + 'publicacao/'
            switch(terminal){
                case 'Terminal Pirituba': 
                    return src + this.pdf_img_src[0][0];break

                case 'Terminal Casa Verde': 
                    return src + this.pdf_img_src[1][0];break

                case 'Terminal Vila Nova Cachoeirinha': 
                    return src + this.pdf_img_src[2][0];break

                case 'Terminal A. E. Carvalho': 
                    return src + this.pdf_img_src[3][0];break
                
                case 'Terminal Aricanduva': 
                    return src + this.pdf_img_src[4][0];break
                
                case 'Terminal Penha': 
                    return src + this.pdf_img_src[5][0];break
                
                case 'Terminal São Miguel': 
                    return src + this.pdf_img_src[6][0];break
                
                case 'Terminal Vila Carrão': 
                    return src + this.pdf_img_src[7][0];break
                
                case 'Terminal Cidade Tiradentes': 
                    return src + this.pdf_img_src[8][0];break
                
                case 'Terminal Sapopemba': 
                    return src + this.pdf_img_src[9][0];break
                
                case 'Terminal Sacomã': 
                    return src + this.pdf_img_src[10][0];break
                
                case 'Terminal Grajaú': 
                    return src + this.pdf_img_src[11][0];break
                
                case 'Terminal Parelheiros': 
                    return src + this.pdf_img_src[12][0];break
                
                case 'Terminal Santo Amaro': 
                    return src + this.pdf_img_src[13][0];break

                case 'Terminal Varginha': 
                    return src + this.pdf_img_src[14][0];break
                
                case 'Terminal Guarapiranga': 
                    return src + this.pdf_img_src[15][0];break
                
                case 'Terminal Jardim Ângela': 
                    return src + this.pdf_img_src[16][0];break
                
                case 'Terminal João Dias': 
                    return src + this.pdf_img_src[17][0];break

                case 'Terminal Amaral Gurgel': 
                    return src + this.pdf_img_src[18][0];break
                
                case 'Terminal Bandeira': 
                    return src + this.pdf_img_src[19][0];break
                
                case 'Terminal Lapa': 
                    return src + this.pdf_img_src[20][0];break
                
                case 'Terminal Pinheiros': 
                    return src + this.pdf_img_src[21][0];break

                case 'Terminal Parque Dom Pedro': 
                    return src + this.pdf_img_src[22][0];break
                
                case 'Terminal Mercado': 
                    return src + this.pdf_img_src[22][0];break

                default: return 'erro: pdf não encontrado'
            }
        },
        img_publicacao: function(){
            var terminal = conteudo_botoes_ficha.nome
            var src = src_path + 'publicacao/'

            switch(terminal){
                case 'Terminal Pirituba': 
                    return src + this.pdf_img_src[0][1];break

                case 'Terminal Casa Verde': 
                    return src + this.pdf_img_src[1][1];break

                case 'Terminal Vila Nova Cachoeirinha': 
                    return src + this.pdf_img_src[2][1];break

                case 'Terminal A. E. Carvalho': 
                    return src + this.pdf_img_src[3][1];break
                
                case 'Terminal Aricanduva': 
                    return src + this.pdf_img_src[4][1];break
                
                case 'Terminal Penha': 
                    return src + this.pdf_img_src[5][1];break
                
                case 'Terminal São Miguel': 
                    return src + this.pdf_img_src[6][1];break
                
                case 'Terminal Vila Carrão': 
                    return src + this.pdf_img_src[7][1];break
                
                case 'Terminal Cidade Tiradentes': 
                    return src + this.pdf_img_src[8][1];break
                
                case 'Terminal Sapopemba': 
                    return src + this.pdf_img_src[9][1];break
                
                case 'Terminal Sacomã': 
                    return src + this.pdf_img_src[10][1];break
                
                case 'Terminal Grajaú': 
                    return src + this.pdf_img_src[11][1];break
                
                case 'Terminal Parelheiros': 
                    return src + this.pdf_img_src[12][1];break
                
                case 'Terminal Santo Amaro': 
                    return src + this.pdf_img_src[13][1];break

                case 'Terminal Varginha': 
                    return src + this.pdf_img_src[14][1];break
                
                case 'Terminal Guarapiranga': 
                    return src + this.pdf_img_src[15][1];break
                
                case 'Terminal Jardim Ângela': 
                    return src + this.pdf_img_src[16][1];break
                
                case 'Terminal João Dias': 
                    return src + this.pdf_img_src[17][1];break

                case 'Terminal Amaral Gurgel': 
                    return src + this.pdf_img_src[18][1];break
                
                case 'Terminal Bandeira': 
                    return src + this.pdf_img_src[19][1];break
                
                case 'Terminal Lapa': 
                    return src + this.pdf_img_src[20][1];break
                
                case 'Terminal Pinheiros': 
                    return src + this.pdf_img_src[21][1];break

                case 'Terminal Parque Dom Pedro': 
                    return src + this.pdf_img_src[22][1];break
                
                case 'Terminal Mercado': 
                    return src + this.pdf_img_src[22][1];break

                default: return 'erro: pdf não encontrado'
            }

        }
    }
});

/* smooth-scroll.js v1.2 */
(function(e,t){"use strict";var n=0,r=850,i=166,s=document.getElementsByTagName("a"),o;for(var u=0;u<s.length;u++){o=s[u].attributes.href===t?null:s[u].attributes.href.nodeValue.toString();if(o!==null&&o.length>1&&o.indexOf("#")!=-1){s[u].onclick=function(){var n,s=this.attributes.href.nodeValue.toString(),o=s.substr(0,s.indexOf("#")),u=s.substr(s.indexOf("#")+1);if(n=document.getElementById(u)){var l=(r-r%i)/i,c=f(),h=(a(n)-c)/l;if(e.history&&typeof e.history.pushState=="function")e.history.pushState({},t,o+"#"+u);for(var p=1;p<=l;p++){(function(){var t=h*p;setTimeout(function(){e.scrollTo(0,t+c)},i*p)})()}return false}}}}var a=function(e){var r=n*-1;while(e.offsetParent!=t&&e.offsetParent!=null){r+=e.offsetTop+(e.clientTop!=null?e.clientTop:0);e=e.offsetParent}return r};var f=function(){return document.documentElement.scrollTop!==t?document.documentElement.scrollTop:document.body.scrollTop}})(window);