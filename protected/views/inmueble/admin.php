<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h1>Administrar inmuebles</h1>

                <?php echo CHtml::link( (Yii::app()->params["labelDesplegarFiltros"]) , '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div><!-- search-form -->
            </div>
            <div class="col-lg-12">
                <div class="pull-right"><a href="<?php echo Yii::app()->createUrl('inmueble/create'); ?>"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="col-lg-12">

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'inmueble-grid',
                'summaryText' => '',
                'dataProvider' => $model->search(),
                'emptyText' => Yii::app()->params["labelTablaSinResultados"],
                'columns' => array(
                    'titulo',
                    'descripcion',
                    'tipo_inmueble',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{ver}',
                        'buttons' => array
                            (
                            'ver' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaVer"],
                                'options'=>array('title'=>'ver'),
                                'url' => 'Yii::app()->createUrl("inmueble/view", array("id"=>$data->id))',
                            ),
                        ),
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{editar}',
                        'buttons' => array
                            (
                            'editar' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaEditar"],
                                'options'=>array('title'=>'editar'),
                                'url' => 'Yii::app()->createUrl("inmueble/update", array("id"=>$data->id))',
                            ),
                        ),
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{eliminar}',
                        'buttons' => array
                            (
                            'eliminar' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaEliminar"],
                                'options'=>array('title'=>'eliminar'),
                                'url' => 'Yii::app()->createUrl("inmueble/delete", array("id"=>$data->id))',
                            ),
                        ),
                    ),
                ),
            ));
            ?>

        </div>
    </div>
    <div class="col-lg-2"></div>
</div>