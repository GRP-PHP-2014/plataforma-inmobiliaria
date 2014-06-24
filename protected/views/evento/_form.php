<?php
/* @var $this EstadoInmuebleController */
/* @var $model EstadoInmueble */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'evento-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100, "class" => "form-control")); ?>
        <?php echo $form->error($model, 'titulo'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'fechaHoraDesde'); ?>
        <div class='input-group date'>
            <?php echo $form->textField($model, "fechaHoraDesde", array('size' => 60, 'maxlength' => 1024, "class" => "form-control")) ?>       
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>        
        <?php echo $form->error($model, 'fechaHoraDesde'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'fechaHoraHasta'); ?>
        <div class='input-group date' >
            <?php echo $form->textField($model, "fechaHoraHasta", array('size' => 60, 'maxlength' => 1024, "class" => "form-control")) ?>       
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>          
        <?php echo $form->error($model, 'fechaHoraHasta'); ?>
    </div>

    <div id="grp-inmueble-fk_estado" class="form-group">
        <?php echo $form->labelEx($model, 'idCliente'); ?>
        <?php echo $form->dropDownList($model, 'idCliente', $model->getListaClientes(), array("class" => "form-control combo-suggest")); ?>
    </div>
    
    <div id="grp-inmueble-fk_estado" class="form-group">
        <?php echo $form->labelEx($model, 'idInmueble'); ?>
        <?php echo $form->dropDownList($model, 'idInmueble', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'descripcion'); ?>
        <?php echo CHtml::activeTextArea($model, "descripcion", array('size' => 60, 'maxlength' => 1024, "class" => "form-control")) ?>       
        <?php echo $form->error($model, 'descripcion'); ?>
    </div>

    <a href="<?php echo Yii::app()->createUrl("evento/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
    <?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params["labelBotonCrear"] : Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>

    <?php $this->endWidget(); ?>
    
    <script type="text/javascript">
        $("#Evento_fechaHoraDesde").datetimepicker();
        $("#Evento_fechaHoraHasta").datetimepicker()
    </script>

</div><!-- form -->