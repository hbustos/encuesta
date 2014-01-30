<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipoUsuario->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre1')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre2')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido1')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido2')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->NroDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->TipoDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono1')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->Celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaNacimiento); ?>
	<br />

	*/ ?>

</div>
