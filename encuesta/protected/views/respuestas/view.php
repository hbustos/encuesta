<?php
$this->breadcrumbs=array(
	'Respuestases'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Respuestas', 'url'=>array('index')),
	array('label'=>'Create Respuestas', 'url'=>array('create')),
	array('label'=>'Update Respuestas', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Respuestas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Respuestas', 'url'=>array('admin')),
);
?>

<h1>View Respuestas #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdUsuario',
		'uno',
		'dos',
		'dos_uno',
		'tres',
		'tres_uno',
		'cuatro',
		'cuatro_uno',
		'cinco',
		'seis',
		'siete',
		'ocho',
		'nueve',
		'diez',
		'IdPais',
	),
)); ?>
