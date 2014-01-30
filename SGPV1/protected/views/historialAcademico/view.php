<?php
$this->breadcrumbs=array(
	'Historial Academicos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' HistorialAcademico', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' HistorialAcademico', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' HistorialAcademico', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>Yii::t('app','Delete').' HistorialAcademico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' HistorialAcademico', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> HistorialAcademico #<?php echo $model->Id; ?></h1>
<div class="view">
        <b><?php echo CHtml::encode($model->getAttributeLabel('Nombre Materia')); ?>:</b>
	<?php echo CHtml::encode($model->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($model->Semestre); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Semestre')); ?>:</b>
	<?php echo CHtml::encode($model->FechaSemestre); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Beneficiario')); ?>:</b>
	<?php echo CHtml::encode($model->idBeneficiario->Nombre1); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Nombre2); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Apellido1); ?>
        <?php echo CHtml::encode($model->idBeneficiario->Apellido2); ?>
	<br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('Nro Documento')); ?>:</b>
	<?php echo CHtml::encode($model->idBeneficiario->NroDocumento); ?>
	<br />
        
	<b><?php echo CHtml::encode($model->getAttributeLabel('Programa')); ?>:</b>
	<?php echo CHtml::encode($model->idPrograma->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Institución')); ?>:</b>
	<?php echo CHtml::encode($model->idInstitucion->Nombre); ?>
	<br />
	 
	<b><?php echo CHtml::encode($model->getAttributeLabel('Nota')); ?>:</b>
	<?php echo CHtml::encode($model->Nota); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Creditos')); ?>:</b>
	<?php echo CHtml::encode($model->Creditos); ?>
	<br />
	
        <b><?php echo CHtml::encode($model->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->Id), array('view', 'id'=>$model->Id)); ?>
	<br />
</div>