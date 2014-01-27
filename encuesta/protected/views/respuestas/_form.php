<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'respuestas-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Campos con * son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
&nbsp
	<div class="row">
		<p><b>Por favor ingresa tu número de identificación *<b/></br></p>
		<?php echo $form->textField($model,'IdUsuario',array('size'=>74,'maxlength'=>300, 'width'=> 20)); ?>
		<?php echo $form->error($model,'IdUsuario'); ?></p></pre>
	</div>	
&nbsp
	<div class="row">
		<p><b>¿Nacionalidad? *<b/></br></p>
		<?php echo $form->dropDownList($model,'IdPais',CHtml::ListData(Pais::model()->findAll(),'Id','Pais'),array('empty'=>'Selecciona un país'));?>
		<?php echo $form->error($model,'IdPais'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>1. ¿Conoce usted o tiene idea que es Sistema de Gestión de Seguridad de la Información "S.G.S.I."? *<b/></br></p>
		<?php echo $form->dropDownList($model,'uno',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'uno'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>2. ¿Cree usted que sea necesario implementar un Sistema de Gestión de Seguridad de la Información en las empresas que ha trabajado o trabaja? *<b/></br></p>
		<?php echo $form->dropDownList($model,'dos',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'dos'); ?>
		<p><b><pre>       2.1 En caso de respuesta negativa, por favor explicanos el porque?<b/></br>
		<?php echo $form->textField($model,'dos_uno',array('size'=>74,'maxlength'=>300, 'width'=> 20)); ?>
		<?php echo $form->error($model,'dos_uno'); ?></p></pre>
	</div>
&nbsp
	<div class="row">
		<p><b>3. ¿Conoce metodologías de normalización para S.G.S.I.? *<b/></br></p>
		<?php echo $form->dropDownList($model,'tres',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'tres'); ?>
		<p><b><pre>       3.1 En caso de respuesta positiva, por favor indicanos cuales?<b/></br>
		<?php echo $form->textField($model,'tres_uno',array('size'=>74,'maxlength'=>300, 'width'=> 20)); ?>
		<?php echo $form->error($model,'tres_uno'); ?></p></pre>
	</div>
&nbsp
	<div class="row">
		<p><b>4. ¿En la empresa en que labora o ha laborado  existe S.G.S.I.? *<b/></br></p>
		<?php echo $form->dropDownList($model,'cuatro',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'cuatro'); ?>
		<p><b><pre>       4.1 En caso de respuesta positiva, ¿Usted ha participado en la implementación?<b/></br>
		<?php echo $form->dropDownList($model,'cuatro_uno',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'cuatro_uno'); ?></p></pre>
	</div>
&nbsp
	<div class="row">
		<p><b>5. ¿Le han solicitado el apoyo para la implementación de un S.G.S.I.? *<b/></br></p>
		<?php echo $form->dropDownList($model,'cinco',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'cinco'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>6. ¿Conoce usted si los clientes de las empresa en la que labora o ha laborado, le han solicitado políticas de Seguridad de la Información? *<b/></br></p>
		<?php echo $form->dropDownList($model,'seis',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'seis'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>7. ¿En la empresa en que labora o ha laborado han tenido incidentes de perdida de información? *<b/></br></p>
		<?php echo $form->dropDownList($model,'siete',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'siete'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>8. ¿En la empresa en que labora o ha laborado han parado la operación por la pérdida de disponibilidad de la información necesaria para la operación? *<b/></br></p>
		<?php echo $form->dropDownList($model,'ocho',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'ocho'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>9. ¿Conoce los requisitos para la construcción de un documento de Política de Seguridad de la Información, basado en el estándar ISO 27001? *<b/></br></p>
		<?php echo $form->dropDownList($model,'nueve',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'nueve'); ?>
	</div>
&nbsp
	<div class="row">
		<p><b>10. ¿Cree usted que un software para la creación de la Política de Seguridad de la Información, le facilitaría el proceso de construcción de dicha política? *<b/></br></p>
		<?php echo $form->dropDownList($model,'diez',array(""=>"Seleciona una respuesta","1"=>"Si","0"=>"No")); ?>
		<?php echo $form->error($model,'diez'); ?>
	</div>
&nbsp
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ?'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->