<?php
$this->breadcrumbs=array(
	'Cuentas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cuenta', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Cuenta', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Cuenta', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Cuenta', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Cuenta <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
