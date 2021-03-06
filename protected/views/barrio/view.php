<?php
/* @var $this BarrioController */
/* @var $model Barrio */
?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Informaci&oacute;n de ciudad<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

        <form role="form">
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input disabled="true" type="text" class="form-control input-sm" id="inputNombre" value="<?php echo $model->nombre; ?>">
            </div>
            <div class="form-group">
                <label for="inputCiudad">Ciudad</label>
                <input disabled="true" type="text" class="form-control input-sm" id="inputCiudad" value="<?php echo $model->ciudad; ?>">
            </div>
            <a href="<?php echo Yii::app()->createUrl("barrio/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
        </form>
    </div>
    <div class="col-lg-6"></div>
</div>

