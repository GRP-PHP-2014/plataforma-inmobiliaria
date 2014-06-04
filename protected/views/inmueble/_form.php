<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'inmueble-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<?php echo $form->errorSummary($model); ?>

<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#datos-comunes" data-toggle="tab">Datos com&uacute;nes</a></li>
    <li><a href="#ubicacion" data-toggle="tab">Ubicaci&oacute;n</a></li>
    <li><a href="#imagenes" data-toggle="tab">Im&aacute;genes</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="datos-comunes">
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
                        'local' => 'LOCAL COMERCIAL'), 
                        array("class" => "form-control"));
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
    </div>
    <div class="tab-pane fade in active" id="ubicacion">
        <div id="mapa-ubicacion">
            
        </div>
    </div>
    <div class="tab-pane fade in active" id="imagenes">
        <?php
            $this->widget('xupload.XUpload', array(
                'url' => Yii::app()->createUrl("inmueble/upload", array("parent_id" => 1)),
                'model' => $model->getModeloImagenes(),
                'attribute' => 'file',
                'multiple' => true,
            ));
        ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-16">
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <a href="<?php echo Yii::app()->createUrl("inmueble/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params["labelBotonCrear"] : Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>
    </div>
</div>
<?php $this->endWidget(); ?>

<script type="text/javascript">
    $(document).ready(function(){
        initOpenStreetMapIngresoInmueble();
    });
</script>

