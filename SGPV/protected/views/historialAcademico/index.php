<?php
$this->breadcrumbs=array(
	'Historial Academicos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' HistorialAcademico', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' HistorialAcademico', 'url'=>array('admin')),
);
?>

<h1>Historial Academicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
