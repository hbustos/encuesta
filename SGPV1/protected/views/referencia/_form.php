<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'referencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombres *'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>200,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Referencia *'); ?>
		<?php echo $form->dropDownList($model,'IdTipoReferencia',CHtml::ListData(TipoReferencia::model()->findAll(),'Id','Referencia'),array('empty'=>'Seleccione el tipo de referencia')); ?>
		<?php echo $form->error($model,'IdTipoReferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero Documento *'); ?>
		<?php echo $form->textField($model,'NroDocumento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NroDocumento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
