<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoReferencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' TipoReferencia', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Tipo Referencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
