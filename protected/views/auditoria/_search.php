<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget("CActiveForm", array(
        "action" => Yii::app()->createUrl($this->route),
        "method" => "get",
    ));
    ?>
    <div class="row">
        <div class="form-group col-lg-3">
            <?php echo $form->label($model, "usuario"); ?>
            <?php echo $form->textField($model, "usuario", array("class" => "form-control input-sm")); ?>
        </div>

        <div class="form-group col-lg-3">
            <?php echo $form->label($model, "objeto"); ?>
            <?php
            echo CHtml::dropDownList("Auditoria[objeto]", $model->objeto, array("" => "Todos", Constantes::AUDITORIA_OBJETO_EVENTO => "Eventos", Constantes::AUDITORIA_OBJETO_INMUEBLE => "Inmuebles", Constantes::AUDITORIA_OBJETO_PARAMETRO => "Parametros", Constantes::AUDITORIA_OBJETO_USUARIO => "Usuario"), array("class" => "form-control input-sm"));
            ?>       
        </div>

        <div class="form-group col-lg-3">
            <?php echo $form->label($model, "operacion"); ?>
            <?php
            echo CHtml::dropDownList("Auditoria[operacion]", $model->operacion, array("" => "Todas", Constantes::AUDITORIA_OPERACION_ALTA => "Altas", Constantes::AUDITORIA_OPERACION_BAJA => "Bajas", Constantes::AUDITORIA_OPERACION_LOGIN => "Login", Constantes::AUDITORIA_OPERACION_LOGOUT => "Logout", Constantes::AUDITORIA_OPERACION_MODIFICACION => "Modificaciones"), array("class" => "form-control input-sm"));
            ?>    
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-3">
            <?php echo $form->label($model, "fechaDesde"); ?>
            <div class="input-group date">
                <?php echo $form->textField($model, "fechaDesde", array("class" => "form-control input-sm")); ?>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="form-group col-lg-3">
            <?php echo $form->label($model, "fechaHasta"); ?>
            <div class="input-group date">
                <?php echo $form->textField($model, "fechaHasta", array("class" => "form-control input-sm")); ?>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-12">
        <?php echo CHtml::submitButton(Yii::app()->params["labelBotonFiltrar"], array("class" => "btn btn-default")); ?>
    </div>

    <?php $this->endWidget(); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            //$("#Auditoria_fechaDesde").datetimepicker();
        });
    </script>

</div><!-- search-form -->