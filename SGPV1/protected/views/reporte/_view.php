<div class="view">

<?php 
/* 
<div id="grafica-torta" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'chart'=> array(
            'renderTo'=>'container',
            'plotBackgroundColor'=> null,
            'plotBorderWidth'=> null,
            'plotShadow'=> false
        ),
      'title' => array('text' => 'Browser market shares at a specific website, 2010'),
        'tooltip'=>array(
                'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>: "+ this.percentage +" %"; }'
                     ),
        'plotOptions'=>array(
            'pie'=>array(
                'allowPointSelect'=> true,
                'cursor'=>'pointer',
                'dataLabels'=>array(
                    'enabled'=> true,
                    'color'=>'#000000',
                    'connectorColor'=>'#000000',
                    'formatter'=>'js:function() { return "<b>"+ this.point.name +"</b>:"+this.percentage +" %"; }'  
 
                                   )
                        )
                 ),
 
      'series' => array(
         array('type'=>'pie','name' => 'Browser share', 'data' => array(array('Firefox',45.0),array('opera',26.8),array('Safari',8.5),array('Op
era',6.2),array('Others',0.7),array(
                    'name'=>'Chrome',
                    'y'=>12.8,
                    'sliced'=>true,
                    'selected'=>true
                    ))),
 
      )
 
   )
));
*/
?>

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cambio_estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::link($data->Estado==1?'Desactivar':'Activar', array('estado', 'id'=>$data->Id))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('update', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipoUsuario->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre1); ?>
	<?php echo CHtml::encode($data->Nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido1); ?>
	<?php echo CHtml::encode($data->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero Documento')); ?>:</b>
	<?php echo CHtml::encode($data->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Documento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Regional')); ?>:</b>
	<?php echo CHtml::encode($data->idRegional->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institución')); ?>:</b>
	<?php echo CHtml::encode($data->idInstitucion->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Programa')); ?>:</b>
	<?php echo CHtml::encode($data->idPrograma->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Genero')); ?>:</b>
	<?php echo CHtml::encode($data->Genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado->Estado); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha ultimo pago')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPago); ?>
	<br />
</div>
