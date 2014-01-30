<?php
$this->breadcrumbs=array(
	'Correos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Correo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Correo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Correo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>