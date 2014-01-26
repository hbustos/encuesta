<?php
$this->breadcrumbs=array(
	'Respuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List respuestas', 'url'=>array('index')),
	array('label'=>'Manage respuestas', 'url'=>array('admin')),
);
?>

<h1>Diligenciar Encuesta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>