<?php
$this->breadcrumbs=array(
	'Beneficiarios',
);

$this->menu=array(
	array('label'=> Yii::t('app','Create').' Beneficiario', 'url'=>array('create')),
	array('label'=> Yii::t('app','Manage').' Beneficiario', 'url'=>array('admin')),
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
function reporte_referencias(id_beneficiario)
{    
    $.ajax({
        type: "GET",
        url: "<? echo $this->createUrl('reporte/reportereferencias'); ?>",
        data: { nro_documento: id_beneficiario},
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
<h1>Beneficiarios</h1>

<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

?>
