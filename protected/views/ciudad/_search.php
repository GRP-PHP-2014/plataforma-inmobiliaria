<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
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
        <?php echo $form->label($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 64, "class" => "form-control input-sm")); ?>
    </div>

    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'departamento'); ?>
        <?php echo $form->textField($model, 'departamento', array('size' => 60, 'maxlength' => 64, "class" => "form-control input-sm")); ?>
    </div>

	<div class="form-group col-lg-12">
            <button type="submit" class="btn btn-default">
                <?php echo Yii::app()->params["labelBotonFiltrar"] ?>
            </button>             
	</div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->