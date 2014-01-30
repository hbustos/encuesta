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
		<?php echo $form->label($model,'TipoUsuario'); ?>
		<?php echo $form->textField($model,'TipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre1'); ?>
		<?php echo $form->textField($model,'Nombre1',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre2'); ?>
		<?php echo $form->textField($model,'Nombre2',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido1'); ?>
		<?php echo $form->textField($model,'Apellido1',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido2'); ?>
		<?php echo $form->textField($model,'Apellido2',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NroDocumento'); ?>
		<?php echo $form->textField($model,'NroDocumento',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoDocumento'); ?>
		<?php echo $form->textField($model,'TipoDocumento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'FechaNacimiento'); ?>
		<?php echo $form->textField($model,'FechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdRegional'); ?>
		<?php echo $form->textField($model,'IdRegional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdInstitucion'); ?>
		<?php echo $form->textField($model,'IdInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdPrograma'); ?>
		<?php echo $form->textField($model,'IdPrograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Genero'); ?>
		<?php echo $form->textField($model,'Genero',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
