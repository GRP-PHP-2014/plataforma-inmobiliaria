<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
?>

<div class="row-fluid">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Modificar inmueble (<?php echo $model->id; ?>)<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-1"></div>
</div>