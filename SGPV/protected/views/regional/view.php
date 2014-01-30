<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Regional', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Regional', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Regional', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Regional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Regional', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Regional #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
	),
)); ?>
