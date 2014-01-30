<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Correo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Correo', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Correo', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' Correo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Correo <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>