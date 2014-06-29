<?php

class PortadaController extends AdminController {

    /**
     * @return array action filters
     */
    public function filters() {
        Yii::app()->session[Constantes::SESSION_CURRENT_TAB] = Constantes::ITEM_MENU_PORTADA;
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
                'actions' => array('admin'),
                'users' => array('director'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new EditarDestacados;
        
        if (isset($_POST["EditarDestacados"])){
            $model->attributes = $_POST["EditarDestacados"];
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}
