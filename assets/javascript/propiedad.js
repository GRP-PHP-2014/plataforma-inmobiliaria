
$( document ).ready(function() {
	idPropiedad = window.location.search.split('?id=')[1];
	getPropiedad(idPropiedad);

  $('.fb-like')[0].setAttribute('data-href',window.location.toLocaleString());

  String.prototype.toCapitalCase = function() {
    var re = /\s/;
    var words = this.split(re);
    re = /(\S)(\S+)/;
    for (i = words.length - 1; i >= 0; i--) {
    re.exec(words[i]);
    words[i] = RegExp.$1.toUpperCase()
    + RegExp.$2.toLowerCase();
    }
    return words.join(' ');
  }
});

function mostrarPropiedad(msg) {

  $('#propertyTitle')[0].innerText = msg.titulo;

  insertImages(msg);
  insertInfoProperty(msg);
  insertComodities(msg);
}

$('#openBtn').click(function(){
  $('#myModal').modal({show:true})
  cargarPropiedadenMapa();
});


function cargarPropiedadenMapa() {
  // var iconoPersonalizado =
var HomeIcon = new CM.Icon();
    HomeIcon.image = '/plataforma-inmobiliaria/images/home-blue.png';
    HomeIcon.iconSize = new CM.Size(32, 37);
    HomeIcon.iconAnchor = new CM.Point(32, 37);

  var cloudmade = new CM.Tiles.CloudMade.Web({key: '8ee2a50541944fb9bcedded5165f09d9'});
  var map = new CM.Map('map-section', cloudmade);
  // var LatLngMarker = new CM.LatLng(GLOBAL.propiedad.coord_latitud,
  //                                    GLOBAL.propiedad.coord_longitud);

  var LatLngMarker = new CM.LatLng(-34.869839, -56.169007);
  var myMarker = new CM.Marker(LatLngMarker, { title: GLOBAL.propiedad.titulo,
                                               icon: HomeIcon });
  map.setCenter(LatLngMarker, 15);
  map.addOverlay(myMarker);

}


function insertInfoProperty(el) {
  var html = '',
      container = document.getElementById('infoProperty');

  html += '<h4>Departamento: <span class="text-muted"> ' + 'Montevideo' + '</span></h4>' +
          '<h4>Dirección: <span class="text-muted"> '+ el.direccion_corta + '</span></h4>' +
          '<h4>Año de construcción: <span class="text-muted">' + el.anio_construccion_aproximado + '</span></h4>' +
          '<h4>Descripcion: <span class="text-muted"> ' + el.descripcion + ' </span></h4>' +
          '<h4>Tipo de Inmueble: <span class="text-muted"> ' + el.tipo_inmueble + '</span></h4>' +
          '<h4>Disponible para: <span class="text-muted"> ' + el.operacion_publicacion + '</span></h4>' +
          '<h4>Precio: <span class="text-muted"> ' + el.precio_publicacion + ' USD' + '</span></h4>' +
          '<h4>Gastos comunes: <span class="text-muted"> ' + el.gastos_comunes + ' USD ' + '</span></h4>' +
          '<hr class="featurette-divider">' +
          '<h4>Baños: <span class="text-muted"> ' + el.cant_banios + '</span></h4>' +
          '<h4>Dormitorios: <span class="text-muted"> ' + el.cant_dormitorios + '</span></h4>' +
          '<h4>Mts 2 Edificados: <span class="text-muted"></span> ' + el.mts2_edificados + '</h4>' +
          '<h4>Piso: <span class="text-muted"></span> ' + el.numero_de_piso + '</h4>' +
          '<h4>Plantas: <span class="text-muted"> ' + el.cant_plantas_casa + '</span></h4>';
  container.innerHTML = html;
}

function insertComodities(el) {
  var html = '',
      shUrl = '/plataforma-inmobiliaria/images/tick',
      container = document.getElementById('infoComodity');

  html += '<h3>Comodidades​ | Extras </h3>' +
          // '<h4>*Estacionamiento <span><img src="' + shUrl + el.tiene_estacionamiento + '"></img></span></h4>' +
          '<h4>*Ascensor <span><img src="' + shUrl + el.tiene_ascensor + '.png"></img></span></h4>' +
          '<h4>*Calefaccion <span><img src="' + shUrl + el.tiene_calefaccion +'.png"></img></span></h4>' +
          '<h4>*Es propiedad horizontal <span><img src="' + shUrl + el.es_propiedad_horizontal + '.png"></img></span></h4>' +
          '<h4>*Deposito <span><img src="' + shUrl + el.tiene_deposito + '.png"></img></span></h4>' +
          '<h4>*Porteria <span><img src="' + shUrl + el.tiene_porteria + '.png"></img></span></h4>' +
          '<h4>*Portero Electrico <span><img src="' + shUrl + el.tiene_portero_electrico + '.png"></img></span></h4>' +
          '<h4>*Es planta alta <span><img src="' + shUrl + el.tiene_planta_alta + '.png"></img></span></h4>' +
          '<h4>*Vigilancia <span><img src="' + shUrl + el.tiene_vigilancia + '.png"></img></span></h4>' +
          // '<h4>*Piscina <span><img src="' + shUrl + el.tiene_piscina + '.png"></img></span></h4>' +
          '<h4>*Vista al mar <span><img src="' + shUrl + el.vista_al_mar + '.png"></img></span></h4>';
  container.innerHTML = html;
}

function insertImages(el) {
  var html = '',
      shUrl = '/plataforma-inmobiliaria/index.php/',
      shortUrl = '/plataforma-inmobiliaria/images/',
      container = document.getElementById('slideshow_thumbs');

  var img = el.imagenes;
  for (var i = img.length - 1; i >= 0; i--) {
    // img[i].ruta;     // img[i].titulo;
    html +=
      '<li>' +
        '<a href="' + shortUrl + 'po/bick_buck_bunny.jpg' + '">' +
          '<img class="thumbnail" style="width: 200px;" src="' + shortUrl + 'po/bick_buck_bunny.jpg' +
          '" alt="' + 'img[i].titulo' + '" data-desoslide-caption-title="' + 'img[i].titulo' + '">' +
        '</a>' +
      '</li>';
  };

  container.innerHTML = html;

  $('#slideshow').desoSlide({
      thumbs: $('#slideshow_thumbs li > a'),
      overlay: 'always', // How to show overlay ('always', 'hover', 'none')
      imageClass: 'img-responsive', // Image class(es)
      interval: 10000, // Interval between each images
      controls: {
          show: true,
          keys: true
      },
      auto: {
        start: false,
        load:  true // Preloading images
      },
      effect: {
        provider: 'animate', // Effect provider ('animate', 'magic')
        name: 'fade' // Transition effect
      }
  });
}

  $(function() {
    $('a.back-to-top').on('click', function(e) {
      e.preventDefault();

      $('html, body').stop().animate({
          scrollTop: $('html, body').offset().top
      }, 1000);
    });

    var syntaxHighlight = function() {
      $('pre code').each(function(i, e) {
          hljs.highlightBlock(e);
      });
    };

    syntaxHighlight();
  });


// coord_latitud: "-4150075.3922056"
// coord_longitud: "-6253387.7864865"
// imagenes: Array[2]

// altura_salon_principal: null
// cant_plantas_local: null
// fk_estado: "4"
// potencia_contratada: ""
// tipo_local: ""
// tipo_local_observacion: ""

