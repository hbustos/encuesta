<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->Apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CorreoElectronico')); ?>:</b>
	<?php echo CHtml::encode($data->CorreoElectronico); ?>
	<br />


</div>