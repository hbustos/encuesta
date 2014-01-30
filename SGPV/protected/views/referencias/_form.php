<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'referencias-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="row">
                <?php echo $form->labelEx($model,'Beneficiario'); ?>
                <?php echo $form->dropDownList($model,'IdBeneficiario',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione el documento')); ?>
                <?php echo $form->error($model,'IdBeneficiario'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Referencia'); ?>
                <?php echo $form->dropDownList($model,'IdReferencia',CHtml::ListData(Referencia::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione el documento')); ?>
                <?php echo $form->error($model,'IdReferencia'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
