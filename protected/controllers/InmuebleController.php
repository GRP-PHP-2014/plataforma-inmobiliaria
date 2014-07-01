<?php

class InmuebleController extends AdminController {

    /**
     * @return array action filters
     */
    public function filters() {
        Yii::app()->session[Constantes::SESSION_CURRENT_TAB] = Constantes::ITEM_MENU_INMUEBLES;
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'upload', 'uploadImages'),
                'users' => array('director'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
        $model->strArrayImagenes = $model->imagesToStringArray();
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Inmueble;

        $fsUtil = new FileSystemUtil;        
        
        if (isset($_POST['Inmueble'])) {
            
            $model->attributes = $_POST['Inmueble'];
            if ($model->save()){
                
                //creo el directorio para las imagenes del inmueble
                $fsUtil->createPropertyFoderIfNotExists($model->id);
                
                //guardo las imagenes para el inmueble
                $images = $fsUtil->getTmpFilesNames();
                foreach($images as $img){
                    $imgInm = new ImagenInmueble;
                    $imgInm->id_inmueble = $model->id;
                    $imgInm->ruta = $img;
                    if ($imgInm->save()){
                        $fsUtil->copyFileFromTmpToFs($imgInm->ruta, $model->id);
                    }
                }
                
                (new Auditoria)->registrarAuditoria(Yii::app()->user->id, new DateTime, Constantes::AUDITORIA_OBJETO_INMUEBLE, Constantes::AUDITORIA_OPERACION_ALTA, $model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $fsUtil->clearUserTmpFolder();
        $this->render('create', array('model' => $model,));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
         
        $model = $this->loadModel($id);

        $fsUtil = new FileSystemUtil;   
        $fsUtil->createPropertyFoderIfNotExists($id);
        
        if (isset($_POST['Inmueble'])) {
            $model->attributes = $_POST['Inmueble'];
            if ($model->save()){
                
                //elimino las imagenes viejas de el sistema de archivos y de la bd (las referencias)
                $fsUtil->deleteImagesFromProperty($id);
                ImagenInmueble::deleteImagenFromProperty($id);
                
                //guardo las imagenes nuevas para el inmueble
                $images = $fsUtil->getTmpFilesNames();
                foreach($images as $img){
                    $imgInm = new ImagenInmueble;
                    $imgInm->id_inmueble = $model->id;
                    $imgInm->ruta = $img;
                    if ($imgInm->save()){
                        $fsUtil->copyFileFromTmpToFs($imgInm->ruta, $model->id);
                    }
                }
                
                (new Auditoria)->registrarAuditoria(Yii::app()->user->id, new DateTime, Constantes::AUDITORIA_OBJETO_INMUEBLE, Constantes::AUDITORIA_OPERACION_ALTA, $model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $fsUtil->clearUserTmpFolder();
        $fsUtil->copyAllFilesFromFsToTmp($id);        
        $this->render('update', array('model' => $model));
    }
/*
    public function actionUploadImages() {
        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();
    }
*/
    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Inmueble');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        
        $model = new Inmueble('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Inmueble']))
            $model->attributes = $_GET['Inmueble'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Inmueble the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Inmueble::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
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
