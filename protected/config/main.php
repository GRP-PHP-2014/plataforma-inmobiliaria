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
        'application.models.auditoria.*',
        'application.models.cliente.*',
        'application.models.inmueble.*',
        'application.components.*',
        'application.extensions.MDBSuite.*',
        'application.extensions.XTChilen.*',
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
            'loginUrl' => array('usuario/login'),
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
        'defaultController' => 'usuario',
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                array('rinmueble/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'),
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
            'dbName' => 'prueba_yiimongo',
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
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
