<?php
$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Telefono', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Telefono', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Teléfono</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
