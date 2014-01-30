<?php
$this->breadcrumbs=array(
	'Historial Academicos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' HistorialAcademico', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' HistorialAcademico', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> HistorialAcademico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>