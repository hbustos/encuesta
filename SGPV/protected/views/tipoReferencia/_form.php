<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-referencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Referencia *'); ?>
		<?php echo $form->textField($model,'Referencia',array('size'=>60,'maxlength'=>100,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Referencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
