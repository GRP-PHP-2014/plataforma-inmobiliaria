<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'fecha'); ?>
        <div class='input-group date'>
            <?php echo $form->textField($model, "fecha", array("class" => "form-control")); ?>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'usuario'); ?>
        <?php echo $form->textField($model, 'usuario', array("class" => "form-control")); ?>
    </div>
    
    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'objeto'); ?>
        <?php echo CHtml::dropDownList('Auditoria[objeto]', $model->objeto, 
            array("" => "Todos" , Constantes::AUDITORIA_OBJETO_EVENTO => 'Eventos', Constantes::AUDITORIA_OBJETO_INMUEBLE => 'Inmuebles', Constantes::AUDITORIA_OBJETO_PARAMETRO => 'Parametros', Constantes::AUDITORIA_OBJETO_USUARIO => 'Usuario'),
            array("class" => "form-control")); ?>       
    </div>

    <div class="form-group col-lg-6">
        <?php echo $form->label($model, 'operacion'); ?>
        <?php echo CHtml::dropDownList('Auditoria[operacion]', $model->operacion, 
            array("" => "Todas" , Constantes::AUDITORIA_OPERACION_ALTA => 'Altas', Constantes::AUDITORIA_OPERACION_BAJA => 'Bajas', Constantes::AUDITORIA_OPERACION_LOGIN => 'Login', Constantes::AUDITORIA_OPERACION_LOGOUT => 'Logout', Constantes::AUDITORIA_OPERACION_MODIFICACION => "Modificaciones"),
            array("class" => "form-control")); ?>    
    </div>

    <div class="form-group col-lg-12">
        <?php echo CHtml::submitButton(Yii::app()->params["labelBotonFiltrar"], array("class" => "btn btn-default")); ?>
    </div>

    <?php $this->endWidget(); ?>
    
    <script type="text/javascript">
        $('#Auditoria_fecha').datetimepicker();        
    </script>

</div><!-- search-form -->