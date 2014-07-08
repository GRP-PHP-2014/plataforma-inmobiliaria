<?php

class SiteController extends AdminController {

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    
    public function actionIndex(){
        Yii::app()->session[Constantes::SESSION_CURRENT_TAB] =  Constantes::ITEM_MENU_HOME ;
        $this->render('index');
    }

}
