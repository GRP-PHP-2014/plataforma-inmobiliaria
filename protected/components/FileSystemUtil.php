<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileUtil
 *
 * @author ubuntu
 */
class FileSystemUtil {
    
    const TMP_FOLDER_NAME = "tmp";
    const IMAGES_FOLDER_NAME = "imagenes_inmuebles";

    
    function checkCurrentUserTmpFolder(){
        
        $currUser = Yii::app()->user->title;
        $tmpFolder = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE) . "/tmp";
        
        if (!file_exists($tmpFolder . $currUser)) {
            mkdir($tmpFolder . $currUser, 0777, true);
        }
        
    }
    
    function getCurrentUserTmpFolder(){
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $userTmpFolder = join(DIRECTORY_SEPARATOR , array($rutaBase, 'tmp', Yii::app()->user->title));
        if (!file_exists($userTmpFolder)) {
            mkdir($userTmpFolder, 0700);
        }
        return $userTmpFolder;
    }
    
    function getTmpFile($fileName){
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $file = join(DIRECTORY_SEPARATOR , array($rutaBase, 'tmp', Yii::app()->user->title , $fileName)); 
        return $file;
    }
    
    
}
