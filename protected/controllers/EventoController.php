<?php

class EventoController extends AdminController {

    /**
     * @return array action filters
     */
    public function filters() {
        Yii::app()->session[Constantes::SESSION_CURRENT_TAB] = Constantes::ITEM_MENU_CALENDARIO;
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
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'create', 'view', 'delete','update'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Evento;
        
        if (isset($_POST['Evento'])) {
            
            $data = $_POST['Evento'];
            $evt = new Evento;
            $evt->descripcion = $data["descripcion"];
            $evt->fechaHoraDesde = $data["fechaHoraDesde"];
            $evt->fechaHoraHasta = $data["fechaHoraHasta"];
            $evt->titulo = $data["titulo"];
            $evt->idCliente = $data["idCliente"];
            $evt->emailCliente = Cliente::model()->findByPk($evt->idCliente)->email;
            $evt->idInmueble = $data["idInmueble"];
            $evt->tituloInmueble = Inmueble::model()->findByPk($evt->idInmueble)->titulo;
            $evt->idUsuario = Yii::app()->user->id;            
            if ($evt->save()){
                (new Auditoria)->registrarAuditoria(Yii::app()->user->id, new DateTime, Constantes::AUDITORIA_OBJETO_EVENTO, Constantes::AUDITORIA_OPERACION_ALTA, $evt->_id);
                $this->redirect(array('view', 'id' => $evt->_id));
            }
        }
        
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $evt = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Evento'])) {
            $data = $_POST['Evento'];
            $evt->descripcion = $data["descripcion"];
            $evt->fechaHoraDesde = $data["fechaHoraDesde"];
            $evt->fechaHoraHasta = $data["fechaHoraHasta"];
            $evt->titulo = $data["titulo"];
            $evt->idCliente = $data["idCliente"];
            $evt->emailCliente = Cliente::model()->findByPk($evt->idCliente)->email;
            $evt->idInmueble = $data["idInmueble"];
            $evt->tituloInmueble = Inmueble::model()->findByPk($evt->idInmueble)->titulo;
            $evt->idUsuario = Yii::app()->user->id;            
            if ($evt->save()){
                (new Auditoria)->registrarAuditoria(Yii::app()->user->id, new DateTime, Constantes::AUDITORIA_OBJETO_EVENTO, Constantes::AUDITORIA_OPERACION_MODIFICACION, $evt->_id);
                $this->redirect(array('view', 'id' => $evt->_id));
            }
                
        }

        $this->render('update', array(
            'model' => $evt,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Evento('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['EmailNotificacion']))
            $model->attributes = $_GET['EmailNotificacion'];
        $this->render('admin', array('model' => $model,));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TipoNotificacion the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Evento::model()->findByPk(new MongoID($id));
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TipoNotificacion $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tipo-notificacion-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    

}
