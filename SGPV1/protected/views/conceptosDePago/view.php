<?php
$this->breadcrumbs=array(
	'Conceptos De Pagos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' ConceptosDePago', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' ConceptosDePago', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' ConceptosDePago', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' ConceptosDePago', 'url'=>array('admin')),
);
?>

<h1>vista ConceptosDePago #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Concepto',
	),
)); ?>
