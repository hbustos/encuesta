<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Correo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Correo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Correo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Correo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Correo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Correo #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdRef',
		'Correo',
	),
)); ?>
