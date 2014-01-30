<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdBeneficiario')); ?>:</b>
	<?php echo CHtml::encode($data->IdBeneficiario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdReferencia')); ?>:</b>
	<?php echo CHtml::encode($data->IdReferencia); ?>
	<br />


</div>