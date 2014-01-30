<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoReferencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoReferencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' TipoReferencia', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' TipoReferencia', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Tipo Referencia <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
