$( document ).ready(function() {
  $('.selectpicker').selectpicker('refresh');
  $("input.slider").slider()
    .on('slide', function(ev){
        $('#priceDesde')[0].value = ev.value[0];
        $('#priceHasta')[0].value = ev.value[1];
    });
});

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
      var htmlimages = '';

      for (var j = elem.imagenes.length - 1; j >= 0; j--) {
        var foto = '/plataforma-inmobiliaria/index.php/' + elem.imagenes[j].ruta;

        if (j === 0) {
          htmlimages += '<div class="active item img-responsive" data-slide-number="' + j + '">' +
                            '<img class="img-rounded img-responsive" src="' + foto + '"></div>';
        }
        else {
          htmlimages += '<div class="item" data-slide-number="' + j + '">' +
                          '<img class="img-rounded img-responsive" src="' + foto + '"></div>';
        }
      }

      html += '<div class="col-sm-6">' +
              '<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">' +
                '<div class="media">' +
                  '<a class="pull-left" href="propiedad.html?id=' + elem.id + '" target="_parent">' +
                   '<div class="col-md-4">' +
                      '<div id="imgCarousel_' + elem.id + '" class="carousel slide">' +
                        '<div class="carousel-inner">' +
                            htmlimages +
                        '</div>' +
                      '</div>' +
                      '<div class="col-md-4 carousel-controls-mini">' +
                        '<a href="#imgCarousel_' + elem.id + '" data-slide="prev">‹</a>' +
                        '<a href="#imgCarousel_' + elem.id + '" data-slide="next">›</a>' +
                      '</div>' +
                    '</div>' +
                  '<div class="clearfix visible-sm"></div>' +
                  '<div class="media-body fnt-smaller">' +
                    '<a href="propiedad.html?id=' + elem.id + '" target="_parent"></a>' +
                    '<h4 class="media-heading">' +
                      '<a href="propiedad.html?id=' + elem.id + '" target="_parent">$ ' + elem.precio_publicacion +
                      '<small class="pull-right">' + elem.direccion_corta + '</small></a>' +
                    '</h4>' +
                    '<ul class="list-inline mrg-0 btm-mrg-10 clr-535353">' +
                      '<li>' + elem.mts2_edificados + ' mts2</li>' +
                      '<li style="list-style: none">|</li>' +
                      '<li>' + elem.cant_dormitorios + ' Habitaciones</li>' +
                      '<li style="list-style: none">|</li>' +
                      '<li>' + elem.cant_banios + ' Baños</li>' +
                    '</ul>' +
                    '<p class="hidden-xs descResultSearch">' + elem.descripcion.toLocaleLowerCase() + '</p>' +
                    '<span class="fnt-smaller fnt-lighter fnt-arial">Codigo de referencia ' + elem.id + '</span>' +
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>';
      }
  }
  container.innerHTML = html;
}
