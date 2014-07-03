<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ciudad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="row top-admin-row">
            <div class="col-lg-12">
                <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Administrar ciudades<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

                <?php echo CHtml::link((Yii::app()->params["labelDesplegarFiltros"]), '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pull-right"><a href="<?php echo Yii::app()->createUrl('ciudad/create'); ?>"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'cliente-grid',
                    'summaryText' => '',
                    'cssFile' => Yii::app()->params["gridViewStyleSheet"],
                    'emptyText' => Yii::app()->params["labelTablaSinResultados"],
                    'dataProvider' => $model->search(),
                    'columns' => array(
                        'nombre',
                        'departamento',
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{ver}',
                            'buttons' => array
                                (
                                'ver' => array
                                    (
                                    'label' => Yii::app()->params["labelBotonGrillaVer"],
                                    'options' => array('title' => 'ver'),
                                    'url' => 'Yii::app()->createUrl("ciudad/view", array("id"=>$data->id))',
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
                                    'options' => array('title' => 'editar'),
                                    'url' => 'Yii::app()->createUrl("ciudad/update", array("id"=>$data->id))',
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
                                    'options' => array('title' => 'eliminar'),
                                    'url' => 'Yii::app()->createUrl("ciudad/delete", array("id"=>$data->id))',
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
