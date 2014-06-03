<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inmueble', 'url'=>array('index')),
	array('label'=>'Create Inmueble', 'url'=>array('create')),
	array('label'=>'Update Inmueble', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inmueble', 'url'=>array('admin')),
);
?>

<h1>View Inmueble #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'descripcion',
		'tipo_inmueble',
		'vista_al_mar',
		'tiene_calefaccion',
		'gastos_comunes',
		'anio_construccion_aproximado',
		'coord_latitud',
		'coord_longitud',
		'cant_banios',
		'mts2_edificados',
		'cant_plantas_casa',
		'es_propiedad_horizontal',
		'cant_dormitorios',
		'numero_de_piso',
		'tiene_ascensor',
		'tiene_porteria',
		'tiene_portero_electrico',
		'tiene_vigilancia',
		'tipo_local',
		'tipo_local_observacion',
		'tiene_planta_alta',
		'altura_salon_principal',
		'cant_plantas_local',
		'tiene_estacionamiento',
		'tiene_deposito',
		'potencia_contratada',
		'fk_estado',
	),
)); ?>
