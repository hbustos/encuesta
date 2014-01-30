<?php
$this->breadcrumbs=array(
	'Tipo Beneficiarios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoBeneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoBeneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' TipoBeneficiario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' TipoBeneficiario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' TipoBeneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> TipoBeneficiario #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Tipo',
	),
)); ?>
