<?php
/* @var $this DepartamentoController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
