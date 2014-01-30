<?php
$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Archivo', 'url'=>array('index')),

);
?>

<h1><?php echo Yii::t('app','Create'); ?> Archivo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>