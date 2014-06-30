
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

	$('body').scrollspy({ target: '#navbar' })
});

function crearNotificacion(id) {
	var json = { 
		  nombre : $('#' + id + ' .name').val(),
      mail : $('#' + id + ' .email').val(),
	    msg : $('#' + id + ' .msg').val(),
	    tipo : id
	}
	confirmarSuscripcion(json);
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

function cargarResultadoBusqueda(Result){
  var html = "";
  
  if (Result === undefined)
    Result = new Array();

  for (var i = 0; i < Result.length; i++) {

    var elem = Result[i];
    var foto = '/plataforma-inmobiliaria/images/placehold/512.gif'; //elem.imagenes[0];

    html += '<div class="col-md-12" style="margin-top:3em">' +
              '<div class="featurette2">' +
                '<img class="featurette-image img-circle pull-right" src="' + foto + '">' + 
                '<h2 class="featurette-heading">' + elem.titulo + '. <span class="text-muted">Resume.</span></h2>' +
                '<hr class="featurette-divider">' +
                '<p class="lead">' + elem.descripcion+ '</p>' +
              '</div>' +
            '</div>';
    }
  var container = document.getElementById('');
      container.innerHTML = html;
}