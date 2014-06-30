// Llamadas Ajax
//GET___________GET_____________GET

function buscarContenidos(filterSearch){

  bloquearPantalla();
	$.ajax({
		url: CONF['ip'] + '/rwsinmueble/findbyfilters?filters=' + JSON.stringify(filterSearch),
		type: 'GET',
		dataType: 'json',
	})
	.done(function(msg) {
    cargarResultadoBusqueda(msg)
  })
  .fail(function(msg) {
		console.error(msg);
	})
  .always(function(msg) {
    desbloquearPantalla();
  });
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
    console.error(msg);
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
