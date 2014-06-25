<?php

class RwsnotificacionController extends RWSController {

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionIngresarNotificacion() {

        $ntf = new EmailNotificacion;
        $ntf->email = $this->arguments["mensaje"];
        $ntf->cliente = $this->arguments["emailCliente"];
        $ntf->tipoNotificacion = $this->arguments["tipoNotificacion"];
        $ntf->fechaHoraEnvio = (new DateTime)->format(Constantes::DATETIME_STRING_FORMAT);
        $ntf->estado = Constantes::ESTADO_NOTIFICACION_PENDIENTE;
        
        if ($ntf->save()){
            Response::ok(CJSON::encode(array("resultado" => "exito", "mensaje" => "notificacion con id = {$ntf->_id} ingresada con exito")));
        } else {
            Response::ok(CJSON::encode(array("resultado" => "falla", "mensaje" => "inmueble no encontrado")));
        }
        
    }

}
