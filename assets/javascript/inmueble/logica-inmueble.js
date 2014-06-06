
function Constantes(){
    
    this.TIPO_INMUEBLE_APARTAMENTO = "apartamento";
    this.TIPO_INMUEBLE_CASA = "casa";
    this.TIPO_INMUEBLE_LOCAL = "local";
    
}

var constantes = new Constantes();


function configurarFormularioSegunTipo(){  
    
    if ($("#Inmueble_tipo_inmueble").val() === constantes.TIPO_INMUEBLE_CASA){
        $("#grp-inmueble-mts2_edificados").removeClass("hidden");
        $("#grp-inmueble-cant_plantas_casa").removeClass("hidden");
        $("#grp-inmueble-es_propiedad_horizontal").removeClass("hidden");
        $("#grp-inmueble-cant_dormitorios").removeClass("hidden");       
    } else {
        $("#grp-inmueble-mts2_edificados").addClass("hidden");
        $("#grp-inmueble-cant_plantas_casa").addClass("hidden");
        $("#grp-inmueble-es_propiedad_horizontal").addClass("hidden");
        $("#grp-inmueble-cant_dormitorios").addClass("hidden"); 
    }
    
    if ($("#Inmueble_tipo_inmueble").val() === constantes.TIPO_INMUEBLE_APARTAMENTO){
        $("#grp-inmueble-numero_de_piso").removeClass("hidden");
        $("#grp-inmueble-tiene_ascensor").removeClass("hidden");
        $("#grp-inmueble-tiene_porteria").removeClass("hidden");
        $("#grp-inmueble-tiene_portero_electrico").removeClass("hidden");       
        $("#grp-inmueble-tiene_vigilancia").removeClass("hidden");       
    } else {
        $("#grp-inmueble-numero_de_piso").addClass("hidden");
        $("#grp-inmueble-tiene_ascensor").addClass("hidden");
        $("#grp-inmueble-tiene_porteria").addClass("hidden");
        $("#grp-inmueble-tiene_portero_electrico").addClass("hidden");       
        $("#grp-inmueble-tiene_vigilancia").addClass("hidden"); 
    }
    
    
    if ($("#Inmueble_tipo_inmueble").val() === constantes.TIPO_INMUEBLE_LOCAL){
        $("#grp-inmueble-tipo_local").removeClass("hidden");
        $("#grp-inmueble-tipo_local_observacion").removeClass("hidden");
        $("#grp-inmueble-tiene_planta_alta").removeClass("hidden");
        $("#grp-inmueble-altura_salon_principal").removeClass("hidden");
        $("#grp-inmueble-cant_plantas_local").removeClass("hidden");
        $("#grp-inmueble-tiene_estacionamiento").removeClass("hidden");
        $("#grp-inmueble-tiene_deposito").removeClass("hidden");
        $("#grp-inmueble-potencia_contratada").removeClass("hidden");        
    } else {
        $("#grp-inmueble-tipo_local").addClass("hidden");
        $("#grp-inmueble-tipo_local_observacion").addClass("hidden");
        $("#grp-inmueble-tiene_planta_alta").addClass("hidden");
        $("#grp-inmueble-altura_salon_principal").addClass("hidden");
        $("#grp-inmueble-cant_plantas_local").addClass("hidden");
        $("#grp-inmueble-tiene_estacionamiento").addClass("hidden");
        $("#grp-inmueble-tiene_deposito").addClass("hidden");
        $("#grp-inmueble-potencia_contratada").addClass("hidden");        
    }    
    
}