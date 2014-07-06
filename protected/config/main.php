<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Inmobiliaria',
    'defaultController' => 'usuario',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.models.parametro.*',
        'application.models.usuario.*',
        'application.models.evento.*',
        'application.models.auditoria.*',
        'application.models.cliente.*',
        'application.models.inmueble.*',
        'application.models.departamento.*',
        'application.models.ciudad.*',
        'application.models.barrio.*',
        'application.models.notificacion.*',
        'application.components.*',
        'application.extensions.MDBSuite.*',
        'application.extensions.XTChilen.*',
    ),
    'aliases' => array(
        'xupload' => 'ext.xupload'
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'yiiesunacaca',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    'homeUrl' => array('admin/index'),
    // application components
    'components' => array(
        'user' => array(
            'class' => 'WebUser',
            'loginUrl' => array('usuario/login'),
            'allowAutoLogin' => true,
            
        ),
        // uncomment the following to enable URLs in path-format
        'defaultController' => 'usuario',
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(

                'parametro/admin' => 'parametro/admin',
                'usuario/admin' => 'usuario/admin',
                'emailNotificacion/admin' => 'emailNotificacion/admin',
                'evento/admin' => 'evento/admin',
                
                'image/<id:.*\S.*>' => 'file/display',
                'propertyImage' => 'file/displayInmuebleImage',
                'rwsinmueble/findbyfilters/<filters:.*\S.*>' => 'rwsinmueble/findbyfilters',
                
                'emailNotificacion/createClient' => 'emailNotificacion/createClient',
                'emailNotificacion/<id:\w+>' => 'emailNotificacion/view',
                
                'parametro/<action:\w+>/<id:\w+>' => 'parametro/<action>',
                'evento/<action:\w+>/<id:\w+>' => 'evento/<action>',
                'usuario/<action:\w+>/<id:\w+>' => 'usuario/<action>',
                
                '<controller:\w+>/<id:\d+>' => '<controller>/view',                
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',  
                

            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=plataforma_inmobiliaria',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'ms_admin',
            'charset' => 'utf8',
        ),
        'mongodb' => array(
            'class' => 'EMongoDB',
            'connectionString' => 'mongodb://localhost',
            'dbName' => 'plataforma_inmobiliaria',
            'fsyncFlag' => true,
            'safeFlag' => true,
            'useCursor' => false
        ),
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    "params" => include(dirname(__FILE__) . "/parameters.php" ), //<� here is our file
);
