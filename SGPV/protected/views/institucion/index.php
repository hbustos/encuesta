<?php
$this->breadcrumbs=array(
	'Institucions',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Institucion', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Institucion', 'url'=>array('admin')),
);
?>

<h1>Instituciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
