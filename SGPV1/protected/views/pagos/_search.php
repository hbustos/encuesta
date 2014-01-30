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
		<?php echo $form->label($model,'IdConcepto'); ?>
		<?php echo $form->textField($model,'IdConcepto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdBeneficiario'); ?>
		<?php echo $form->textField($model,'IdBeneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaPago'); ?>
		<?php echo $form->textField($model,'FechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdCuenta'); ?>
		<?php echo $form->textField($model,'IdCuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->