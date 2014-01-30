<?php
$this->breadcrumbs=array(
	'Regionals',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Regional', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Regional', 'url'=>array('admin')),
);
?>

<h1>Regionales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
