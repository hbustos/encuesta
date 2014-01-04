<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'respuestas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
		<?php echo $form->error($model,'IdUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uno'); ?>
		<?php echo $form->textField($model,'uno'); ?>
		<?php echo $form->error($model,'uno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dos'); ?>
		<?php echo $form->textField($model,'dos'); ?>
		<?php echo $form->error($model,'dos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tres'); ?>
		<?php echo $form->textField($model,'tres'); ?>
		<?php echo $form->error($model,'tres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuatro'); ?>
		<?php echo $form->textField($model,'cuatro'); ?>
		<?php echo $form->error($model,'cuatro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cinco'); ?>
		<?php echo $form->textField($model,'cinco'); ?>
		<?php echo $form->error($model,'cinco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seis'); ?>
		<?php echo $form->textField($model,'seis'); ?>
		<?php echo $form->error($model,'seis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'siete'); ?>
		<?php echo $form->textField($model,'siete'); ?>
		<?php echo $form->error($model,'siete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocho'); ?>
		<?php echo $form->textField($model,'ocho'); ?>
		<?php echo $form->error($model,'ocho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nueve'); ?>
		<?php echo $form->textField($model,'nueve'); ?>
		<?php echo $form->error($model,'nueve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diez'); ?>
		<?php echo $form->textField($model,'diez'); ?>
		<?php echo $form->error($model,'diez'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->