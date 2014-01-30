<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programa-form',
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
		<?php echo $form->labelEx($model,'Tipo Educación'); ?>
		<?php echo $form->dropDownList($model,'IdTipo',CHtml::ListData(TipoPrograma::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione un tipo de educación')); ?>
		<?php echo $form->error($model,'IdTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
