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
		<?php echo $form->label($model,'IdBeneficiario'); ?>
		<?php echo $form->textField($model,'IdBeneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdTipoArchivo'); ?>
		<?php echo $form->textField($model,'IdTipoArchivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->