<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#datos-comunes" data-toggle="tab">Datos com&uacute;nes</a></li>
    <li><a href="#ubicacion" data-toggle="tab">Ubicaci&oacute;n</a></li>
    <li><a href="#imagenes" data-toggle="tab">Im&aacute;genes</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active inmueble-tab-container" id="datos-comunes">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'inmueble-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
            'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
        ?>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'titulo'); ?>
                    <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100, "class" => "form-control")); ?>
                    <?php echo $form->error($model, 'titulo'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'descripcion'); ?>
                    <?php echo $form->textArea($model, 'descripcion', array('size' => 60, 'maxlength' => 2048, "class" => "form-control")); ?>
                    <?php echo $form->error($model, 'descripcion'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tipo_inmueble'); ?>
                    <?php
                    echo CHtml::dropDownList('Inmueble[tipo_inmueble]', $model->tipo_inmueble, array(
                        'apartamento' => 'APARTAMENTO',
                        'casa' => 'CASA',
                        'local' => 'LOCAL COMERCIAL'), array("class" => "form-control"));
                    ?>  
                    <?php echo $form->error($model, 'tipo_inmueble'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'vista_al_mar'); ?>
                    <?php echo $form->checkBox($model, 'vista_al_mar'); ?>
                    <?php echo $form->error($model, 'vista_al_mar'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_calefaccion'); ?>
                    <?php echo $form->checkBox($model, 'tiene_calefaccion'); ?>
                    <?php echo $form->error($model, 'tiene_calefaccion'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'gastos_comunes'); ?>
                    <?php echo $form->textField($model, 'gastos_comunes', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'gastos_comunes'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'anio_construccion_aproximado'); ?>
                    <?php echo $form->textField($model, 'anio_construccion_aproximado', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'anio_construccion_aproximado'); ?>
                </div>


                <div class="form-group">
                    <?php echo $form->labelEx($model, 'coord_latitud'); ?>
                    <?php echo $form->textField($model, 'coord_latitud', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'coord_latitud'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'coord_longitud'); ?>
                    <?php echo $form->textField($model, 'coord_longitud', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'coord_longitud'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'cant_banios'); ?>
                    <?php echo $form->textField($model, 'cant_banios', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'cant_banios'); ?>
                </div>                
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'cant_dormitorios'); ?>
                    <?php echo $form->textField($model, 'cant_dormitorios', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'cant_dormitorios'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'numero_de_piso'); ?>
                    <?php echo $form->textField($model, 'numero_de_piso', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'numero_de_piso'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_ascensor'); ?>
                    <?php echo $form->checkBox($model, 'tiene_ascensor'); ?>
                    <?php echo $form->error($model, 'tiene_ascensor'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_porteria'); ?>
                    <?php echo $form->checkBox($model, 'tiene_porteria'); ?>
                    <?php echo $form->error($model, 'tiene_porteria'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_portero_electrico'); ?>
                    <?php echo $form->checkBox($model, 'tiene_portero_electrico'); ?>
                    <?php echo $form->error($model, 'tiene_portero_electrico'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_vigilancia'); ?>
                    <?php echo $form->checkBox($model, 'tiene_vigilancia'); ?>
                    <?php echo $form->error($model, 'tiene_vigilancia'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tipo_local'); ?>
                    <?php echo $form->textField($model, 'tipo_local', array('size' => 50, 'maxlength' => 50, "class" => "form-control")); ?>
                    <?php echo $form->error($model, 'tipo_local'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tipo_local_observacion'); ?>
                    <?php echo $form->textField($model, 'tipo_local_observacion', array('size' => 60, 'maxlength' => 1024, "class" => "form-control")); ?>
                    <?php echo $form->error($model, 'tipo_local_observacion'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_planta_alta'); ?>
                    <?php echo $form->checkBox($model, 'tiene_planta_alta'); ?>
                    <?php echo $form->error($model, 'tiene_planta_alta'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'altura_salon_principal'); ?>
                    <?php echo $form->textField($model, 'altura_salon_principal', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'altura_salon_principal'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'cant_plantas_local'); ?>
                    <?php echo $form->textField($model, 'cant_plantas_local', array("class" => "form-control")); ?>
                    <?php echo $form->error($model, 'cant_plantas_local'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_estacionamiento'); ?>
                    <?php echo $form->checkBox($model, 'tiene_estacionamiento'); ?>
                    <?php echo $form->error($model, 'tiene_estacionamiento'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tiene_deposito'); ?>
                    <?php echo $form->checkBox($model, 'tiene_deposito'); ?>
                    <?php echo $form->error($model, 'tiene_deposito'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'potencia_contratada'); ?>
                    <?php echo $form->textField($model, 'potencia_contratada', array('size' => 10, 'maxlength' => 10, "class" => "form-control")); ?>
                    <?php echo $form->error($model, 'potencia_contratada'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'fk_estado'); ?>
                    <?php
                    echo CHtml::dropDownList('Inmueble[fk_estado]', $model->fk_estado, array(
                        'bueno' => 'bueno',
                        'medio' => 'medio',
                        'malo' => 'malo'), array("class" => "form-control"));
                    ?> 
                    <?php echo $form->error($model, 'fk_estado'); ?>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="tab-pane fade in inmueble-tab-container" id="ubicacion">
        <div id="mapa-ubicacion">

        </div>
    </div>
    <div class="tab-pane fade in inmueble-tab-container" id="imagenes">

        <div class="row">
            <div class="col-lg-12">
                <form id="images-upload" action="uploadImages" method="POST" enctype="multipart/form-data">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Agregar im&aacute;genes</span>
                                <input type="file" name="files[]" multiple>
                            </span>
                            <button type="submit" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Subir</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancelar</span>
                            </button>
                            <button type="button" class="btn btn-danger delete">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Eliminar</span>
                            </button>
                            <input type="checkbox" class="toggle">
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                </form>
                <br>
            </div>
            <!-- The blueimp Gallery widget -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
            <!-- The template to display files available for upload -->
            <script id="template-upload" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                <td>
                <span class="preview"></span>
                </td>
                <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
                </td>
                <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                <i class="glyphicon glyphicon-upload"></i>
                <span>Start</span>
                </button>
                {% } %}
                {% if (!i) { %}
                <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancel</span>
                </button>
                {% } %}
                </td>
                </tr>
                {% } %}
            </script>
            <!-- The template to display files available for download -->
            <script id="template-download" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
                </span>
                </td>
                <td>
                <p class="name">
                {% if (file.url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                <span>{%=file.name%}</span>
                {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
                </td>
                <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="glyphicon glyphicon-trash"></i>
                <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
                {% } else { %}
                <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancel</span>
                </button>
                {% } %}
                </td>
                </tr>
                {% } %}
            </script>
            <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.ui.widget.js"></script>
            <!-- The Templates plugin is included to render the upload/download listings -->
            <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
            <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
            <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
            <!-- The Canvas to Blob plugin is included for image resizing functionality -->
            <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
            <!-- blueimp Gallery script -->
            <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
            <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.iframe-transport.js"></script>
            <!-- The basic File Upload plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload.js"></script>
            <!-- The File Upload processing plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-process.js"></script>
            <!-- The File Upload image preview & resize plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-image.js"></script>
            <!-- The File Upload audio preview plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-audio.js"></script>
            <!-- The File Upload video preview plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-video.js"></script>
            <!-- The File Upload validation plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-validate.js"></script>
            <!-- The File Upload user interface plugin -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/jquery.fileupload-ui.js"></script>
            <!-- The main application script -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/file-upload/main.js"></script>
            <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
            <!--[if (gte IE 8)&(lt IE 10)]>
            <script src="js/cors/jquery.xdr-transport.js"></script>
            <![endif]-->
        </div>
    </div>
</div>

<div class="row row-botonera-inferior">
    <div class="col-lg-12">
        <a href="<?php echo Yii::app()->createUrl("inmueble/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params["labelBotonCrear"] : Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //initOpenStreetMapIngresoInmueble();
    });
</script>

