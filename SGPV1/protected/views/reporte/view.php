<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Beneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Beneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Beneficiario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Beneficiario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Beneficiario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Beneficiario #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'tipoUsuario.Descripcion',
		'Nombre1',
		'Nombre2',
		'Apellido1',
		'Apellido2',
		'NroDocumento',
		'TipoDocumento',
		'FechaNacimiento',
		'IdRegional',
		'IdInstitucion',
		'IdPrograma',
		'Genero',
		'estado.Estado',
		'FechaIngreso',
	),
)); ?>
