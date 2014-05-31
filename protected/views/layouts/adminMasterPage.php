<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/jquery1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/bootstrap3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/alertify.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/js-extend.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/inmueble/logica-inmueble.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/bootstrap.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/alertify.core.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/alertify.bootstrap.css" media="screen, projection" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('admin/index'); ?>">Inmobiliaria</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuracion<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Yii::app()->createUrl('parametro/admin'); ?>">Configurar portada</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo Yii::app()->createUrl('parametro/admin'); ?>">P&aacute;rametros</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo Yii::app()->createUrl('usuario/admin'); ?>">Usuarios</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('cliente/admin'); ?>" >Clientes</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('inmueble/admin'); ?>">Inmuebles</a></li>
                        <li><a href="#">Calendario</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">                            
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span><?php echo Yii::app()->user->title ?></span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">mi perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo Yii::app()->createUrl("usuario/logout")?>">salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <?php echo $content; ?>
    </body>
</html>




