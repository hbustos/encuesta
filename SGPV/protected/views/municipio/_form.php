<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Municipio'); ?>
		<?php echo $form->textField($model,'Municipio',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoMunicipio'); ?>
		<?php echo $form->textField($model,'CodigoMunicipio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CodigoMunicipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoDepartamento'); ?>
		<?php echo $form->textField($model,'CodigoDepartamento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CodigoDepartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdRegional'); ?>
		<?php echo $form->textField($model,'IdRegional'); ?>
		<?php echo $form->error($model,'IdRegional'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->