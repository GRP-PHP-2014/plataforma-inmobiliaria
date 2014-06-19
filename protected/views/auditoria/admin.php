<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#auditoria-grid').yiiGridView('update', {
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
                <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Consulta de auditor&iacute;a<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

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
                'id' => 'auditoria-grid',
                'dataProvider' => $model->search(),
                'emptyText' => Yii::app()->params["labelTablaSinResultados"],
                'summaryText' => '',
                'pager' => array(
                    'header' => Yii::app()->params["labelPaginacionTabla"],
                    'firstPageLabel' => '&lt;&lt;',
                    'prevPageLabel' => Yii::app()->params["prevPageLabel"],
                    'nextPageLabel' => Yii::app()->params["nextPageLabel"],
                    'lastPageLabel' => '&gt;&gt;',
                ),
                'columns' => array(
                    'fecha',
                    'usuario',
                    'objeto',
                    'operacion',
                    'descripcion'
                ),
            ));
            ?>

        </div>
    </div>
    <div class="col-lg-2"></div>
</div>