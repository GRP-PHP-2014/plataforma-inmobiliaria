
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

function bloquearPantalla() {
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

function desbloquearPantalla() {
  'use strict';
  $.unblockUI();
}

function confirmar() {
	if(confirm('Estas seguro de continuar?'))
		return true;
	else
		return false;
}
