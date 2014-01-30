<?php
$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Referencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Referencia', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Referencia', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Referencia #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'IdTipoReferencia',
		'NroDocumento',
	),
)); ?>
