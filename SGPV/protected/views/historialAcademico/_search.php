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
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaSemestre'); ?>
		<?php echo $form->textField($model,'FechaSemestre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdBeneficiario'); ?>
		<?php echo $form->textField($model,'IdBeneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdPrograma'); ?>
		<?php echo $form->textField($model,'IdPrograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdInstitucion'); ?>
		<?php echo $form->textField($model,'IdInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota'); ?>
		<?php echo $form->textField($model,'Nota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->