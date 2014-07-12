<?php ?>

<div class="row">
    <div class="col-lg-12">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?> <span class="glyphicon glyphicon-dashboard"></span>  Resumen<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?> 
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-home"></span>
                Inmuebles por estado
            </div>
            <!-- /.panel-heading -->
            <div id="grafica-inmuebles" class="panel-body">

                
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-6">
        <div onclick="window.location='<?php echo Yii::app()->createUrl('emailNotificacion/admin'); ?>'" class="panel-clickleable chat-panel panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-envelope"></span>
                Notificaciones pendientes
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul id="contenedor-notificaciones" class="chat">
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="/plataforma-inmobiliaria/images/iconoemail.jpg" alt="User Avatar" class="img-circle">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Jack Sparrow</strong> 
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                </small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="/plataforma-inmobiliaria/images/iconoemail.jpg" alt="User Avatar" class="img-circle">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="/plataforma-inmobiliaria/images/iconoemail.jpg" alt="User Avatar" class="img-circle">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Jack Sparrow</strong> 
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                </small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                </small>
                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.panel-footer -->
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        loadGraficaInmuebles();
        obtenerNotificacionesPendientes();
    });
</script>

