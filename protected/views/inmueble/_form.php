<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmueble-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_inmueble'); ?>
		<?php echo $form->textField($model,'tipo_inmueble',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vista_al_mar'); ?>
		<?php echo $form->textField($model,'vista_al_mar'); ?>
		<?php echo $form->error($model,'vista_al_mar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_calefaccion'); ?>
		<?php echo $form->textField($model,'tiene_calefaccion'); ?>
		<?php echo $form->error($model,'tiene_calefaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gastos_comunes'); ?>
		<?php echo $form->textField($model,'gastos_comunes'); ?>
		<?php echo $form->error($model,'gastos_comunes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_construccion_aproximado'); ?>
		<?php echo $form->textField($model,'anio_construccion_aproximado'); ?>
		<?php echo $form->error($model,'anio_construccion_aproximado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coord_latitud'); ?>
		<?php echo $form->textArea($model,'coord_latitud',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'coord_latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coord_longitud'); ?>
		<?php echo $form->textArea($model,'coord_longitud',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'coord_longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_banios'); ?>
		<?php echo $form->textField($model,'cant_banios'); ?>
		<?php echo $form->error($model,'cant_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mts2_edificados'); ?>
		<?php echo $form->textField($model,'mts2_edificados'); ?>
		<?php echo $form->error($model,'mts2_edificados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_plantas_casa'); ?>
		<?php echo $form->textField($model,'cant_plantas_casa'); ?>
		<?php echo $form->error($model,'cant_plantas_casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'es_propiedad_horizontal'); ?>
		<?php echo $form->textField($model,'es_propiedad_horizontal'); ?>
		<?php echo $form->error($model,'es_propiedad_horizontal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_dormitorios'); ?>
		<?php echo $form->textField($model,'cant_dormitorios'); ?>
		<?php echo $form->error($model,'cant_dormitorios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_de_piso'); ?>
		<?php echo $form->textField($model,'numero_de_piso'); ?>
		<?php echo $form->error($model,'numero_de_piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_ascensor'); ?>
		<?php echo $form->textField($model,'tiene_ascensor'); ?>
		<?php echo $form->error($model,'tiene_ascensor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_porteria'); ?>
		<?php echo $form->textField($model,'tiene_porteria'); ?>
		<?php echo $form->error($model,'tiene_porteria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_portero_electrico'); ?>
		<?php echo $form->textField($model,'tiene_portero_electrico'); ?>
		<?php echo $form->error($model,'tiene_portero_electrico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_vigilancia'); ?>
		<?php echo $form->textField($model,'tiene_vigilancia'); ?>
		<?php echo $form->error($model,'tiene_vigilancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_local'); ?>
		<?php echo $form->textField($model,'tipo_local',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_local_observacion'); ?>
		<?php echo $form->textField($model,'tipo_local_observacion',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'tipo_local_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_planta_alta'); ?>
		<?php echo $form->textField($model,'tiene_planta_alta'); ?>
		<?php echo $form->error($model,'tiene_planta_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altura_salon_principal'); ?>
		<?php echo $form->textField($model,'altura_salon_principal'); ?>
		<?php echo $form->error($model,'altura_salon_principal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cant_plantas_local'); ?>
		<?php echo $form->textField($model,'cant_plantas_local'); ?>
		<?php echo $form->error($model,'cant_plantas_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_estacionamiento'); ?>
		<?php echo $form->textField($model,'tiene_estacionamiento'); ?>
		<?php echo $form->error($model,'tiene_estacionamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_deposito'); ?>
		<?php echo $form->textField($model,'tiene_deposito'); ?>
		<?php echo $form->error($model,'tiene_deposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'potencia_contratada'); ?>
		<?php echo $form->textField($model,'potencia_contratada',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'potencia_contratada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_estado'); ?>
		<?php echo $form->textField($model,'fk_estado'); ?>
		<?php echo $form->error($model,'fk_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->