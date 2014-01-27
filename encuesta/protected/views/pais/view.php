<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Update Pais', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>View Pais #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Pais',
	),
)); ?>
