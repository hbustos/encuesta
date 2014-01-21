<?php
$this->breadcrumbs=array(
	'Respuestas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List respuestas', 'url'=>array('index')),
	array('label'=>'Create respuestas', 'url'=>array('create')),
	array('label'=>'Update respuestas', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete respuestas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage respuestas', 'url'=>array('admin')),
);
?>

<h1>View respuestas #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdUsuario',
		'uno',
		'dos',
		'tres',
		'cuatro',
		'cinco',
		'seis',
		'siete',
		'ocho',
		'nueve',
		'diez',
	),
)); ?>
