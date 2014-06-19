<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Ver info de tipo de notificaci&oacute;n<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <div class="form">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'tipo-notificacion-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'nombre'); ?>
                <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 64, "class" => "form-control" , "disabled" => "true")); ?>
                <?php echo $form->error($model, 'nombre'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'descripcion'); ?>
                <?php echo $form->textArea($model, 'descripcion', array('size' => 60, 'maxlength' => 512, "class" => "form-control", "disabled" => "true")); ?>
                <?php echo $form->error($model, 'descripcion'); ?>
            </div>

            <a href="<?php echo Yii::app()->createUrl("tipoNotificacion/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
    <div class="col-lg-6"></div>
</div>
