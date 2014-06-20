<?php
/* @var $this EstadoInmuebleController */
/* @var $model EstadoInmueble */
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Ver notificaci&oacute;n<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

        <form role="form">
            <div class="form-group">
                <label for="inputCliente">Cliente</label>
                <input disabled="true" type="text" class="form-control" id="inputCliente" value="<?php echo $model->cliente; ?>">
            </div>
            <div class="form-group">
                <label for="inputFechaHora">Fecha y hora</label>
                <input disabled="true" type="text" class="form-control" id="inputFechaHora" value="<?php echo $model->fechaHoraEnvio; ?>">
            </div>
            <div class="form-group">
                <label for="inputTipoNotificacion">Tipo de notificaci&oacute;n</label>
                <input disabled="true" type="text" class="form-control" id="inputTipoNotificacion" value="<?php echo $model->tipoNotificacion; ?>">
            </div>
            <div class="form-group">
                <label for="inputDescripcion">Email</label>
                <textarea disabled="true" type="text" class="form-control" id="inputDescripcion" ><?php echo $model->email; ?></textarea>
            </div>
            <a href="<?php echo Yii::app()->createUrl("emailNotificacion/admin")?>">Volver</a>
        </form>
    </div>
    <div class="col-lg-6"></div>
</div>
