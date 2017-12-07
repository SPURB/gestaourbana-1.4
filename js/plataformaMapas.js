/**
 * API Plataforma Mapas 
 *
 */

(function($,ol){
   function PlatMap(){};
   PlatMap.prototype.getFeatureAtPixelX = function(pixel,map,indexLayer){
              var features = [];
              var feature;
              map.forEachFeatureAtPixel(pixel, function(feature) {
                  features.push(feature);
              });
              if(features){
                  feature = features[indexLayer];
              }
              return feature;
    };
    PlatMap.prototype.createVectorLayerFromKML = function(url){
          var camada = new ol.layer.Vector({
            source: new ol.source.Vector({
              url: url,
              format: new ol.format.KML({
                extractStyles: true,
                extractAttributes: true,
                maxDepth: 2
              })
            })
            /*style: function(feature, resolution) {
              style.getText().setText(resolution < 5000 ? feature.get('name') : '');
              return style;
            }*/
          });
          return camada;
    };

    /**
    * CONFIGURA ESTILO DA CAMADA
    * RECEBE: URL DO ÍCONE
    * RETORNA: ESTILO
    */
    PlatMap.prototype.getStyleLayerWIcon = function(urlIcon, myScale = 1, myOpacity = 1){
      var stylePointLayer;
      var iconStyle = new ol.style.Icon({
        anchor: [0.5, 0.5],
        anchorXUnits: 'fraction',
        anchorYUnits: 'fraction',
        opacity: myOpacity,
        scale: myScale,
        src: urlIcon
      });
      stylePointLayer = new ol.style.Style({
        fill: new ol.style.Fill({
          color: 'rgba(128, 159, 255, 0.3)'
        }),
        stroke: new ol.style.Stroke({
          color: 'rgba(128, 159, 255, 1)',
          width: 1
        }),
        image: iconStyle
      });
      return stylePointLayer;
    };

    PlatMap.prototype.createCustomVectorLayerFromKML = function(url, myStyle){
          var camada = new ol.layer.Vector({
            source: new ol.source.Vector({
              url: url,
              format: new ol.format.KML({
                extractStyles: false,
                extractAttributes: true,
                maxDepth: 2
              })              
            }),
            style: myStyle
          });
          return camada;
    };

    /// Cria camada com features (do tipo ponto) agrupadas
    /// url: URL do arquivo KML
    /// cores: Objeto {textColor, strokeColor, fillColor}
    PlatMap.prototype.createClusterLayerFromKML = function(url, cores){
      var txtCol = '#fff';
      var strCol = '#fff';
      var fillCol = '#f33';
      if(cores !== undefined){
        if(cores.textColor != null)   txtCol = cores.textColor;
        if(cores.strokeColor != null) strCol = cores.strokeColor;
        if(cores.fillColor != null)   fillCol = cores.fillColor;
      }
      
      var camada = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: url,
          format: new ol.format.KML({
            extractStyles: true,
            extractAttributes: true,
            maxDepth: 2
          })
        })
      });
      var source = camada.getSource();
      var features = source.getFeatures();

      var clusterSource = new ol.source.Cluster({
        distance: 30,
        source: source
      });

      var styleCache = {};
      var clusters = new ol.layer.Vector({
        source: clusterSource,
        style: function(feature) {
          var size = feature.get('features').length;
          var style = styleCache[size];
          if (!style) {
            style = new ol.style.Style({
              image: new ol.style.Circle({
                radius: 10,
                stroke: new ol.style.Stroke({
                  color: strCol
                }),
                fill: new ol.style.Fill({
                  color: fillCol
                })
              }),
              text: new ol.style.Text({
                text: size.toString(),
                fill: new ol.style.Fill({
                  color: txtCol
                })
              })
            });
            styleCache[size] = style;
          }
          return style;
        }
      });
      return clusters;
    };
    // CRIA CAMADA CLUSTER (FEATURES AGRUPADAS POR PROXIMIDADE)
    PlatMap.prototype.createClusterFromFeatures = function(features, cores, dist){
      var txtCol = '#fff';
      var strCol = '#fff';
      var fillCol = '#f33';
      if(dist == null)
        dist = 20;
      if(cores !== undefined){
        if(cores.textColor != null)   txtCol = cores.textColor;
        if(cores.strokeColor != null) strCol = cores.strokeColor;
        if(cores.fillColor != null)   fillCol = cores.fillColor;
      }
      var camada = new ol.layer.Vector({
        source: new ol.source.Vector({features: features})
      });
      var source = camada.getSource();
      
      var clusterSource = new ol.source.Cluster({
        distance: dist,
        source: source
      });

      var styleCache = {};
      var clusters = new ol.layer.Vector({
        source: clusterSource,
        style: function(feature) {
          var size = feature.get('features').length;
          var style = styleCache[size];
          if (!style) {
            style = new ol.style.Style({
              image: new ol.style.Circle({
                radius: 10,
                stroke: new ol.style.Stroke({
                  color: strCol
                }),
                fill: new ol.style.Fill({
                  color: fillCol
                })
              }),
              text: new ol.style.Text({
                text: size.toString(),
                fill: new ol.style.Fill({
                  color: txtCol
                })
              })
            });
            styleCache[size] = style;
          }
          return style;
        }
      });
      return clusters;
    }
    
    PlatMap.prototype.flyToPoint = function(coords, duration, zoomIn){
      if(duration === null) duration = 2000;
      var start = +new Date();
      var pan = ol.animation.pan({
        duration: duration,
        source: (view.getCenter()),
        start: start
      });
      var bounce = ol.animation.bounce({
        duration: duration,
        resolution: 1.2 * view.getResolution(),
        start: start
      });
      var zoom = ol.animation.zoom({
        duration: duration,
        resolution: map.getView().getResolution(),
        easing: ol.easing.inAndOut
      });
      map.beforeRender(pan, zoom);
      view.setCenter(coords);
      view.setZoom(zoomIn);
    };

    /**
    * REMOVE FEATURES DUPLICADAS
    */
    PlatMap.prototype.removeDoubles = function(feats){
      // Verifica proximidade de features do tipo ponto
      var coordList = [];
      // Cria array com a coordenada X de cada feature e remove feature se já houver
      for (var i = feats.length - 1; i >= 0; i--) {
        var x = feats[i].getGeometry().getCoordinates()[0];
        var jaExiste = false;
        for (var iteration = coordList.length - 1; iteration >= 0; iteration--) {          
          if(x == coordList[iteration]){
            jaExiste = true;
          }
        }
        coordList.push(x);
        if(jaExiste){
          var index = feats.indexOf(feats[i]);
          feats.splice(index,1);
        }
      }
      return feats;
    }
    PlatMap.prototype.showHideCamada = function(camadas,element,MsgExibir,MsgOcultar){
      var isVisible;
      if(jQuery.isArray(camadas)){
        for (var i = camadas.length - 1; i >= 0; i--) {
          toggleLayer(camadas[i]);
        }
      }
      else
        toggleLayer(camadas);
      function toggleLayer(camada){
          if(camada.getVisible() == true){
                    camada.setVisible(false);
                    $(element).html(MsgExibir);
          }else {
                    camada.setVisible(true);
                    $(element).html(MsgOcultar);
          }
      }
    };
    /**
    *   VINCULA INFORMAÇÕES DO COMENTÁRIO
    */
    PlatMap.prototype.bindValuesComments = function (dataComment,apoio){
    var comments = "";
    for(var i = 0;i<dataComment.length;i++){
        var commentItem = "" +
                '<div class="commentcontainer">'+
                '<div class="headercontainer">'+
                    '<div class="topo">'+
                            '<h4>'+dataComment[i].comment_title+'</h4>'+
                    '</div><br><br>';
                    if(apoio){
                        commentItem += '<div>'+
                            '<p class="apoiadas">'+
                                dataComment[i].comment_numApoios +" Apoiadas."+
                            '</p>'+			
                        '</div><br><br>';
                    }
                    commentItem += '<div>'+
                            '<span class="commenttime">Enviado em: '+
                                    dataComment[i].comment_submitted +
                            '</span>'+
                    '</div>'+
                '</div>'+
                '<div class="headercontainer">'+
                    '<div class="topo" style="padding-right:5em">'+
                        '<p class="userinfo">'+
                                '<img src="../wp-content/themes/mapacolaborativo-1.0/images/img-user-icon.png" alt="Usuário" style="margin-right:1em;">'+
                               dataComment[i].comment_autor.author_nome +
                        '</p>'+
                    '</div>'+
                    '<div class="topo">'+
                        '<p class="userinfo">'+
                                '<img src="../wp-content/themes/mapacolaborativo-1.0/images/img-institution-icon.png" alt="Instituição" style="margin-right:1em;">'+
                                dataComment[i].comment_autor.author_instituicao +
                        '</p>'+
                    '</div>'+
                '</div>'+
                '<div align="justify">'+
                    '<p> Posicionamento: ' + dataComment[i].comment_posicionamento + '</p>'+
                    '<p>Comentário:</p>'+
                    '<p class="usercomment">'+
                            dataComment[i].comment_comentario +
                    '</p>';
                if(apoio)
                    commentItem += '<div class="BotaoApoiarVermelho" id="toggleFormApoio'+dataComment[i].comment_id+'" onclick="toggleFormComment('+dataComment[i].comment_id+',this);">Apoiar</div>';
                commentItem += '</div>'+
                '<hr style="height:2px;"/>';
            comments += commentItem;
        }
        return comments;
    }
    platMapAPI = new PlatMap();
}($,ol));

//validações
(function($){
    $(document).ready(function(){
    //Validando CEP e chamando Web Service de busca de CEP.
    jQuery('#CEP').on('blur', function(e) {
      var cep = jQuery('#CEP').val().replace(/\D/g, '');
        jQuery.ajax({
            type: 'GET',
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            success: function(data){
                jQuery("#endereco").val(data.logradouro !== undefined ? data.logradouro + ", " : "" );
                jQuery("#endereco").focus();
            },
            error: function(data){
                alert("Erro ao buscar CEP!");
                jQuery("#CEP").val("");
                jQuery("#CEP").focus();;
            }
}       );
    }); 
    });
    
}(jQuery));
