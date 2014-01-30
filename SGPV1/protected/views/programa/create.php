<?php
$this->breadcrumbs=array(
	'Programas'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Programa', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Programa', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Programa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
