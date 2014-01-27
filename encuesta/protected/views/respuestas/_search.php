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
		<?php echo $form->label($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uno'); ?>
		<?php echo $form->textField($model,'uno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dos'); ?>
		<?php echo $form->textField($model,'dos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dos_uno'); ?>
		<?php echo $form->textArea($model,'dos_uno',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tres'); ?>
		<?php echo $form->textField($model,'tres'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tres_uno'); ?>
		<?php echo $form->textArea($model,'tres_uno',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuatro'); ?>
		<?php echo $form->textField($model,'cuatro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuatro_uno'); ?>
		<?php echo $form->textArea($model,'cuatro_uno',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cinco'); ?>
		<?php echo $form->textField($model,'cinco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seis'); ?>
		<?php echo $form->textField($model,'seis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'siete'); ?>
		<?php echo $form->textField($model,'siete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocho'); ?>
		<?php echo $form->textField($model,'ocho'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nueve'); ?>
		<?php echo $form->textField($model,'nueve'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diez'); ?>
		<?php echo $form->textField($model,'diez'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdPais'); ?>
		<?php echo $form->textField($model,'IdPais'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->