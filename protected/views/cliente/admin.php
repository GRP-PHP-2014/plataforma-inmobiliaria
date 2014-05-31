<?php
/* @var $this ClienteController */
/* @var $model Cliente */

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
                <h1>Administrar clientes</h1>

                <?php echo CHtml::link('Búsqueda avanzada', '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pull-right"><a href="<?php echo Yii::app()->createUrl('cliente/create'); ?>"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="col-lg-12">

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'cliente-grid',
                'summaryText' => '',
                'dataProvider' => $model->search(),
                'columns' => array(
                    'email',
                    'nombre',
                    'apellido',
                     array(
                        'class' => 'CButtonColumn',
                        'template' => '{ver}',
                        'buttons' => array
                            (
                            'ver' => array
                                (
                                'label' => '<span class="glyphicon glyphicon-search"></span>',
                                'options'=>array('title'=>'ver'),
                                'url' => 'Yii::app()->createUrl("cliente/view", array("id"=>$data->id))',
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
                                'label' => '<span class="glyphicon glyphicon-pencil"></span>',
                                'options'=>array('title'=>'editar'),
                                'url' => 'Yii::app()->createUrl("cliente/update", array("id"=>$data->id))',
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
                                'label' => '<span class="glyphicon glyphicon-remove"></span>',
                                'options'=>array('title'=>'eliminar'),
                                'url' => 'Yii::app()->createUrl("cliente/delete", array("id"=>$data->id))',
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
