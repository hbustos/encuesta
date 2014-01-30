<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'institucion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>200,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Web'); ?>
		<?php echo $form->textField($model,'Web',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Web'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
