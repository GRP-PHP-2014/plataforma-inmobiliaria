<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="form-group col-lg-3">
		<?php echo $form->label($model,'usuario',array("for" => "Usuario_username")); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>64,"class" => "form-control input-sm")); ?>
	</div>
	<div class="form-group col-lg-3">
		<?php echo $form->label($model,'email',array("for" => "Usuario_email")); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64,"class" => "form-control input-sm")); ?>
	</div>
	<div class="form-group col-lg-3">
		<?php echo $form->label($model,'nombre',array("for" => "Usuario_nombre")); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100,"class" => "form-control input-sm")); ?>
	</div>
	<div class="form-group col-lg-3">
		<?php echo $form->label($model,'apellido',array("for" => "Usuario_apellido")); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>100,"class" => "form-control input-sm")); ?>
	</div>
	<div class="form-group col-lg-12">
		<?php echo CHtml::submitButton(Yii::app()->params["labelBotonFiltrar"], array("class" => "btn btn-default")); ?>
	</div>
<?php $this->endWidget(); ?>

</div>