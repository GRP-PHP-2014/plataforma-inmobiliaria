<?php
/* @var $this EstadoInmuebleController */
/* @var $model EstadoInmueble */
?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Ver notificaci&oacute;n<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

        <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'email-notificacion-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <label for="EmailNotificacion_emailCliente">Email del cliente</label>
                <?php echo $form->textField($model, 'emailCliente', array('size' => 60, 'maxlength' => 100, "class" => "form-control", "disabled" => "true")); ?>
            </div>

            <div class="form-group">
                <label for="EmailNotificacion_nombreCliente">Nombre del cliente</label>
                <?php echo $form->textField($model, "nombreCliente", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
            </div>
            <div class="form-group">
                <label for="EmailNotificacion_fechaHoraEnvio">Fecha y hora de enviado</label>
                <?php echo $form->textField($model, "fechaHoraEnvio", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
            </div>
            <div class="form-group">
                <label for="EmailNotificacion_tipoNotificacion">Tipo de notificaci&oacute;n</label>
                <?php echo $form->textField($model, "tipoNotificacion", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
            </div>
            <div class="form-group">
                <label for="EmailNotificacion_mensaje">Mensaje</label>
                <?php echo $form->textField($model, "mensaje", array('size' => 60, 'maxlength' => 1024, "class" => "form-control", "disabled" => "true")) ?>       
            </div>
            <a href="<?php echo Yii::app()->createUrl("emailNotificacion/admin")?>">Volver</a>
            <?php echo CHtml::button("Crear usuario", array("class" => "btn btn-default" , "onclick" => "notificacionCrearNuevoCliente()")); ?>
        <?php $this->endWidget(); ?>
    </div>
    <div class="col-lg-6"></div>
</div>
