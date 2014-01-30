<?php
$this->breadcrumbs=array(
	'Cuentas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cuenta', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Cuenta', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Cuenta', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Cuenta', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Cuenta #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Cuenta',
		'IdBanco',
		'Tipo',
	),
)); ?>
