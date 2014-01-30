<?php
$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Banco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Banco', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Banco', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Banco', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Banco #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Banco',
	),
)); ?>
