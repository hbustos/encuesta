<?php
$this->breadcrumbs=array(
	'Programas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Programa', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Programa', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Programa', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Programa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Programa', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Programa #<?php echo $model->Id; ?></h1>

<?php //echo "yo". $model->idInstitucion->Nombre; ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'IdTipo',
	),
)); ?>
