<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencias', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Referencias', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Referencias', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Referencias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Referencias', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Referencias #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdBeneficiario',
		'IdReferencia',
	),
)); ?>
