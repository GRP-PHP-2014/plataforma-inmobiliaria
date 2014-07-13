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

$('#openBtn').click(function(){

  $('#dialog-map').modal({show:true})

  setTimeout(function() { cargarResultadosDeBusquedaenMapa(); }, 500);

});


var pelo;
function cargarResultadosDeBusquedaenMapa() {

  var HomeIcon = new CM.Icon();
      HomeIcon.image = CONF.mapIcon;
      HomeIcon.iconSize = new CM.Size(32, 37);
      HomeIcon.iconAnchor = new CM.Point(32, 37);

  var cloudmade = new CM.Tiles.CloudMade.Web({key: '8ee2a50541944fb9bcedded5165f09d9'});
  map = new CM.Map('map-section', cloudmade);

  for (var i = 0; i < CONF.searchResult.length; i++) {
    CONF.searchResult[i]
    var LatLngMarker = new CM.LatLng(CONF.searchResult[i].coord_latitud,
                                     CONF.searchResult[i].coord_longitud);

    var tituloId = '[' + CONF.searchResult[i].id + '] ' + CONF.searchResult[i].titulo;
    var myMarker = new CM.Marker(LatLngMarker, { title: tituloId,
                                                 url : 'propiedad.html?id=' + CONF.searchResult[i].id,
                                                 icon: HomeIcon });
    map.setCenter(LatLngMarker, 15);
    map.addOverlay(myMarker);
    // pelo = myMarker;

    myMarker._createMouseHandler(myMarker,'click', function(elem) { console.log('nico pete')})
    CM.Event.addListener(myMarker, 'click', function(elem) {
      console.log('entre en el evento loco');
      console.debug(elem);
      pelo = elem;
    });

// marker.openInfoWindow(
//             "<img width='200' height='267' src='http://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Louvre.jpg/200px-Louvre.jpg'><br />" +
//             "<h3 style='text-align: center'><a href='http://en.wikipedia.org/wiki/Louvre'>The Louvre Museum</a></h3>", {maxWidth: 220});

  };
  map.addControl(new CM.LargeMapControl());
  map.addControl(new CM.ScaleControl());
  var bottomleft = new CM.ControlPosition(CM.BOTTOM_RIGHT, new CM.Size(15, 5));
    map.addControl(new CM.OverviewMapControl(), bottomleft);

  $('img.wml-marker.wml-marker-print').click(function(evt) {
    console.log('ente en el evento flasero');
    console.debug(evt);
    var titulo = evt.target.title.split(' ');
    titulo = titulo[0].replace(']','').replace('[','');

    window.location.href = 'propiedad.html?id=' + titulo;
    // pelo.evt = evt;
    // pelo.map = map;

  })
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
