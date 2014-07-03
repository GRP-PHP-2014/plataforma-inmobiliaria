<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="form-group col-lg-4">
        <?php echo $form->label($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100,"class" => "form-control input-sm")); ?>
    </div>

    <div class="form-group col-lg-4">
        <?php echo $form->label($model, 'descripcion'); ?>
        <?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 2048,"class" => "form-control input-sm")); ?>
    </div>

    <div class="form-group col-lg-4">
        <?php echo $form->label($model, 'tipo_inmueble'); ?>
        <?php echo $form->textField($model, 'tipo_inmueble', array('size' => 50, 'maxlength' => 50,"class" => "form-control input-sm")); ?>
    </div>

    <div class="form-group col-lg-12">
        <?php echo CHtml::submitButton(Yii::app()->params["labelBotonFiltrar"], array("class" => "btn btn-default")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->