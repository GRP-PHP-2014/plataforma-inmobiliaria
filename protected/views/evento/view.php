<?php
/* @var $this ClienteController */
/* @var $model Cliente */
?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Info de evento<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php
        /* @var $this EstadoInmuebleController */
        /* @var $model EstadoInmueble */
        /* @var $form CActiveForm */
        ?>

        <div class="form">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'evento-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'titulo'); ?>
                <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100, "class" => "form-control", "disabled" => "true")); ?>
                <?php echo $form->error($model, 'titulo'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'fechaHoraDesde'); ?>
                <?php echo $form->textField($model, "fechaHoraDesde", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
                <?php echo $form->error($model, 'fechaHoraDesde'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'fechaHoraHasta'); ?>
                <?php echo $form->textField($model, "fechaHoraHasta", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
                <?php echo $form->error($model, 'fechaHoraHasta'); ?>
            </div>
            
            <div class="form-group">
                <label class="" >Cliente</label>
                <p><?php echo CHtml::link($model->emailCliente, Yii::app()->createUrl("cliente/view",array("id"=>$model->idCliente))) ?></p>
            </div>

            <div class="form-group">
                <label class="" >Inmueble</label>
                <p><?php echo CHtml::link($model->tituloInmueble, Yii::app()->createUrl("cliente/view",array("id"=>$model->idInmueble))) ?></p>
            </div>
            
            <div class="form-group">
                <?php echo $form->labelEx($model, 'descripcion'); ?>
                <?php echo CHtml::activeTextArea($model, "descripcion", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
                <?php echo $form->error($model, 'descripcion'); ?>
            </div>

            <a href="<?php echo Yii::app()->createUrl("evento/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>

            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
    <div class="col-lg-6"></div>
</div>