<?php ?>
<div class="row-fluid">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?>Configurar portada<?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <div class="row-fluid">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'evento-form',
                'enableAjaxValidation' => false,
            ));
            ?>
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado1'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado1', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado2'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado2', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado3'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado3', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado4'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado4', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado5'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado5', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado6'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado6', $model->getListaInmuebles(), array("class" => "form-control combo-suggest")); ?>
                </div>

            </div>
            <div class="col-lg-12">
                <?php echo CHtml::submitButton(Yii::app()->params["labelBotonGuardar"], array("class" => "btn btn-default")); ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>