<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 512, "class" => "form-control input-sm")); ?>
    </div>
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'descripcion'); ?>
        <?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 512, "class" => "form-control input-sm")); ?>
    </div>
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'fechaHoraDesde'); ?>
        <?php echo $form->textField($model, 'fechaHoraDesde', array('size' => 60, 'maxlength' => 512, "class" => "form-control date-input input-sm")); ?>
    </div>
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'fechaHoraHasta', array('size' => 60, 'maxlength' => 512, "class" => "form-control date-input input-sm")); ?>
    </div>

    <div class="form-group col-lg-12">
        <button type="submit" class="btn btn-default">
            <?php echo Yii::app()->params["labelBotonFiltrar"] ?>
        </button>             
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->