<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Materia')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->Semestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->FechaSemestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Beneficiario')); ?>:</b>
	<?php echo CHtml::encode($data->idBeneficiario->Nombre1); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Nombre2); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Apellido1); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Apellido2); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('Nro Documento')); ?>:</b>
	<?php echo CHtml::encode($data->idBeneficiario->NroDocumento); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('Programa')); ?>:</b>
	<?php echo CHtml::encode($data->idPrograma->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institución')); ?>:</b>
	<?php echo CHtml::encode($data->idInstitucion->Nombre); ?>
	<br />
	 
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nota')); ?>:</b>
	<?php echo CHtml::encode($data->Nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Creditos')); ?>:</b>
	<?php echo CHtml::encode($data->Creditos); ?>
	<br />
	
        <b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />
</div>