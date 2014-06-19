<?php

class RwsinmuebleController extends Controller {

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {

        $model = Inmueble::model()->findByPk($id);
        if ($model !== null) {
            $marray = $model->attributes;
            
            $images = array();
            foreach ($model->imagenesInmuebles as $img){
                array_push($images, $img->attributes);
            }
            $marray["imagenes"] = $images;
            
            Response::ok(CJSON::encode($marray));
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
        if (!array_key_exists("titulo", $filtros) || !array_key_exists("descripcion", $filtros)){
            Response::ok(CJSON::encode(array("resultado" => "falla","mensaje" => "estructura de filtros invalida")));
            return;
        }
        
        $inmuebles = Inmueble::findByFilters($filtros);
        
        $arrInmuebles = array();
        foreach ($inmuebles as $inm){
            
            
            array_push($arrInmuebles, $inm->attributes);           
        }
        Response::ok(CJSON::encode($arrInmuebles));
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
