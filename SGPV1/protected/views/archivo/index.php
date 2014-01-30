<?php
$this->breadcrumbs=array(
	'Archivos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Archivo', 'url'=>array('create')),

);
?>

<h1>Archivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
