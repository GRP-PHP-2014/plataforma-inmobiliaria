<?php
/* @var $this EstadoInmuebleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Inmuebles',
);

$this->menu=array(
	array('label'=>'Create EstadoInmueble', 'url'=>array('create')),
	array('label'=>'Manage EstadoInmueble', 'url'=>array('admin')),
);
?>

<h1>Estado Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
