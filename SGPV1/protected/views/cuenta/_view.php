<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre del Banco')); ?>:</b>
	<?php echo CHtml::encode($data->idBanco->Banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Número de Cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->Cuenta); ?>
	<br />

</div>
