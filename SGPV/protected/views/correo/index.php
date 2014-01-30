<?php
$this->breadcrumbs=array(
	'Correos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Correo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Correo', 'url'=>array('admin')),
);
?>

<h1>Correos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
