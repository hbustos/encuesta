<?php
$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Archivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Archivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Archivo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' Archivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Archivo #<?php echo $model->Id; ?></h1>

<div class="view">

	<b><?php echo CHtml::encode($model->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->Id), array('view', 'id'=>$model->Id)); ?>
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

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tipo Archivo')); ?>:</b>
	<?php echo CHtml::encode($model->idTipoArchivo->Tipo); ?>
	<br />

</div>