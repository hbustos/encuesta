<?php
$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Banco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Banco', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Banco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
