<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Regional', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Regional', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Regional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
