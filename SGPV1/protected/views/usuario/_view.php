<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('update', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipoUsuario->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre1); ?>
	<?php echo CHtml::encode($data->Nombre2); ?>
	<?php echo CHtml::encode($data->Apellido1); ?>
	<?php echo CHtml::encode($data->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nro Documento')); ?>:</b>
	<?php echo CHtml::encode($data->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo Documento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaNacimiento); ?>
	<br />
</div>
