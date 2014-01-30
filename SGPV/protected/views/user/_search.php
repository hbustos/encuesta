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
		<?php echo $form->label($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'Telefono1'); ?>
		<?php echo $form->textField($model,'Telefono1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaNacimiento'); ?>
		<?php echo $form->textField($model,'FechaNacimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
