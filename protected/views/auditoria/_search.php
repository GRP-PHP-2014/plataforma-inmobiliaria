<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */
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
        <?php echo $form->label($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array("class" => "form-control")); ?>
    </div>
    
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'usuario'); ?>
        <?php echo $form->textField($model, 'usuario', array("class" => "form-control")); ?>
    </div>
    
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'objeto'); ?>
        <?php echo $form->textField($model, 'objeto', array('size' => 60, 'maxlength' => 100,"class" => "form-control")); ?>
    </div>

    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'operacion'); ?>
        <?php echo $form->textField($model, 'operacion', array('size' => 60, 'maxlength' => 100,"class" => "form-control")); ?>
    </div>

    <div class="form-group col-lg-12">
        <?php echo CHtml::submitButton(Yii::app()->params["labelBotonFiltrar"], array("class" => "btn btn-default")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->