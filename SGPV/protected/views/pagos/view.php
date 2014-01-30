<?php
$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pagos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Pagos', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Pagos', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Pagos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Pagos #<?php echo $model->Id; ?></h1>

<div class="view">

	<b><?php echo CHtml::encode($model->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->Id), array('view', 'id'=>$model->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Concepto')); ?>:</b>
	<?php echo CHtml::encode($model->idConcepto->Concepto); ?>
	<br />
        
        <b><?php echo CHtml::encode($model->getAttributeLabel('Beneficiario')); ?>:</b>
	<?php echo CHtml::encode($model->idBeneficiario->Nombre1); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Nombre2); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Apellido1); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Apellido2); ?>
	<br />
        
	<b><?php echo CHtml::encode($model->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($model->idBeneficiario->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha de Planilla')); ?>:</b>
	<?php echo CHtml::encode($model->FechaPago); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Valor')); ?>:</b>
	<?php echo CHtml::encode($model->Valor); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Cuenta')); ?>:</b>
	<?php echo CHtml::encode($model->idCuenta->Cuenta); ?>
	<br />

</div>
