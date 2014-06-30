function showFilters() {
  $('#filterDiv').fadeIn( 1000, 'linear');
}

function hideFilters() {
  $('#filterDiv').fadeOut( 1000, 'linear');
}

function Buscar() {
  buscarContenidos(filterSearch);
  hideFilters();
}

function cargarResultadoBusqueda(Result){
  var html = "";
  
  if (Result === undefined)
    Result = new Array();

  for (var i = 0; i < Result.length; i++) {

    var elem = Result[i];
    var foto = '/Images?' + elem.imagenes[0];

    html += '<div class="col-sm-6">' +
            '<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">' +
              '<div class="media">' +
                '<a class="pull-left" href="#" target="_parent">' +
                '<img alt="image" class="img-responsive" src="/plataforma-inmobiliaria/images/prop/prop1.jpg"></a>' +
                '<div class="clearfix visible-sm"></div>' + 
                '<div class="media-body fnt-smaller">' + 
                  '<a href="#" target="_parent"></a>' + 
                  '<h4 class="media-heading">' + 
                    '<a href="#" target="_parent">$ ' + elem.precio_publicacion + '<small class="pull-right">' + 'elem.direccion' + '</small></a>' +
                  '</h4>' + 
                  '<ul class="list-inline mrg-0 btm-mrg-10 clr-535353">' +
                    '<li>' + elem.mts2_edificados + ' mts2</li>' +
                    '<li style="list-style: none">|</li>' +
                    '<li>' + elem.cant_dormitorios + ' Habitaciones</li>' + 
                    '<li style="list-style: none">|</li>' +
                    '<li>' + elem.cant_banios + ' Baños</li>' +
                  '</ul>' +
                  '<p class="hidden-xs">' + elem.descripcion+ '</p>' +
                  '<span class="fnt-smaller fnt-lighter fnt-arial">Codigo de referencia' + elem.id + '</span>' + 
                '</div>' +
              '</div>' +
            '</div>' +
          '</div>';
    }
  var container = document.getElementById('searchResult');
      container.innerHTML = html;
}