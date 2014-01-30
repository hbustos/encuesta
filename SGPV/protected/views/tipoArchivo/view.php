<?php
$this->breadcrumbs=array(
	'Tipo Archivos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoArchivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoArchivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' TipoArchivo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' TipoArchivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' TipoArchivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> TipoArchivo #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Tipo',
		'Descripcion',
	),
)); ?>
