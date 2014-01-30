<?php
$this->breadcrumbs=array(
	'Reporte Sexo',
);

$this->menu=array(
	array('label'=> Yii::t('app','Report').' por Sexo', 'url'=>array('genero')),
	array('label'=> Yii::t('app','Report').' por Regionales', 'url'=>array('region')),
	array('label'=> Yii::t('app','Report').' por Edad', 'url'=>array('edad')),
	array('label'=> Yii::t('app','Report').' General de Beneficiarios', 'url'=>array('RPago')),
    	array('label'=> Yii::t('app','Report').' Historial Academico', 'url'=>array('RHistoricoEdu')),
);
?>
<h1>Reportes</h1>

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
      'title' => array('text' => 'Reporte de Beneficiarios por Sexo, Total Muestra:'. ($generos[0]['Cantidad'] + $generos[1]['Cantidad'])),
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
         array('type'=>'pie','name' => 'Genero Beneficiarios', 'data' => array(array($generos[0]['Genero'],(int)$generos[0]['Cantidad']),array($generos[1]['Genero'],(int)$generos[1]['Cantidad'])
                    )),
 
      )
 
   )
));
?>
</div>
<h2><?php echo $generos[0]['Genero']?> : <?php echo $generos[0]['Cantidad']?>  ||  <?php echo $generos[1]['Genero']?> :<?php echo $generos[1]['Cantidad']?> </h2>
