<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beneficiario-form',
'enableAjaxValidation'=>false,
)); ?>
	<p class="note"> <?php echo Yii::t('app','Fields with');?><span class="required"> * </span><?php echo Yii::t('app','are required');?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoUsuario'); ?>
		<?php echo $form->dropDownList($model,'TipoUsuario',CHtml::ListData(TipoUsuario::model()->findAll(),'Id','Descripcion'),array('empty'=>'Seleccion un tipo de usuario')); ?>
		<?php echo $form->error($model,'TipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre1'); ?>
		<?php echo $form->textField($model,'Nombre1',array('size'=>60,'maxlength'=>80,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Nombre1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre2'); ?>
		<?php echo $form->textField($model,'Nombre2',array('size'=>60,'maxlength'=>80,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Nombre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido1'); ?>
		<?php echo $form->textField($model,'Apellido1',array('size'=>60,'maxlength'=>80,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Apellido1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido2'); ?>
		<?php echo $form->textField($model,'Apellido2',array('size'=>60,'maxlength'=>80,'style'=>'text-transform: uppercase')); ?>
		<?php echo $form->error($model,'Apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoDocumento'); ?>
		<?php echo $form->dropDownList($model,'TipoDocumento',CHtml::ListData(TipoDocumento::model()->findAll(),'Id','Tipo'),array('empty'=>'Seleccione un tipo de documento')); ?>
		<?php echo $form->error($model,'TipoDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nro Documento'); ?>
		<?php echo $form->textField($model,'NroDocumento',array('size'=>60,'maxlength'=>80 )); ?>
		<?php echo $form->error($model,'NroDocumento'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'FechaNacimiento'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
				'model'=>$model,
				'attribute'=>'FechaNacimiento',
				'language'=>'es',
				'options'=>array (
						'dateFormat'=>'yy-mm-dd',
						'constrainImput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'yearRange'=>'1980:1999',
					),	
				)
			);?>

		<?php echo $form->error($model,'FechaNacimiento'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'IdRegional'); ?>
		<?php echo $form->dropDownList($model,'IdRegional',CHtml::ListData(Regional::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione una regional')); ?>
		<?php echo $form->error($model,'IdRegional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdInstitucion'); ?>
		<?php echo $form->dropDownList($model,'IdInstitucion',CHtml::ListData(Institucion::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione una institución')); ?>
		<?php echo $form->error($model,'IdInstitucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdPrograma'); ?>
		<?php echo $form->dropDownList($model,'IdPrograma',CHtml::ListData(Programa::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione un programa')); ?>
		<?php echo $form->error($model,'IdPrograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Genero'); ?>
		<?php echo $form->dropDownList($model,'Genero',array('empty'=>'Seleccione un genero','FEMENINO'=>'FEMENINO','MASCULINO'=>'MASCULINO')); ?>
		<?php echo $form->error($model,'Genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->dropDownList($model,'Estado',CHtml::ListData(Estado::model()->findAll(),'Id','Estado'),array('empty'=>'Seleccione un estado')); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Ingreso'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
				'model'=>$model,
				'attribute'=>'FechaIngreso',
				'language'=>'es',
				'options'=>array (
						'dateFormat'=>'yy-mm-dd',
						'constrainImput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'yearRange'=>'2001:2013',
					),	
				)
			);?>
		<?php echo $form->error($model,'FechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Pago'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
				'model'=>$model,
				'attribute'=>'FechaPago',
				'language'=>'es',
				'options'=>array (
						'dateFormat'=>'yy-mm-dd',
						'constrainImput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'yearRange'=>'2001:2013',
					),	
				)
			);?>
		<?php echo $form->error($model,'FechaPago'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
