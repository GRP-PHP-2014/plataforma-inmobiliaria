<?php
/* @var $this InmuebleController */
/* @var $data Inmueble */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vista_al_mar')); ?>:</b>
	<?php echo CHtml::encode($data->vista_al_mar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_calefaccion')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_calefaccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gastos_comunes')); ?>:</b>
	<?php echo CHtml::encode($data->gastos_comunes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_construccion_aproximado')); ?>:</b>
	<?php echo CHtml::encode($data->anio_construccion_aproximado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coord_latitud')); ?>:</b>
	<?php echo CHtml::encode($data->coord_latitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coord_longitud')); ?>:</b>
	<?php echo CHtml::encode($data->coord_longitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_banios')); ?>:</b>
	<?php echo CHtml::encode($data->cant_banios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mts2_edificados')); ?>:</b>
	<?php echo CHtml::encode($data->mts2_edificados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_plantas_casa')); ?>:</b>
	<?php echo CHtml::encode($data->cant_plantas_casa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es_propiedad_horizontal')); ?>:</b>
	<?php echo CHtml::encode($data->es_propiedad_horizontal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_dormitorios')); ?>:</b>
	<?php echo CHtml::encode($data->cant_dormitorios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_de_piso')); ?>:</b>
	<?php echo CHtml::encode($data->numero_de_piso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_ascensor')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_ascensor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_porteria')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_porteria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_portero_electrico')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_portero_electrico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_vigilancia')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_vigilancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_local')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_local_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_local_observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_planta_alta')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_planta_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura_salon_principal')); ?>:</b>
	<?php echo CHtml::encode($data->altura_salon_principal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_plantas_local')); ?>:</b>
	<?php echo CHtml::encode($data->cant_plantas_local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_estacionamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_estacionamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_deposito')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_deposito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potencia_contratada')); ?>:</b>
	<?php echo CHtml::encode($data->potencia_contratada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_estado')); ?>:</b>
	<?php echo CHtml::encode($data->fk_estado); ?>
	<br />

	*/ ?>

</div>