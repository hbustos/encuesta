<?php
$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Referencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Referencia', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Referencia', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Referencia <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
