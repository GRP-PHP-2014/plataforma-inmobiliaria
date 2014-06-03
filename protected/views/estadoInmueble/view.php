<?php
/* @var $this EstadoInmuebleController */
/* @var $model EstadoInmueble */
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <h1>Informaci&oacute;n de estado de inmueble</h1>

        <form role="form">
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input disabled="true" type="text" class="form-control" id="inputNombre" value="<?php echo $model->nombre; ?>">
            </div>
            <div class="form-group">
                <label for="inputDescripcion">Descripci&oacute;n</label>
                <textarea disabled="true" type="text" class="form-control" id="inputDescripcion" ><?php echo $model->descripcion; ?></textarea>
            </div>
            <a href="<?php echo Yii::app()->createUrl("estadoInmueble/admin")?>">Volver</a>
        </form>
    </div>
    <div class="col-lg-6"></div>
</div>
