<?php
$this->breadcrumbs=array(
	'Conceptos De Pagos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' ConceptosDePago', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' ConceptosDePago', 'url'=>array('admin')),
);
?>

<h1>Conceptos De Pago</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
