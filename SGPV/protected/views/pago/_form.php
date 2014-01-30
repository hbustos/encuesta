<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pago-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Regional'); ?>
		<?php echo $form->textField($model,'Regional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Regional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocumentoBeneficiario'); ?>
		<?php echo $form->textField($model,'DocumentoBeneficiario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DocumentoBeneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Beneficiario'); ?>
		<?php echo $form->textField($model,'Beneficiario',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Beneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Semestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Institucion'); ?>
		<?php echo $form->textField($model,'Institucion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Programa'); ?>
		<?php echo $form->textField($model,'Programa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Banco'); ?>
		<?php echo $form->textField($model,'Banco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoCuenta'); ?>
		<?php echo $form->textField($model,'TipoCuenta',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TipoCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroCuenta'); ?>
		<?php echo $form->textField($model,'NumeroCuenta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NumeroCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula'); ?>
		<?php echo $form->textField($model,'Matricula',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaPago'); ?>
		<?php echo $form->textField($model,'FechaPago'); ?>
		<?php echo $form->error($model,'FechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ReferenciaPago'); ?>
		<?php echo $form->textField($model,'ReferenciaPago',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ReferenciaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaComprobante'); ?>
		<?php echo $form->textField($model,'FechaComprobante'); ?>
		<?php echo $form->error($model,'FechaComprobante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->