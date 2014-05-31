<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="form-group col-lg-6">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>64,"class" => "form-control")); ?>
	</div>

	<div class="form-group col-lg-6">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100,"class" => "form-control")); ?>
	</div>

	<div class="form-group col-lg-12">
		<?php echo CHtml::submitButton('Buscar', array("class" => "btn btn-default")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->