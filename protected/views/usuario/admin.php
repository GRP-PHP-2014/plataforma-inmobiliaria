<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
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
                <h1>Administrar empleados</h1>

                <?php echo CHtml::link('Busqueda avanzada', '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pull-right"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=usuario/create"><span title="nuevo" class="glyphicon glyphicon-plus"></span></a></div>
            </div>
        </div>
        <div class="col-lg-12">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'usuario-grid',
                'dataProvider' => $model->search(),
                'summaryText' => '',
                'columns' => array(
                    'usuario',
                    'nombre',
                    'apellido',
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{eliminar}',
                        'buttons' => array
                            (
                            'eliminar' => array
                                (
                                'label' => '<span class="glyphicon glyphicon-remove"></span>',
                                'options'=>array('title'=>'eliminar'),
                                'url' => 'Yii::app()->createUrl("usuario/delete", array("id"=>$data->usuario))',
                            ),
                        ),
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{ver}',
                        'buttons' => array
                            (
                            'ver' => array
                                (
                                'label' => '<span class="glyphicon glyphicon-search"></span>',
                                'options'=>array('title'=>'ver'),
                                'url' => 'Yii::app()->createUrl("usuario/view", array("id"=>$data->usuario))',
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
                                'url' => 'Yii::app()->createUrl("usuario/update", array("id"=>$data->usuario))',
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
