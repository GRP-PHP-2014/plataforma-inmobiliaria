<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inmueble', 'url'=>array('index')),
	array('label'=>'Create Inmueble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inmueble-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Inmuebles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titulo',
		'descripcion',
		'tipo_inmueble',
		'vista_al_mar',
		'tiene_calefaccion',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
