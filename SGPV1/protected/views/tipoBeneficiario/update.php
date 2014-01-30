<?php
$this->breadcrumbs=array(
	'Tipo Beneficiarios'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' TipoBeneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' TipoBeneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' TipoBeneficiario', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Manage').' TipoBeneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> TipoBeneficiario <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>