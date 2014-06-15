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
    const RIGHTS_MODE = 755;

    function checkCurrentUserTmpFolder() {

        $currUser = Yii::app()->user->title;
        $tmpFolder = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE) . "/tmp";

        if (!file_exists($tmpFolder . $currUser)) {
            mkdir($tmpFolder . $currUser, FileSystemUtil::RIGHTS_MODE, true);
        }
    }

    function getCurrentUserTmpFolder() {
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $userTmpFolder = join(DIRECTORY_SEPARATOR, array($rutaBase, 'tmp', Yii::app()->user->title));
        if (!file_exists($userTmpFolder)) {
            mkdir($userTmpFolder, FileSystemUtil::RIGHTS_MODE);
        }
        return $userTmpFolder;
    }

    /**
     * 
     * @param type $fileName
     * @return type
     */
    function getTmpFile($fileName) {
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $file = join(DIRECTORY_SEPARATOR, array($rutaBase, 'tmp', Yii::app()->user->title, $fileName));
        return $file;
    }

    function clearUserTmpFolder() {
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $tmpFolder = glob(join(DIRECTORY_SEPARATOR, array($rutaBase, 'tmp', Yii::app()->user->title)) . DIRECTORY_SEPARATOR . '*');
        foreach ($tmpFolder as $file) { // iterate files
            if (is_file($file))
                unlink($file); // delete file
        }
    }
    
    function getTmpFilesNames(){
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $tmpFiles = glob(join(DIRECTORY_SEPARATOR, array($rutaBase, 'tmp', Yii::app()->user->title)) . DIRECTORY_SEPARATOR . '*');
        $filesNames = array();
        foreach ($tmpFiles as $file) {
            if (is_file($file)){
                $parts = explode(DIRECTORY_SEPARATOR, $file);
                array_push($filesNames, $parts[count($parts) - 1]);
            }
        }
        return $filesNames;
    }
    
    /**
     * Copia el archivo con nombre = {fileName} del directorio temporal del usuario actualmente
     * logueado en la aplicacion, al directorio final de imagenes 
     * para el inmueble pasado como parametro {idInmueble}
     */
    function copyFileFromTmpToFs($fileName , $idInmueble){
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $tmpFolder = join(DIRECTORY_SEPARATOR, array($rutaBase, 'tmp', Yii::app()->user->title)) . DIRECTORY_SEPARATOR;
        $finalFolder = join(DIRECTORY_SEPARATOR, array($rutaBase, 'inmuebles', $idInmueble)) . DIRECTORY_SEPARATOR;
        return copy($tmpFolder . $fileName, $finalFolder . $fileName);        
    }
    
    /**
     * Crea un directorio en el directorio base de imagenes con el nombre {idInmueble}.
     * @param type $idInmueble: identificador del inmueble para el cual se creara el directorio de imagenes.
     */
    function createInmuebleImageFolder($idInmueble){
        $rutaBase = Parametro::model()->findByPk(Constantes::PARAMETRO_RUTA_BASE)->valor;
        $finalFolder = join(DIRECTORY_SEPARATOR, array($rutaBase, 'inmuebles', $idInmueble));
        if (!file_exists($finalFolder)) {
            mkdir($finalFolder, FileSystemUtil::RIGHTS_MODE);
        }
    }

}
