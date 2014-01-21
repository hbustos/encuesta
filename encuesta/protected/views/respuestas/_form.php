<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'respuestas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'1. Nacionalidad? *'); ?>
		<?php echo $form->dropDownList($model,'IdPais',CHtml::ListData(Pais::model()->findAll(),'Id','Pais'),array('empty'=>'Seleccione un país'));?>
		<?php echo $form->checkBox($model,'uno');?>
		<?php echo $form->error($model,'uno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'2. ¿Qué grado de Escolaridad tiene usted?  '); ?>
		<?php echo $form->error($model,'dos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'3. ¿Cree usted que sea necesario implementar un Sistema de Gestión de Seguridad de la Información en las empresas que ha trabajado o trabaja? '); ?>
		<?php echo $form->checkBox($model,'tres',array('value' => '0', 'uncheckValue'=>'N')); ?>
		<?php echo $form->checkBox($model,'tres',array('value' => '1', 'uncheckValue'=>'N')); ?>
		<?php echo $form->dropDownList($model,'tres',array(""=>"Select","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'tres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'4. ¿Conoce metodologías de normalización para SGSI?'); ?>
		<?php echo $form->textField($model,'cuatro'); ?>
		<?php echo $form->error($model,'cuatro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'5. ¿En la empresa en que labora o ha laborado  existe un SGSI?'); ?>
		<?php echo $form->textField($model,'cinco'); ?>
		<?php echo $form->error($model,'cinco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'6. ¿Le han solicitado el apoyo para la implementación de un SGSI?'); ?>
		<?php echo $form->textField($model,'seis'); ?>
		<?php echo $form->error($model,'seis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'7. ¿Conoce usted si los clientes de las empresa en la que labora o ha laborado, le han solicitado políticas de Seguridad de la Información? '); ?>
		<?php echo $form->textField($model,'siete'); ?>
		<?php echo $form->error($model,'siete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'8. ¿En la empresa en que labora o ha laborado han tenido incidentes de perdida de información?'); ?>
		<?php echo $form->textField($model,'ocho'); ?>
		<?php echo $form->error($model,'ocho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'9. ¿En la empresa en que labora o ha laborado han parado la operación por la pérdida de disponibilidad de la información necesaria para la operación? '); ?>
		<?php echo $form->textField($model,'nueve'); ?>
		<?php echo $form->error($model,'nueve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'10. ¿Conoce los requisitos para la construcción de un documento de Política de Seguridad de la Información, basado en el estándar ISO 27001?'); ?>
		<?php echo $form->textField($model,'diez'); ?>
		<?php echo $form->error($model,'diez'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->