<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario'); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoUsuario'); ?>
		<?php echo $form->dropDownList($model,'TipoUsuario',CHtml::ListData(TipoUsuario::model()->findAll(),'Id','Descripcion'),array('empty'=>'Seleccion un tipo de usuario')); ?>
		<?php echo $form->error($model,'TipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre1'); ?>
		<?php echo $form->textField($model,'Nombre1',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Nombre1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre2'); ?>
		<?php echo $form->textField($model,'Nombre2',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Nombre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido1'); ?>
		<?php echo $form->textField($model,'Apellido1',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Apellido1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido2'); ?>
		<?php echo $form->textField($model,'Apellido2',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroDocumento'); ?>
		<?php echo $form->textField($model,'NroDocumento',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'NroDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoDocumento'); ?>
		<?php echo $form->textField($model,'TipoDocumento'); ?>
		<?php echo $form->error($model,'TipoDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaNacimiento'); ?>
		<?php echo $form->textField($model,'FechaNacimiento'); ?>
		<?php echo $form->error($model,'FechaNacimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
