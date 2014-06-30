
$( document ).ready(function() {
    console.log( "ready!" );
	/* smooth scrolling for scroll to top */
	$('.scroll-top').click(function(){
	  $('body,html').animate({scrollTop:0},1000);
	})
	/* smooth scrolling for scroll down */
	$('.scroll-down').click(function(){
	  $('body,html').animate({scrollTop:$(window).scrollTop()+800},1000);
	})

	/* highlight the top nav as scrolling occurs */
	$('body').scrollspy({ target: '#navbar' })
});

//UN DESTACADO
// <div class="col-md-12" style="margin-top:3em">
//   <div class="featurette2">
//     <img class="featurette-image img-circle pull-right" src="/plataforma-inmobiliaria/images/placehold/512.gif">
//     <h2 class="featurette-heading">Title. <span class="text-muted">Resume.</span></h2>
//     <hr class="featurette-divider">
//     <p class="lead">Description.</p>
//   </div>
// </div>

// UN RESULTADO DE BUSQUEDA
// <div class="col-sm-6"> 
//   <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
//     <div class="media">
//       <a class="pull-left" href="#" target="_parent">
//       <img alt="image" class="img-responsive" src="/plataforma-inmobiliaria/images/prop/prop1.jpg"></a>
//       <div class="clearfix visible-sm"></div>
//       <div class="media-body fnt-smaller">
//         <a href="#" target="_parent"></a>
//         <h4 class="media-heading">
//           <a href="#" target="_parent">$ 275.000 <small class="pull-right">Garzon 6215</small></a>
//         </h4>
//         <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
//           <li>4,820 mts2</li>
//           <li style="list-style: none">|</li>
//           <li>3 Habitaciones</li>
//           <li style="list-style: none">|</li>
//           <li>1 Baños</li>
//         </ul>
//         <p class="hidden-xs">Muy buena propiedad, sólida construcción, ubicada a 1 cuadra de avenida garzón, consta de 2 a 3 dormitorios, living comedor, cocina con placares aéreos y bajo mesada, baño completo, jardín,patio techado con parrillero,opción cochera, fondo y garaje con acceso por calle andrés de planchada para 2 autos con mesada. Excelente locomoción y servicios en la zona.</p>
//         <span class="fnt-smaller fnt-lighter fnt-arial">Codigo de referencia HQJ25</span>
//       </div>
//     </div>
//   </div>
// </div>


function crearNotificacion(id) {
	var json = { 
		  nombre : $('#' + id + ' .name').val(),
      mail : $('#' + id + ' .email').val(),
	    msg : $('#' + id + ' .msg').val(),
	    tipo : id
	}
	confirmarSuscripcion(json);
}

function Buscar() {
  buscarContenidos(filterSearch);
}


// Llamadas Ajax
//GET___________GET_____________GET

function buscarContenidos(filterSearch){

	$.ajax({
		url: CONF['ip'] + '/rwsinmueble/findbyfilters?filters=' + JSON.stringify(filterSearch),
		type: 'GET',
		dataType: 'json',
	})
	.done(function(msg) {
    console.log(msg);
  })
  .fail(function(msg) {
		console.log(msg);
	})
}

function getPropiedad(id) {

  bloquearPantalla();
  $.ajax({
      url: CONF['ip'] + '/rwsinmueble/' + id,
      type: 'GET',
      dataType: 'json',
  })
  .done(function(msg) {
    console.log(msg);
  })
  .fail(function(msg) {
    console.log(msg);
  })
  .always(function(msg) {
    desbloquearPantalla();
  });

}

function confirmarSuscripcion(obj) {
  var query = 'emailCliente=' + obj.mail + 
              '&tipoNotificacion=' + obj.tipo + 
              '&mensaje=' + obj.msg;
  bloquearPantalla();
  $.ajax({
			url: CONF['ip'] + '/rwsnotificacion/ingresarNotificacion?' + query,
			type: 'GET',
			dataType: 'json',
	})
	.done(function(msg) {
		$('#' + obj.tipo).modal({show:false})
	})
	.fail(function(msg) {
		console.log(msg);
	})
  .always(function(msg) {
    desbloquearPantalla();
  });
}






function bloquearPantalla(){
    'use strict';
    $.blockUI({ message: '<p><img src="images/home.gif" />  Cargando...</p>' ,
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        }
    });
}

function desbloquearPantalla(){
    'use strict';
    $.unblockUI();
}

function confirmar(){
	if(confirm('Estas seguro de continuar?'))
		return true;
	else
		return false;
}



function cargarHtmlTop(topAux,idElem,pag){
  pag || (pag = 0);

  var lengthFor = confProy.CANT_CONTENIDOS_INDEX;
  var html = "";
  
  if (topAux === undefined)
    topAux = new Array();

  if (topAux.length < confProy.CANT_CONTENIDOS_INDEX)
    lengthFor = topAux.length;

  for (var i = (pag*10 + 0); i < (pag*10 + 10); i++) {

    if (!(i >= lengthFor)) {

      var idContenido   = topAux[i].id;
      var descripcion   = topAux[i].descripcionContenido;
      var nombre        = topAux[i].nombreContenido;
      var precio        = topAux[i].precio;
      var calificacion  = topAux[i].calificacion;      
      var foto          = '/Images?' + topAux[i].listaFotos[0];
      var rutaDescarga  = topAux[i].urlDescarga;

      var formatPrice = "USD " + precio;
      if (precio == 0){
        formatPrice = 'Gratis';
        html += "<div class='col-sm-5 col-md-3'><div class='thumbnail'>"
              + "<img src='" + foto + "' class='img-thumbnail miniatura img-responsive' style='width:200px;height:200px;'>"
              + "<div class='caption'><h2 class='tituloTops'>" + nombre + "</h2>"
              + "<p class='descripcionTops'>" + descripcion + "</p>"
              + "<p class='precio'><a href='" + confProy.URL_CONTENIDO + idContenido + "' class='btn btn-primary' role='button'>Ver</a>"
              + "<a href='" + rutaDescarga + "' onclick='return confirmar();' class='btn btn-default' role='button'>Descargar</a>"  
              + formatPrice + "</p></div></div></div>";
      }
      else{
        var valor = getCodePayPal(precio);
        html += "<div class='col-sm-5 col-md-3'><div class='thumbnail'>"
              + "<img src='" + foto + "' class='img-thumbnail miniatura img-responsive' style='width:200px;height:200px;'>"
              + "<div class='caption'><h2 class='tituloTops'>" + nombre + "</h2>"
              + "<p class='descripcionTops'>" + descripcion + "</p>"
              + "<div class='row'>" 
              + "<div class='col-md-5'>" 
              + "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>"
              + "<input type='hidden' name='cmd' value='_s-xclick'>"
              + "<input type='hidden' name='hosted_button_id' value='" + valor + "'>"
              + "<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>"
              + "<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>"
              + "</form>"
              + "</div>"              
              + "<div class='col-md-7'>" 
              + "<p class='precio'><a href='" + confProy.URL_CONTENIDO + idContenido + "' class='btn btn-primary' role='button'>Ver</a>"
              + formatPrice + "</p>"
              + "</div>"
              + "</div>"
              + "</div></div></div>";
      }

    };
  };
  var container = document.getElementById(idElem);
      container.innerHTML = html;

}
