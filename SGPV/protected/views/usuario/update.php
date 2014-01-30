<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Usuario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Usuario', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Usuario', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Usuario <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
