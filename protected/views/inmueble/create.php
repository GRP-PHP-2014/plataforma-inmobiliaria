<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <h1>Ingreso de Inmueble</h1>
        <form id="formIngresoInmueble" role="form">
            <div class="form-group">
                <label for="inputNombreInmueble" class="control-label">Nombre</label>
                <input type="text" name="Inmueble_nombre" class="form-control" id="inputNombreInmueble" >
            </div>
            <div class="form-group">
                <label for="inputDescripcionInmueble" class="control-label">Descripci&oacute;n</label>
                <textarea name="Inmueble_descripcion" type="text" class="form-control" id="inputDescripcionInmueble" ></textarea>
            </div>
            <a href="<?php echo Yii::app()->createUrl("inmueble/admin") ?>"><?php echo Yii::app()->params["labelBotonVolver"] ?></a>
            <button type="button" onclick="ingresarInmueble()" class="btn btn-default">Guardar</button>
        </form>

    </div>
    <div class="col-lg-3"></div>
</div>
