<?php
$this->breadcrumbs=array(
	'Programas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Programa', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Programa', 'url'=>array('admin')),
        array('label'=>Yii::t('app','Manage').' Tipo Programa', 'url'=>array('TipoPrograma/admin')),
);
?>

<h1>Programas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
