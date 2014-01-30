<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuenta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Banco'); ?>
		<?php echo $form->dropDownList($model,'IdBanco',CHtml::ListData(Banco::model()->findAll(),'Id','Banco'),array('empty'=>'Banco de la cuenta')); ?>
		<?php echo $form->error($model,'IdBanco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cuenta'); ?>
		<?php echo $form->textField($model,'Cuenta',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Cuenta'); ?>
	</div>

        <div class="row">
                <?php echo $form->labelEx($model,'Tipo de Cuenta'); ?>
                <?php echo $form->dropDownList($model,'Tipo',array('empty'=>'Tipo de Cuenta','AHORROS'=>'AHORROS','CORRIENTE'=>'CORRIENTE')); ?>
                <?php echo $form->error($model,'Tipo'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
