<?php
/* @var $this EstadoInmuebleController */
/* @var $model EstadoInmueble */
/* @var $form CActiveForm */
?>

<div class="wide form">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <?php echo Yii::app()->params["labelDesplegarFiltros"]; ?>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">

                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'action' => Yii::app()->createUrl($this->route),
                        'method' => 'get',
                    ));
                    ?>

                    <div class="form-group col-lg-6">
                        <?php echo $form->label($model, 'nombre'); ?>
                        <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 100, "class" => "form-control input-sm")); ?>
                    </div>

                    <div class="form-group col-lg-6">
                        <?php echo $form->label($model, 'descripcion'); ?>
                        <?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 1024, "class" => "form-control input-sm")); ?>
                    </div>

                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-default btn-sm">
                            <?php echo Yii::app()->params["labelBotonFiltrar"] ?>
                        </button>             
                    </div>

                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- search-form -->