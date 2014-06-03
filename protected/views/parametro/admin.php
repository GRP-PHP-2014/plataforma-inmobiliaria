<?php
/* @var $this ParametroController */
/* @var $model Parametro */

$this->breadcrumbs = array(
    'Parametros' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Parametro', 'url' => array('index')),
    array('label' => 'Create Parametro', 'url' => array('create')),
);

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
        <div class="row">
            <div class="col-lg-12">
                <h1>Administrar par&aacute;metros</h1>

                <?php echo CHtml::link( (Yii::app()->params["labelDesplegarFiltros"]) , '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>

            <div class="col-lg-12">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'parametro-grid',
                    'dataProvider' => $model->search(),
                    'summaryText' => '',
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
        <div class="col-lg-2"></div>
    </div>
</div>