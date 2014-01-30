<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Concepto')); ?>:</b>
	<?php echo CHtml::encode($data->idConcepto->Concepto); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Planilla')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor')); ?>:</b>
	<?php echo CHtml::encode($data->Valor); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Institución')); ?>:</b>
	<?php echo CHtml::encode($data->idBeneficiario->idInstitucion->Nombre); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('Cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->idCuenta->Cuenta); ?>
	<br />
           
	<b><?php echo CHtml::encode($data->getAttributeLabel('Banco')); ?>:</b>
	<?php echo CHtml::encode($data->idCuenta->idBanco->Banco); ?>
	<br />


</div>