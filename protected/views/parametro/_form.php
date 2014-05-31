<?php
/* @var $this ParametroController */
/* @var $model Parametro */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'parametro-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 64, "class" => "form-control", "disabled" => "true")); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'descripcion'); ?>
        <?php echo CHtml::activeTextArea($model, "descripcion", array('size' => 60, 'maxlength' => 1024, "class" => "form-control")) ?>
        
        <?php echo $form->error($model, 'descripcion'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'valor'); ?>
        <?php echo $form->textField($model, 'valor', array('size' => 60, 'maxlength' => 512, "class" => "form-control")); ?>
        <?php echo $form->error($model, 'valor'); ?>
    </div>

    <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=parametro/admin">Volver</a>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar', array("class" => "btn btn-default")); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->