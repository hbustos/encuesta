<?php
$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Instituciones', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Instituciones', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Instituciones', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Instituciones <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
