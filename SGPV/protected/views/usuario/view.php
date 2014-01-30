<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Usuario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Usuario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Usuario', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Usuario #<?php echo $model->Id; ?></h1>

<div class="view">

	<b><?php echo CHtml::encode($model->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->Id), array('update', 'id'=>$model->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($model->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tipo Usuario')); ?>:</b>
	<?php echo CHtml::encode($model->tipoUsuario->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($model->Nombre1); ?>
	<?php echo CHtml::encode($model->Nombre2); ?>
	<?php echo CHtml::encode($model->Apellido1); ?>
	<?php echo CHtml::encode($model->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Nro Documento')); ?>:</b>
	<?php echo CHtml::encode($model->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tipo Documento')); ?>:</b>
	<?php echo CHtml::encode($model->tipoDocumento->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($model->FechaNacimiento); ?>
	<br />
</div>