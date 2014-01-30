<?php
$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Referencia', 'url'=>array('admin')),
	array('label'=>Yii::t('app','Create').' Teléfono', 'url'=>array('/telefono/create')),
	array('label'=>Yii::t('app','Create').' Dirección', 'url'=>array('/direccion/create')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Referencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
