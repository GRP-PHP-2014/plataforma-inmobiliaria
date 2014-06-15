<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Informaci&oacute;n de usuario<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>

        <form role="form">
            <div class="form-group">
                <label for="inputUsuario">Usuario</label>
                <input disabled="true" type="text" class="form-control" id="inputUsuario" value="<?php echo $model->usuario; ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input disabled="true" type="text" class="form-control" id="inputEmail" value="<?php echo $model->email; ?>">
            </div>
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input disabled="true" type="text" class="form-control" id="inputNombre" value="<?php echo $model->nombre; ?>">
            </div>
            <div class="form-group">
                <label for="inputApellido">Apellido</label>
                <input disabled="true" type="text" class="form-control" id="inputApellido" value="<?php echo $model->apellido; ?>">
            </div>
            <div class="form-group">
                <label for="inputRol">Rol</label>
                <input disabled="true" type="text" class="form-control" id="inputApellido" value="<?php echo $model->rol; ?>">
            </div>
            <div class="checkbox">
                <label>
                    Habilitado <input type="checkbox">
                </label>
            </div>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=usuario/admin">Volver</a>
        </form>
    </div>
    <div class="col-lg-6"></div>
</div>