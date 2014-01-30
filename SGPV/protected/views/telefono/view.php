<?php
$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'Update Telefono', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Telefono', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>View Telefono #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdReferencia',
		'Numero',
		'Indicativo',
		'Ext',
	),
)); ?>
