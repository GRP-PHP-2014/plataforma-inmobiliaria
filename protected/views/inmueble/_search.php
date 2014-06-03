<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_inmueble'); ?>
		<?php echo $form->textField($model,'tipo_inmueble',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vista_al_mar'); ?>
		<?php echo $form->textField($model,'vista_al_mar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_calefaccion'); ?>
		<?php echo $form->textField($model,'tiene_calefaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gastos_comunes'); ?>
		<?php echo $form->textField($model,'gastos_comunes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_construccion_aproximado'); ?>
		<?php echo $form->textField($model,'anio_construccion_aproximado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coord_latitud'); ?>
		<?php echo $form->textArea($model,'coord_latitud',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coord_longitud'); ?>
		<?php echo $form->textArea($model,'coord_longitud',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_banios'); ?>
		<?php echo $form->textField($model,'cant_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mts2_edificados'); ?>
		<?php echo $form->textField($model,'mts2_edificados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_plantas_casa'); ?>
		<?php echo $form->textField($model,'cant_plantas_casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'es_propiedad_horizontal'); ?>
		<?php echo $form->textField($model,'es_propiedad_horizontal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_dormitorios'); ?>
		<?php echo $form->textField($model,'cant_dormitorios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_de_piso'); ?>
		<?php echo $form->textField($model,'numero_de_piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_ascensor'); ?>
		<?php echo $form->textField($model,'tiene_ascensor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_porteria'); ?>
		<?php echo $form->textField($model,'tiene_porteria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_portero_electrico'); ?>
		<?php echo $form->textField($model,'tiene_portero_electrico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_vigilancia'); ?>
		<?php echo $form->textField($model,'tiene_vigilancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_local'); ?>
		<?php echo $form->textField($model,'tipo_local',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_local_observacion'); ?>
		<?php echo $form->textField($model,'tipo_local_observacion',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_planta_alta'); ?>
		<?php echo $form->textField($model,'tiene_planta_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altura_salon_principal'); ?>
		<?php echo $form->textField($model,'altura_salon_principal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cant_plantas_local'); ?>
		<?php echo $form->textField($model,'cant_plantas_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_estacionamiento'); ?>
		<?php echo $form->textField($model,'tiene_estacionamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_deposito'); ?>
		<?php echo $form->textField($model,'tiene_deposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'potencia_contratada'); ?>
		<?php echo $form->textField($model,'potencia_contratada',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_estado'); ?>
		<?php echo $form->textField($model,'fk_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->