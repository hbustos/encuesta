<?php
$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Instituciones', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Instituciones', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Instituciones', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Instituciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Instituciones', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Instituciones #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'Nit',
		'Web',
	),
)); ?>
