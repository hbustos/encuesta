<?php
$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Banco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Banco', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Banco', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Banco', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Banco <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
