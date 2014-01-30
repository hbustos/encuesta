<?php
$this->breadcrumbs=array(
	'Tipo Programas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' TipoPrograma', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' TipoPrograma', 'url'=>array('admin')),
);
?>

<h1>Tipo Programas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
