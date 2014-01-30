<?php
$this->breadcrumbs=array(
	'Tipo Beneficiarios',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' TipoBeneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' TipoBeneficiario', 'url'=>array('admin')),
);
?>

<h1>Tipo Beneficiarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
