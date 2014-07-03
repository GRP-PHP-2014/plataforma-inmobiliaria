<?php
/* @var $this ParametroController */
/* @var $model Parametro */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#parametro-grid').yiiGridView('update', {
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
                <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Administrar par&aacute;metros<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

                <?php echo CHtml::link( (Yii::app()->params["labelDesplegarFiltros"]) , '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'parametro-grid',
                    'dataProvider' => $model->search(),
                    'summaryText' => '',
                    'cssFile' => Yii::app()->params["gridViewStyleSheet"],
                    'columns' => array(
                        'nombre',
                        'descripcion',
                        'valor',
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{editar}',
                            'buttons' => array
                                (
                                'editar' => array
                                    (
                                    'label' => Yii::app()->params["labelBotonGrillaEditar"],
                                    'options'=>array('title'=>'editar'),
                                    'url' => 'Yii::app()->createUrl("parametro/update", array("id"=>$data->nombre))',
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