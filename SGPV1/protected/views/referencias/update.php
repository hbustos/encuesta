<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencias', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Referencias', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Referencias', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Referencias', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Referencias <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>