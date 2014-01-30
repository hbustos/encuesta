<?php
$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Archivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Archivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Archivo', 'url'=>array('view', 'id'=>$model->Id)),

);
?>

<h1><?php echo Yii::t('app','Update'); ?> Archivo <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>