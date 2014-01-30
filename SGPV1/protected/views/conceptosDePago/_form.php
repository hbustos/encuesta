<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conceptos-de-pago-form',
	'enableAjaxValidation'=>false,
)); ?>

 	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Concepto'); ?>
		<?php echo $form->textField($model,'Concepto',array('size'=>60,'maxlength'=>100,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Concepto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
