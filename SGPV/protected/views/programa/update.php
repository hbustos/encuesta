<?php
$this->breadcrumbs=array(
	'Programas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Programa', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Programa', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Programa', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Programa <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
