<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Municipio')); ?>:</b>
	<?php echo CHtml::encode($data->Municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoMunicipio')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoMunicipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoDepartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdRegional')); ?>:</b>
	<?php echo CHtml::encode($data->IdRegional); ?>
	<br />


</div>