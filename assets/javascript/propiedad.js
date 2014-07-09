
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


/* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {

}).each(function(i) {
  if(this.complete) {
    var item = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");

    item.attr("title",title);
    $(itemDiv.html()).appendTo(item);
    item.appendTo('.carousel-inner');

    if (i === 0) // set first item active
     item.addClass('active');

  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
    var id = parseInt(idx);
    $('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
});

/*  */

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

  var $slideshow1 = $('#slideshow');

  $slideshow1.desoSlide({
      thumbs: $('#slideshow_thumbs li > a'),
      overlay: 'always', // How to show overlay ('always', 'hover', 'none')
      imageClass: 'img-responsive', // Image class(es)
      interval: 10000, // Interval between each images
      controls: {
          show: true,
          keys: true
      },
      auto: {
        start: true,
        load:  true // Preloading images
      },
      effect: {
        provider: 'animate', // Effect provider ('animate', 'magic')
        name: 'fade' // Transition effect
      }
  });
});

function mostrarPropiedad(msg) {

  $('#propertyTitle')[0].innerText = msg.titulo;

  // insertImagesProperty(msg);
  insertInfoProperty(msg);
  insertComodities(msg);
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

// coord_latitud: "-4150075.3922056"
// coord_longitud: "-6253387.7864865"
// imagenes: Array[2]

// altura_salon_principal: null
// cant_plantas_local: null
// fk_estado: "4"
// potencia_contratada: ""
// tipo_local: ""
// tipo_local_observacion: ""

