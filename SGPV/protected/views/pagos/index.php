<?php
$this->breadcrumbs=array(
	'Pagoses',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Pagos', 'url'=>array('create')),
);
?>

<h1>Pagoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
