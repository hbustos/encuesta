<?php
$this->breadcrumbs=array(
	'Reporte Region',
);

$this->menu=array(
	array('label'=> Yii::t('app','Report').' por Sexo', 'url'=>array('genero')),
	array('label'=> Yii::t('app','Report').' por Regionales', 'url'=>array('region')),
	array('label'=> Yii::t('app','Report').' por Edad', 'url'=>array('edad')),
	array('label'=> Yii::t('app','Report').' General de Beneficiarios', 'url'=>array('RPago')),
    	array('label'=> Yii::t('app','Report').' Historial Academico', 'url'=>array('RHistoricoEdu')),
);
?>
<h1>Reporte de Beneficiarios por Regional</h1>

<div id="grafica-div">
<?php
$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'chart'=> array(
            'renderTo'=>'grafica-div',
            'plotBackgroundColor'=> null,
            'plotBorderWidth'=> null,
            'plotShadow'=> false
        ),
	 'title' => array('text' => 'Reporte de Beneficiarios por Regional, Total Muestra:'. $cant[0]['Cantidad']),
         'tooltip'=>array(
                'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>: "+ this.percentage.toFixed(1) +" %"; }'
                     ),
        'plotOptions'=>array(
            'pie'=>array(
                'allowPointSelect'=> true,
                'cursor'=>'pointer',
                'dataLabels'=>array(
                    'enabled'=> true,
                    'color'=>'#000000',
                    'connectorColor'=>'#000000',
                    'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>:"+this.percentage.toFixed(1) +" %"; }'  
                                   )
                        )
                 ),
      'series' => array(
         array(	'type'=>'pie',
		'name' => 'Genero Beneficiarios', 
		'data' => $rtv
		),
      )
   )
));
?>
</div>
<h2>
<br>
<?php
foreach($regional as $data)
{
	echo $data['Regional'].": ".$data['Cantidad'].", ";
}
?> </h2>
