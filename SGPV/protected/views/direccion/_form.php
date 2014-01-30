<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?><span class="required">* </span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdReferencia'); ?>
		<?php echo $form->dropDownList($model,'IdReferencia',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione la cédula del beneficiario')); ?>
		<?php echo $form->error($model,'IdReferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>100,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio'); ?>
		<?php echo $form->textField($model,'Barrio',array('size'=>60,'maxlength'=>100,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->dropDownList($model,'Ciudad',CHtml::ListData(Municipio::model()->findAll(),'Id','Municipio'),array('empty'=>'Seleccione la ciudad o municipio')); ?>
		<?php echo $form->error($model,'Ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
