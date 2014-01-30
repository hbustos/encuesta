<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Beneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Beneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Beneficiario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Beneficiario', 'url'=>array('admin')),
);
?>
<script>
function reporte_pagos(cedula_beneficiario)
{    
    $.ajax({
        type: "GET",
        url: "<? echo $this->createUrl('reporte/reportepagosbene'); ?>",
        data: { nro_documento: cedula_beneficiario},
        beforeSend: function() {
        },
        success: function(ret) {   
            $("#pago").html(ret);
            $("#pago").dialog("open");
        },
        complete: function(objeto, exito) {},
        error: function(objeto, quepaso, otorobj) {},           
    })    
}
</script>
<?
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(

'id' => 'pago',
'options' => array('title' => 'Reporte de Pagos',
                    'autoOpen' => false,
                    'width'=>'1200px',
                    'height'=>'700',
                    'buttons' => array(
                            array('text'=>'Close','click'=> 'js:function(){$(this).dialog("close");}'),
                            )
                    ),
));

$this->endWidget();
?>
<h1><?php echo Yii::t('app','View');?> Beneficiario #<?php echo $model->Id; ?></h1>

<div class="view">

    <div class="view" style = "float: right; height: 120px; width: 100px; ">
        <b>Foto</b>
        <img style="max-width: 100%; max-height: 100%" src="<?php echo $this->createUrl("beneficiario/foto", Array('foto' => $model->Foto, 'nro_documento' => $model->NroDocumento)) ; ?>">    
    </div>

        <b>Beneficiario C.C.: </b><?php echo CHtml::encode($model->NroDocumento); ?>
        <br/><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Tipo Beneficiario')); ?>:</b>
        <?php echo CHtml::encode($model->tipoBeneficiario->Tipo); ?>
        <br/><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Nombres')); ?>:</b>
        <?php echo CHtml::encode($model->Nombre1); ?>
        <?php echo CHtml::encode($model->Nombre2); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Apellidos')); ?>:</b>
        <?php echo CHtml::encode($model->Apellido1); ?>
        <?php echo CHtml::encode($model->Apellido2); ?>
        <br /><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Tipo de Documento')); ?>:</b>
        <?php echo CHtml::encode($model->tipoDocumento->Tipo); ?>
        <br />

        <b>Edad:</b>
        <?php echo CHtml::encode($model->Edad); ?>
        <br/>

        <b>Fecha Nacimiento:</b>
        <?php echo CHtml::encode($model->FechaNacimiento); ?>
        <br /><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Regional')); ?>:</b>
        <?php echo CHtml::encode($model->idRegional->Nombre); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Institución')); ?>:</b>
        <?php echo CHtml::encode($model->idInstitucion->Nombre); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Programa')); ?>:</b>
        <?php echo CHtml::encode($model->idPrograma->Nombre); ?>
        <br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Semestre')); ?>:</b>
        <?php echo CHtml::encode($model->Semestre); ?>
        <br/><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Sexo')); ?>:</b>
        <?php echo CHtml::encode($model->Genero); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Ingreso Documentos')); ?>:</b>
        <?php echo CHtml::encode($model->FechaIngreso); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Fecha ultimo pago')); ?>:</b>
        <?php echo CHtml::encode($model->FechaPago); ?>
        <br /><br/>

        <b><?php echo CHtml::encode($model->getAttributeLabel('Editar Beneficiario')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($model->Id), array('update', 'id'=>$model->Id)); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Estado')); ?>:</b>
        <?php echo CHtml::encode($model->estado->Estado); ?>
        <br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('cambio_estado')); ?>:</b>
        <?php echo CHtml::link(CHtml::link($model->Estado==1?'Desactivar':'Activar', array('estado', 'id'=>$model->Id))); ?>
        <br />
        
        <b><?php echo CHtml::encode('Reporte de Pagos'); ?>:</b>
	<?php echo CHtml::link(CHtml::link('Ver Reporte', '#', array('onclick' => "reporte_pagos('" . $model->NroDocumento . "')"))); ?>
	<br />
</div>

