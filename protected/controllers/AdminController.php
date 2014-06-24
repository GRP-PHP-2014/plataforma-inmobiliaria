<?php

class AdminController extends Controller {

    /**
     * Displays the contact page
     */
    public function actionIndex() {
        
        
        $this->layout='adminMasterPage';
        $this->render('index');
    } 
    
    public function filters()
    {
        return array('accessControl',);
    }

    public function accessRules()
    {
        return array(
            array(
                'deny',
                'actions'=>array('index'),
                'users'=>array('?'),
            ),
        );
    }
}
