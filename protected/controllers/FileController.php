<?php

class FileController extends Controller {

    public function actionUpload() {
        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();
    }

}
