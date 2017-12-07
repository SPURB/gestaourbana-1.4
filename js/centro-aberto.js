// main
function showPng(value){
    document.getElementById(value).style.opacity=1;
}
function hidePng(value){
    document.getElementById(value).style.opacity=0;
}

var zoomIn  = -100;
var zoomOut = 100;
images = wheelzoom(document.getElementById('planta'), {zoom: 0.1, maxZoom: 4.5});
