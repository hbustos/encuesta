<?php
$this->breadcrumbs=array(
	'Tipo Programas'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoPrograma', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' TipoPrograma', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> TipoPrograma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>