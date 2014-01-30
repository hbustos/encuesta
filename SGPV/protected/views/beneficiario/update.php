<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Beneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Beneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Beneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Beneficiario <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
