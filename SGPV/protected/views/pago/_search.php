<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Regional'); ?>
		<?php echo $form->textField($model,'Regional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocumentoBeneficiario'); ?>
		<?php echo $form->textField($model,'DocumentoBeneficiario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Beneficiario'); ?>
		<?php echo $form->textField($model,'Beneficiario',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Institucion'); ?>
		<?php echo $form->textField($model,'Institucion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Programa'); ?>
		<?php echo $form->textField($model,'Programa',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Banco'); ?>
		<?php echo $form->textField($model,'Banco',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoCuenta'); ?>
		<?php echo $form->textField($model,'TipoCuenta',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NumeroCuenta'); ?>
		<?php echo $form->textField($model,'NumeroCuenta',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Matricula'); ?>
		<?php echo $form->textField($model,'Matricula',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaPago'); ?>
		<?php echo $form->textField($model,'FechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReferenciaPago'); ?>
		<?php echo $form->textField($model,'ReferenciaPago',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaComprobante'); ?>
		<?php echo $form->textField($model,'FechaComprobante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->