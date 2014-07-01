function showFilters() {
  $('#filterDiv').fadeIn( 1000, 'linear');
}

function hideFilters() {
  $('#filterDiv').fadeOut( 1000, 'linear');
}

function Buscar() {

  filterSearch.precioDesde = parseInt($('#priceDesde').val());
  filterSearch.precioHasta = parseInt($('#priceHasta').val());
  filterSearch.cantidadBanios = parseInt($('#selectbath')[0].value);
  filterSearch.cantidadHabitaciones = parseInt($('#selectrooms')[0].value);
  filterSearch.filtroStr = $('#strBusqueda').val();

  filterSearch.tipoBien = [];
  if ($('#checkApto')[0].checked) 
    filterSearch.tipoBien.push("apartamento");  

  if ($('#checkCasa')[0].checked) 
    filterSearch.tipoBien.push("casa");

  filterSearch.tipoTransaccion = [];
  if ($('#checkAlquiler')[0].checked) 
    filterSearch.tipoTransaccion.push("alquiler");  

  if ($('#checkVenta')[0].checked) 
    filterSearch.tipoTransaccion.push("venta");
  
  filterSearch.barrios = [];
  var barrios = $('#selectBarrio')[0].selectedOptions;
  for (var i = barrios.length - 1; i >= 0; i--) {
    filterSearch.barrios.push(parseInt(barrios[i].value));
  };

  buscarContenidos(filterSearch);
  hideFilters();
}

function cargarResultadoBusqueda(Result){
  var html = "";
  var container = document.getElementById('searchResult');

  if (Result === undefined)
    Result = new Array();

  if (Result.length === 0)
    html = '<div class="col-sm-12" style="color:green"><h1>Su busqueda no ha dado resultados, pruebe cambiando los criterios de busqueda</h1></div>';
  else { 
    for (var i = 0; i < Result.length; i++) {
      var elem = Result[i];
      // var foto = '/plataforma-inmobiliaria/images/prop/prop1.jpg';
      var foto = '/plataforma-inmobiliaria/index.php/' + elem.imagenes[0];

      html += '<div class="col-sm-6">' +
              '<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">' +
                '<div class="media">' +
                  '<a class="pull-left" href="propiedad/' + elem.id + '" target="_parent">' +
                  '<img alt="image" class="img-responsive" src="' + foto + '"></a>' +
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
                    '<p class="hidden-xs">' + elem.descripcion + '</p>' +
                    '<span class="fnt-smaller fnt-lighter fnt-arial">Codigo de referencia ' + elem.id + '</span>' + 
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>';
      }
  }
  container.innerHTML = html;
}