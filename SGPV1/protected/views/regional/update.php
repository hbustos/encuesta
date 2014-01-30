<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Regional', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Regional', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Regional', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Regional <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
