<?php
$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Instituciones', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Instituciones', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Instituciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
