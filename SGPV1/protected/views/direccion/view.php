<?php
$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Dirección', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Dirección', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Dirección', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Dirección', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Dirección #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdReferencia',
		'Direccion',
		'Barrio',
		'Ciudad',
	),
)); ?>
