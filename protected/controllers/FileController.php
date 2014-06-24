<?php

class FileController extends Controller {

    public function actionUpload() {
        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();
    }
    
    public function actionDisplay($id){
        $file = (new FileSystemUtil)->getTmpFile($id);
        Response::sendImage($file);
    }

}
