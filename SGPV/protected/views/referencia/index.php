<?php
$this->breadcrumbs=array(
	'Referencias',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Referencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Referencia', 'url'=>array('admin')),
);
?>

<h1>Referencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
