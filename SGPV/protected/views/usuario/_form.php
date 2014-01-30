<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave'); ?>
		<?php echo $form->passwordField($model,'Clave',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Clave'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'NroDocumento'); ?>
		<?php echo $form->textField($model,'NroDocumento',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'NroDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'TipoDocumento'); ?>
		<?php echo $form->dropDownList($model,'TipoDocumento',CHtml::ListData(TipoDocumento::model()->findAll(),'Id','Tipo'),array('empty'=>'Seleccion un tipo de documentdocumento')); ?>
		<?php echo $form->error($model,'TipoDocumento'); ?>
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
                                                'yearRange'=>'1970:1999',
                                        ),
                                )
                        );?>
		<?php echo $form->error($model,'FechaNacimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
