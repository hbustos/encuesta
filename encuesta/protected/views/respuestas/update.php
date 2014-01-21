<?php
$this->breadcrumbs=array(
	'Respuestases'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List respuestas', 'url'=>array('index')),
	array('label'=>'Create respuestas', 'url'=>array('create')),
	array('label'=>'View respuestas', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage respuestas', 'url'=>array('admin')),
);
?>

<h1>Update respuestas <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>