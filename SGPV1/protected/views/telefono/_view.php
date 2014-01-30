<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdReferencia')); ?>:</b>
	<?php echo CHtml::encode($data->IdReferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero')); ?>:</b>
	<?php echo CHtml::encode($data->Numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Indicativo')); ?>:</b>
	<?php echo CHtml::encode($data->Indicativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ext')); ?>:</b>
	<?php echo CHtml::encode($data->Ext); ?>
	<br />


</div>