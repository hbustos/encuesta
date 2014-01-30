<?php
$this->breadcrumbs=array(
	'Tipo Archivos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoArchivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' TipoArchivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> TipoArchivo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>