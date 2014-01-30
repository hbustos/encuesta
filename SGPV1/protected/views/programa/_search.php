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
		<?php echo $form->label($model,'Nombre Institución'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>200)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'Tipo Educación'); ?>
		<?php echo $form->textField($model,'IdTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
