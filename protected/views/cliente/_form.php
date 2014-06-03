<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cliente-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 64, "class" => "form-control")); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 100, "class" => "form-control")); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'apellido'); ?>
        <?php echo $form->textField($model, 'apellido', array('size' => 60, 'maxlength' => 100, "class" => "form-control")); ?>
        <?php echo $form->error($model, 'apellido'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'direccion'); ?>
        <?php echo CHtml::activeTextArea($model, "direccion", array('size' => 60, 'maxlength' => 2048, "class" => "form-control")) ?>       
        <?php echo $form->error($model, 'direccion'); ?>
    </div>
    
    <div class="form-group">
        <?php echo $form->labelEx($model, 'comentarios'); ?>
        <?php echo CHtml::activeTextArea($model, "comentarios", array('size' => 60, 'maxlength' => 1024, "class" => "form-control")) ?>       
        <?php echo $form->error($model, 'comentarios'); ?>
    </div>

    <a href="<?php echo Yii::app()->createUrl("cliente/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
    <?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params["labelBotonCrear"] : Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>


    <?php $this->endWidget(); ?>

</div><!-- form -->