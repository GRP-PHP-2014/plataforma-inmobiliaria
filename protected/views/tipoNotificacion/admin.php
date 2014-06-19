<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-notificacion-grid').yiiGridView('update', {
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
                <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Administrar tipos de notificaci&oacute;n<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

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
                <div class="pull-right"><a href="<?php echo Yii::app()->createUrl('tipoNotificacion/create'); ?>"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="col-lg-12">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'tipo-notificacion-grid',
                'dataProvider' => $model->search(),
                'summaryText' => '',
                'emptyText' => Yii::app()->params["labelTablaSinResultados"],
                'pager' => array(
                    'header' => Yii::app()->params["labelPaginacionTabla"],
                    'firstPageLabel' => '&lt;&lt;',
                    'prevPageLabel' => Yii::app()->params["prevPageLabel"],
                    'nextPageLabel' => Yii::app()->params["nextPageLabel"],
                    'lastPageLabel' => '&gt;&gt;',
                ),
                'columns' => array(
                    'nombre',
                    'descripcion',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{ver}',
                        'buttons' => array
                            (
                            'ver' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaVer"],
                                'options' => array('title' => 'ver'),
                                'url' => 'Yii::app()->createUrl("tipoNotificacion/view", array("id"=>$data->id))',
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
                                'url' => 'Yii::app()->createUrl("tipoNotificacion/update", array("id"=>$data->id))',
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
                                'url' => 'Yii::app()->createUrl("tipoNotificacion/delete", array("id"=>$data->id))',
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