<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>Vistas General del Usuario #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombres',
		'Apellidos',
		'CorreoElectronico',
	), 
)); ?>
&nbsp
<div class="row">
		<p><b>Muchas gracias por tu registro! </b></p>  
		<p> Para iniciar la encuesta haz click <a href="http://localhost/encuesta/index.php?r=respuestas/create">aqui.</a></p>
	</div>