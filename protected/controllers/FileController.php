<?php

class FileController extends CController {

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', 
            'postOnly + delete', 
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('upload'),
                'roles' => array(Constantes::USER_ROLE_ADMINISTRATIVO, Constantes::USER_ROLE_DIRECTOR),
            ),
            array('allow',
                'actions' => array('display','displayInmuebleImage'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actionUpload() {
        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();
    }
    
    public function actionDisplay($id){
        $file = (new FileSystemUtil)->getTmpFile($id);
        Response::sendImage($file);
    }
    
    public function actionDisplayInmuebleImage($idInmueble,$idArchivo){
        $file = (new FileSystemUtil)->getInmuebleFile($idInmueble, $idArchivo);
        Response::sendImage($file);
    }

}
