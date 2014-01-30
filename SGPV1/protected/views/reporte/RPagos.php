<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
);

$this->menu=array(
	array('label'=> Yii::t('app','Report').' por Sexo', 'url'=>array('genero')),
	array('label'=> Yii::t('app','Report').' por Regionales', 'url'=>array('region')),
	array('label'=> Yii::t('app','Report').' por Edad', 'url'=>array('edad')),
	array('label'=> Yii::t('app','Report').' General de Beneficiarios', 'url'=>array('RPago')),
    	array('label'=> Yii::t('app','Report').' Historial Academico', 'url'=>array('RHistoricoEdu')),
);


Yii::app()->clientScript->registerScript('selectCustomer',
'

function showCustomerSelect()
{
    $(\'#search_customer\').toggle();

}


function hideCustomerSelect()
{
    $(\'#search_customer\').hide();
}

',CClientScript::POS_HEAD
);


Yii::app()->clientScript->registerScript('hide',
"

$('#BuscarBeneficiario').on('click','table tbody tr', function(event) {
        
        $('#Beneficiario').val($(this).children(':nth-child(3)').text() + ' ' + $(this).children(':nth-child(4)').text());
        $('#IdBene').val($(this).children(':nth-child(1)').text());

});",
CClientScript::POS_READY);

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(

'id' => 'BuscarBeneficiario',
'options' => array('title' => 'Select Customer',
                    'autoOpen' => false,
                    'width'=>'600px',
                    'height'=>'500',
                    'buttons' => array(
                            array('text'=>'Close','click'=> 'js:function(){$(this).dialog("close");}'),
                            )
                    ),
));
$this->renderPartial('//ayudas/BuscarBeneficiario', array('model' => $Beneficiario));

$this->endWidget();




?>

<div class="form">

<form name="buscar" id="frm_buscar" method="get">
    <h1>Rerporte del Historial Académico del Beneficiario</h1>            
    <b>Busqueda de Beneficiario</b><br>
		<input type='text' name="Beneficiario" id='Beneficiario'>
		<input type='hidden' name="IdBene" id='IdBene'>
</form>
    
<button onclick='$("#BuscarBeneficiario").dialog("open")'> Seleccionar </button>
<button onclick="$('#frm_buscar').submit();"> Reporte </button>
</div>

<div>
<?
if(isset($Historico))
{
   
    ?>  
    <br>
    <?
    foreach($Historico as $llave => $valor) {
	?>
	<div style="float: left; padding: 10px; display: box; height: 180px; width: 200px; border: 1px solid;">
		MATERIA: <? echo $valor[0]; ?> <BR>
		NOTA: <? echo $valor[6]; ?> <BR>
		CREDITOS: <? echo $valor[7]; ?> <BR>
                SEMESTRE: <? echo $valor[1]; ?> <BR>
                PROGRAMA: <? echo $valor[4]; ?> <BR>    
                INSTITUCION: <? echo $valor[5]; ?> <BR>
                FECHA SEMESTRE: <? echo $valor[2]; ?> <BR>
        </div>
<?
}
    
}

?>
</div>