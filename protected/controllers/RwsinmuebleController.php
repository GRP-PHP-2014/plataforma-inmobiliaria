<?php

class RwsinmuebleController extends CController {

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {

        $model = Inmueble::model()->findByPk($id);
        if ($model !== null) {      
            Response::ok(CJSON::encode($model->toArray()));
        } else {
            Response::ok(CJSON::encode(array("resultado" => "falla", "mensaje" => "inmueble no encontrado")));
        }        
    }
    
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionFindbyfilters($filters) {
        //http://localhost/plataforma-inmobiliaria/index.php/rwsinmueble/findbyfilters/{'titulo' : '', 'descripcion' : ''}?XDEBUG_SESSION_START=netbeans-xdebug
        $filtros = CJSON::decode($filters);
        if (!array_key_exists("tipoBien", $filtros) || !array_key_exists("filtroStr", $filtros)
                || !array_key_exists("tipoTransaccion", $filtros) || !array_key_exists("cantidadBanios", $filtros)
                || !array_key_exists("cantidadHabitaciones", $filtros) || !array_key_exists("cantidadHabitaciones", $filtros)
                || !array_key_exists("barrios", $filtros) || !array_key_exists("precioDesde", $filtros)
                || !array_key_exists("precioHasta", $filtros)){
            Response::ok(CJSON::encode(array("resultado" => "falla","mensaje" => "estructura de filtros invalida")));
            return;
        }
        
        $inmuebles = Inmueble::findByFilters($filtros);
        
        $arrInmuebles = array();
        foreach ($inmuebles as $inm){
            
            
            array_push($arrInmuebles, $inm->toArray());
        }
        Response::ok(CJSON::encode($arrInmuebles));
    }
    
    public function actionGetInmueblesDestacados(){
        $inmuebles = Inmueble::findDestacados();        
        $arrInmuebles = array();
        foreach ($inmuebles as $inm){           
            array_push($arrInmuebles, $inm->toArray());
        }
        Response::ok(CJSON::encode($arrInmuebles));
    }
    
    public function actionGetInformacionGrafica($grafica){
        switch($grafica){
            case "inmueblesPorTipo":
                Response::ok($this->getInmueblesPorTipo());            
            default :
                Response::error(CJSON::encode(array(
                    "resultado" => Constantes::RESULTADO_OPERACION_FALLA,
                    "detalle" => "operacion no permitida")));
        }
        
    }
    
    private function getInmueblesPorTipo(){
        $result = array();
        $arr = (new Inmueble)->countByTipo();
        foreach (array_key($arr) as $i){
            
        }
        
        return CJSON::encode($arr);
    }

    /**
     * Performs the AJAX validation.
     * @param Inmueble $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'inmueble-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }  

}
