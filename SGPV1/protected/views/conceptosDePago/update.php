<?php
$this->breadcrumbs=array(
	'Conceptos De Pagos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConceptosDePago', 'url'=>array('index')),
	array('label'=>'Create ConceptosDePago', 'url'=>array('create')),
	array('label'=>'View ConceptosDePago', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage ConceptosDePago', 'url'=>array('admin')),
);
?>

<h1>Update ConceptosDePago <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>