<?php
$this->breadcrumbs=array(
	'Tipo Referencias',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' TipoReferencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' TipoReferencia', 'url'=>array('admin')),
);
?>

<h1>Tipo Referencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
