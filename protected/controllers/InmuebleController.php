<?php

class InmuebleController extends Controller {

    public $layout = '//layouts/adminMasterPage';
    
    public function actionAdmin() {
        $model = new Inmueble('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Inmueble']))
            $model->attributes = $_GET['Inmueble'];

        $this->render('admin', array(
            'model' => $model,
        ));
    } 
    
    public function filters()
    {
        return array('accessControl',);
    }

    public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions'=>array('admin','create'),
                'users'=>array('director'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
    
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Inmueble;

        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);

        if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST"){
            $model->attributes = json_decode($_POST["data"] , true);
            if ($model->cSave()){
                Response::send(json_encode($model->attributes) , 200 , Response::CONTENT_TYPE_JSON);
            } else {
                Response::send(json_encode($model->errors) , 500 , Response::CONTENT_TYPE_JSON);
            }
        } else {

            $this->render('create', array(
                'model' => $model,
            ));
        }
    }
    
}
