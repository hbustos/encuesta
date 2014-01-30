<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Referencias', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Referencias', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Referencias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>