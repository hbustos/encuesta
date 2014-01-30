<?php
$this->breadcrumbs=array(
	'Cuentas'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cuenta', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Cuenta', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Cuenta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
