<?php 
<html>
  <head>

    <title>.:<?php echo CHtml::encode(Yii::app()->name); ?> .: Home :.</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/jquery1.11.0.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/bootstrap3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/bootstrap.min.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-inmobiliaria.css" media="screen" />

  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
              <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span >
                <span class="icon-bar"></span>
              </a>
              <a class="navbar-brand" href="#">Inmobiliaria</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#search" target="ext">Busqueda avanzada</a></li>
                <li><a href="#contact">Contacto</a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>