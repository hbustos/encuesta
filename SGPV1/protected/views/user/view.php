<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Esta seguro que desea borrar este Usuario?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Vista detallada usuario: #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Usuario',
		'TipoUsuario',
		'Nombre1',
		'Nombre2',
		'Apellido1',
		'Apellido2',
		'NroDocumento',
		'TipoDocumento',
		'Telefono1',
		'Celular',
		'Correo',
		'Direccion',
		'FechaNacimiento',
	),
)); ?>
