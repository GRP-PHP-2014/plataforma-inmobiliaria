// Llamadas Ajax
//GET___________GET_____________GET

  function buscarContenidos(filterSearch) {
    bloquearPantalla();
  	$.ajax({
  		url: CONF['ip'] + '/rwsinmueble/findbyfilters?filters=' + JSON.stringify(filterSearch),
  		type: 'GET',
  		dataType: 'json',
  	})
  	.done(function(msg) {
      CONF.searchResult = msg;
      cargarResultadoBusqueda(msg);
    })
    .fail(function(msg) {
  		console.error(msg);
  	})
    .always(function(msg) {
      desbloquearPantalla();
    });
  }

  function getDestacados() {
    bloquearPantalla();
    $.ajax({
      url: CONF['ip'] + '/rwsinmueble/getInmueblesDestacados',
      type: 'GET',
      dataType: 'json',
    })
    .done(function(msg) {
      cargarDestacados(msg);
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
        async: 'false',
        dataType: 'json',
    })
    .done(function(msg) {
      console.log(msg);
      mostrarPropiedad(msg);
      GLOBAL = { propiedad : msg };

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
                '&nombreCliente=' + obj.nombre +
                '&telefonoCliente=' + obj.tel +
                '&mensaje=' + obj.msg;

    bloquearPantalla();
    $.ajax({
  			url: CONF['ip'] + '/rwsnotificacion/ingresarNotificacion?' + query,
  			type: 'GET',
  			dataType: 'json',
  	})
  	.done(function(msg) {
  		$('#' + obj.tipo).modal({show:false});
      console.debug(msg);
  	})
  	.fail(function(msg) {
  		console.log(msg);
  	})
    .always(function(msg) {
      desbloquearPantalla();
    });
  }

  function notificacionCrearNuevoCliente() {
    bloquearPantalla();
    $.ajax({
        url: CONF['ip'] + '/emailNotificacion/createClient',
        type: 'POST',
        dataType: 'json',
        data : {
          emailCliente : $("#EmailNotificacion_emailCliente").val(),
          nombreCliente : $("#EmailNotificacion_nombreCliente").val()
        }
    })
    .done(function(msg) {
      if (msg.resultado === "ok")
        alertify.success(msg.detalle);
      else if (msg.resultado === "falla")
        alertify.error(msg.detalle);
    })
    .fail(function(msg) {
            console.log(msg);
    })
    .always(function(msg) {
      desbloquearPantalla();
    });
  }
