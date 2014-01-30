<?php
$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pago', 'url'=>array('index')),
	array('label'=>'Create Pago', 'url'=>array('create')),
	array('label'=>'View Pago', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Pago', 'url'=>array('admin')),
);
?>

<h1>Update Pago <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>