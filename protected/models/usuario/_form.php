<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'usuario-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'usuario'); ?>
        <?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>64)); ?>
        <?php echo $form->error($model,'usuario'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'contrasenia'); ?>
        <?php echo $form->textField($model,'contrasenia',array('size'=>60,'maxlength'=>64)); ?>
        <?php echo $form->error($model,'contrasenia'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'nombre'); ?>
        <?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'nombre'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'apellido'); ?>
        <?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'apellido'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'habilitado'); ?>
        <?php echo $form->textField($model,'habilitado'); ?>
        <?php echo $form->error($model,'habilitado'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ultimo_ingreso'); ?>
        <?php echo $form->textField($model,'ultimo_ingreso'); ?>
        <?php echo $form->error($model,'ultimo_ingreso'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'habilitado'); ?>
        <?php echo $form->textField($model,'habilitado'); ?>
        <?php echo $form->error($model,'habilitado'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->