<?php
$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pagos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Pagos', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Pagos', 'url'=>array('view', 'id'=>$model->Id)),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Pagos <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>