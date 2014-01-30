<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Beneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Beneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Beneficiario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
