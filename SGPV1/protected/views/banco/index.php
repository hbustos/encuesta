<?php
$this->breadcrumbs=array(
	'Bancos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Banco', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Banco', 'url'=>array('admin')),
);
?>

<h1>Bancos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
