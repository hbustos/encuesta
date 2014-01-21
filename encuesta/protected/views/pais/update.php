<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'View Pais', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>Update Pais <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>