<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/javascript/lib/open-street-map.js"></script>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Ingresar inmueble<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-1"></div>
</div>