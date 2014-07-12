

$(document).ready(function() {
 	getDestacados();
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

function cargarDestacados(Result) {
  var html = "",
      align = "";

  if (Result === undefined)
    Result = new Array();

  var container = document.getElementById('destacados');
      container.innerHTML = '';

  for (var i = 0; i < Result.length; i++) {

    var elem = Result[i];
    // var foto = '/plataforma-inmobiliaria/images/placehold/512.gif';
    var foto = '/plataforma-inmobiliaria/index.php/' + elem.imagenes[0].ruta;

    var align = (i % 2 === 0) ? 'pull-right' : 'pull-left';

    html += '<div class="col-md-12" style="margin-top:3em">' +
              '<div class="featurette2">' +
                '<a href="propiedad.html?id=' + elem.id + '" target="new">' +
                '<img class="featurette-image img-circle img-destacados ' + align +'" src="' + foto + '"></a>' +
                '<h2 class="featurette-heading">' + elem.titulo + '. <span class="text-black">' +
                		elem.tipo_inmueble + ' | ' + elem.operacion_publicacion + '</span></h2>' +
                '<hr class="featurette-divider">' +
                '<p class="lead">' + elem.descripcion.toLocaleLowerCase() + '</p>' +
              '</div>' +
            '</div>';
    }
  var container = document.getElementById('destacados');
      container.innerHTML = html;
}
