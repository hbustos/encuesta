<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdTipoReferencia')); ?>:</b>
	<?php echo CHtml::encode($data->IdTipoReferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->NroDocumento); ?>
	<br />


</div>
