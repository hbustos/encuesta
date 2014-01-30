<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Municipio', 'url'=>array('index')),
	array('label'=>'Create Municipio', 'url'=>array('create')),
	array('label'=>'View Municipio', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<h1>Update Municipio <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>