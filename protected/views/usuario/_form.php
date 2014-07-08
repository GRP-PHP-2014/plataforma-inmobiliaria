<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'usuario-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'usuario'); ?>
        <?php echo $form->textField($model, 'usuario', array('size' => 60, 'maxlength' => 64, "class" => "form-control input-sm")); ?>
        <?php echo $form->error($model, 'usuario'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 64, "class" => "form-control input-sm")); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 100, "class" => "form-control input-sm")); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'apellido'); ?>
        <?php echo $form->textField($model, 'apellido', array('size' => 60, 'maxlength' => 100, "class" => "form-control input-sm")); ?>
        <?php echo $form->error($model, 'apellido'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'rol'); ?>        
        <?php echo CHtml::dropDownList('Usuario[rol]', $model->rol, 
            array('administrativo' => 'administrativo', 'agente' => 'agente', 'director' => 'director'),
            array("class" => "form-control input-sm")); ?>       
    </div>
    
    <a href="<?php echo Yii::app()->createUrl("usuario/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
    <?php echo CHtml::submitButton($model->isNewRecord ? Yii::app()->params["labelBotonCrear"] : Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>

    <?php $this->endWidget(); ?>

</div>