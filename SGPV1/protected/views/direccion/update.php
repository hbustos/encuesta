<?php
$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Dirección', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Dirección', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Dirección', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Dirección', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Dirección <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
