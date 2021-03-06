<?php
$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Pago', 'url'=>array('index')),
	array('label'=>'Create Pago', 'url'=>array('create')),
	array('label'=>'Update Pago', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pago', 'url'=>array('admin')),
);
?>

<h1>View Pago #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Regional',
		'DocumentoBeneficiario',
		'Beneficiario',
		'Semestre',
		'Institucion',
		'Nit',
		'Programa',
		'Banco',
		'TipoCuenta',
		'NumeroCuenta',
		'Valor',
		'Matricula',
		'FechaPago',
		'ReferenciaPago',
		'FechaComprobante',
	),
)); ?>
