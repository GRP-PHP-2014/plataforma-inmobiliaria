<?php ?>
<div class="row">
    <div class="col-lg-12">
        <?php echo Yii::app()->params["UiHeadersWrapperOMarkup"]; ?><span class="glyphicon glyphicon-th"></span> <?php echo Yii::app()->params["labelFuncionalidadPortada"] ?><?php echo Yii::app()->params["UiHeadersWrapperCMarkup"]; ?>
        <ol class="breadcrumb">
            <li><a href="<?php echo Yii::app()->createUrl("site/index") ?>">Inicio</a></li>
            <li class="active"><?php echo Yii::app()->params["labelFuncionalidadPortada"] ?></li>
        </ol>
        
        <div class="row">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'portada-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado1'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado1', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado2'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado2', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado3'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado3', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado4'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado4', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado5'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado5', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'idDestacado6'); ?>
                    <?php echo $form->dropDownList($model, 'idDestacado6', $model->getListaInmuebles(), array("class" => "form-control combo-suggest input-sm")); ?>
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