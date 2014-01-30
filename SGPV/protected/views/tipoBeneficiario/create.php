<?php
$this->breadcrumbs=array(
	'Tipo Beneficiarios'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoBeneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' TipoBeneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> TipoBeneficiario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>