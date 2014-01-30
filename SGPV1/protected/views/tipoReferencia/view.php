<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoReferencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoReferencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' TipoReferencia', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' TipoReferencia', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Tipo Referencia #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Referencia',
	),
)); ?>
