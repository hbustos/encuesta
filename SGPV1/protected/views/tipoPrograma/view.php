<?php
$this->breadcrumbs=array(
	'Tipo Programas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoPrograma', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoPrograma', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' TipoPrograma', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' TipoPrograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' TipoPrograma', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> TipoPrograma #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
	),
)); ?>
