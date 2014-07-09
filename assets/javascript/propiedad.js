
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

function mostrarPropiedad() {

}

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

  var $slideshow1 = $('#slideshow1');

  $slideshow1.desoSlide({
      thumbs: $('ul.slideshow1_thumbs li > a'),
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

// anio_construccion_aproximado: "1980"
// cant_banios: "1"
// cant_dormitorios: "2"
// coord_latitud: "-4150075.3922056"
// coord_longitud: "-6253387.7864865"
// direccion_corta: "Garzon 1503"
// direccion_larga: null
// es_propiedad_horizontal: "0"
// cant_plantas_casa: null
// descripcion: ""
// gastos_comunes: "120"
// id: "59"
// id_barrio: null
// id_ciudad: null
// id_departamento: null
// mts2_edificados: null
// imagenes: Array[2]
// numero_de_piso: "4"
// operacion_publicacion: "venta"
// precio_publicacion: "85000"

// tiene_ascensor: "1"
// tiene_calefaccion: "1"
// tiene_deposito: "0"
// tiene_estacionamiento: "0"
// tiene_planta_alta: "0"
// tiene_porteria: "1"
// tiene_portero_electrico: "0"
// tiene_vigilancia: "0"

// tipo_inmueble: "apartamento"
// titulo: "BUEN CHALET, AL FRENTE!!"
// vista_al_mar: "0"

// altura_salon_principal: null
// cant_plantas_local: null
// fk_estado: "4"
// potencia_contratada: ""
// tipo_local: ""
// tipo_local_observacion: ""

