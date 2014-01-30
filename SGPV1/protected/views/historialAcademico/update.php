<?php
$this->breadcrumbs=array(
	'Historial Academicos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' HistorialAcademico', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' HistorialAcademico', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' HistorialAcademico', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' HistorialAcademico', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> HistorialAcademico <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>