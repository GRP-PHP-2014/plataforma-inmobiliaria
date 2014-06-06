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
        $userTmpFile = '/opt/lampp/htdocs/plataforma-inmobiliaria/files/' . FileSystemUtil::TMP_FOLDER_NAME . '/' . Yii::app()->user->title;
        if (!file_exists($userTmpFile)) {
            mkdir($userTmpFile, 0777, true);
        }
        return $userTmpFile . "/";
    }
    
    
    
    
}
