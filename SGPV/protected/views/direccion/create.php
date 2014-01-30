<?php
$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Direccion', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Direccion', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Dirección</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
