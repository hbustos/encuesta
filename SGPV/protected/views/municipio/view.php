<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Municipio', 'url'=>array('index')),
	array('label'=>'Create Municipio', 'url'=>array('create')),
	array('label'=>'Update Municipio', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<h1>View Municipio #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Municipio',
		'CodigoMunicipio',
		'CodigoDepartamento',
		'IdRegional',
	),
)); ?>
