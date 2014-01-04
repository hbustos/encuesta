<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombres'); ?>
		<?php echo $form->textField($model,'Nombres',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellidos'); ?>
		<?php echo $form->textField($model,'Apellidos',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CorreoElectronico'); ?>
		<?php echo $form->textField($model,'CorreoElectronico',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'CorreoElectronico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->