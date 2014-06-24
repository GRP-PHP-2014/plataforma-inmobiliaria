<?php
/* @var $this BarrioController */
/* @var $model Barrio */
?>


<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Nuevo barrio<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <div class="col-lg-6"></div>
</div>