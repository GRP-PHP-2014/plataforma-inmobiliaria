<?php

class RwsnotificacionController extends RWSController {

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionIngresarNotificacion($id) {

        $ntf = new EmailNotificacion;
        $ntf->email = $this->arguments["email"];
        $ntf->cliente = $this->arguments["cliente"];
        $ntf->tipoNotificacion = $this->arguments["tipoNotificacion"];
        $ntf->tipoNotificacion = $this->arguments["tipoNotificacion"];
        $ntf->fechaHoraEnvio = $this->arguments["fechaHoraEnvio"];
        
        if ($ntf->save()){
            Response::ok(CJSON::encode(array("resultado" => "exito", "mensaje" => "notificacion con id = {$ntf->_id} ingresada con exito")));
        } else {
            Response::ok(CJSON::encode(array("resultado" => "falla", "mensaje" => "inmueble no encontrado")));
        }
        
    }

}
