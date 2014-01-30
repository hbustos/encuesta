<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Beneficiario')); ?>:</b>
	<?php echo CHtml::encode($data->idBeneficiario->Nombre1); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Nombre2); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Apellido1); ?>
        <?php echo CHtml::encode($data->idBeneficiario->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->idBeneficiario->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo Archivo')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoArchivo->Tipo); ?>
	<br />


</div>