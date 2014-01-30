<?php
$this->breadcrumbs=array(
	'Direcciones',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Direccion', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Direccion', 'url'=>array('admin')),
);
?>

<h1>Direcciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
