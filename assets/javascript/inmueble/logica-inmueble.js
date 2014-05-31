


function ingresarInmueble() {

    var error = false;

    var nombre = $("#inputNombreInmueble");
    var descripcion = $("#inputDescripcionInmueble");
    if (nombre.val() === "") {
        nombre.parent().addClass("has-error");
        error = true;
    } else {
        nombre.parent().removeClass("has-error");
    }

    if (descripcion.val() === "") {
        descripcion.parent().addClass("has-error");
        error = true;
    } else {
        descripcion.parent().removeClass("has-error");
    }



    if (!error) {

        crearNuevoInmuebleClient(JSON.stringify($('form').serializeObject()));


    } else {
        alertify.error("Complete los campos obligatorios");
    }

}









/* ________________________ LLAMADOS AJAX ________________________ */

function crearNuevoInmuebleClient(serializedForm) {

    $.ajax({
        type: "POST",
        url: "create",
        data: { 'data' : serializedForm }
    })
    .done(function(msg) {
        console.log(msg);
        alertify.success("inmueble ingresado con exito");
    })
    .fail(function(msg){
        console.log(msg);
        alertify.error("error interno de la aplicacion");
    })
    .always(function(){
        
    });

}