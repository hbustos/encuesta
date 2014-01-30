<?php
$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pagos', 'url'=>array('index')),
	
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Pagos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>