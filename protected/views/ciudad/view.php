<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Informaci&oacute;n de ciudad<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

        <form role="form">
            <div class="form-group">
                <label for="inputId">Id</label>
                <input disabled="true" type="text" class="form-control" id="inputId" value="<?php echo $model->id; ?>">
            </div>
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input disabled="true" type="text" class="form-control" id="inputNombre" value="<?php echo $model->nombre; ?>">
            </div>
            <div class="form-group">
                <label for="inputDepartamento">Departamento</label>
                <input disabled="true" type="text" class="form-control" id="inputDepartamento" value="<?php echo $model->departamento; ?>">
            </div>
            <a href="<?php echo Yii::app()->createUrl("ciudad/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
        </form>
    </div>
    <div class="col-lg-6"></div>
</div>
