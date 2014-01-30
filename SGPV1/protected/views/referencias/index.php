<?php
$this->breadcrumbs=array(
	'Referenciases',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Referencias', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Referencias', 'url'=>array('admin')),
);
?>

<h1>Referenciases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
