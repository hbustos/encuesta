<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefono-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">* </span><?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdReferencia'); ?>
		<?php echo $form->dropDownList($model,'IdReferencia',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione la cédula del beneficiario')); ?>
		<?php echo $form->error($model,'IdReferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero'); ?>
		<?php echo $form->textField($model,'Numero',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Indicativo'); ?>
		<?php echo $form->textField($model,'Indicativo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Indicativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ext'); ?>
		<?php echo $form->textField($model,'Ext',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Ext'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
