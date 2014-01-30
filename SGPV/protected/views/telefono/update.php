<?php
$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'View Telefono', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>Update Telefono <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>