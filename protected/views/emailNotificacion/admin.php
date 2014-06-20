<?php
/* @var $this TipoNotificacionController */
/* @var $model TipoNotificacion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#notificacion-grid').yiiGridView('update', {
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
        </div>
        <div class="col-lg-12">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'notificacion-grid',
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
                    'cliente',
                    'tipoNotificacion',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{ver}',
                        'buttons' => array
                            (
                            'ver' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaVer"],
                                'options' => array('title' => 'ver'),
                                'url' => 'Yii::app()->createUrl("emailNotificacion/view", array("id"=>$data->_id))',
                            ),
                        ),
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{resolver}',
                        'buttons' => array
                            (
                            'resolver' => array
                                (
                                'label' => Yii::app()->params["labelBotonGrillaResolver"],
                                'options' => array('title' => 'resolver'),
                                'url' => 'Yii::app()->createUrl("emailNotificacion/resolve", array("id"=>$data->_id))',
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