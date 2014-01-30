<?php
$this->breadcrumbs=array(
	'Tipo Archivos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoArchivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoArchivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' TipoArchivo', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' TipoArchivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> TipoArchivo <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>