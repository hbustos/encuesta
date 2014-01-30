<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
                <?php echo $form->labelEx($model,'Concepto de Pago'); ?>
                <?php echo $form->dropDownList($model,'IdConcepto',CHtml::ListData(ConceptosDePago::model()->findAll(),'Id','Concepto'),array('empty'=>'Seleccion un concepto')); ?>
                <?php echo $form->error($model,'IdConcepto'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Beneficiario'); ?>
                <?php echo $form->dropDownList($model,'IdBeneficiario',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccion un Beneficiario')); ?>
                <?php echo $form->error($model,'IdBeneficiario'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Fecha de Planilla'); ?>
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
                                                'yearRange'=>'2013:2050',
                                        ),
                                )
                        );?>
                <?php echo $form->error($model,'FechaPago'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor'); ?>
		<?php echo $form->error($model,'Valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cuenta'); ?>
                <?php echo $form->dropDownList($model,'IdCuenta',CHtml::ListData(Cuenta::model()->findAll(),'Id','Cuenta'),array('empty'=>'Seleccione una cuenta')); ?>
		<?php echo $form->error($model,'IdCuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->