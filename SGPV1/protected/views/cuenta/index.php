<?php
$this->breadcrumbs=array(
	'Cuentas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Cuenta', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Cuenta', 'url'=>array('admin')),
);
?>

<h1>Cuentas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
