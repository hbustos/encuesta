<?php
$this->breadcrumbs=array(
	'Tipo Programas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoPrograma', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoPrograma', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' TipoPrograma', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' TipoPrograma', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> TipoPrograma <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>