<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'archivo-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>


  <div class="row">
    <?php echo $form->labelEx($model,'Beneficiario *'); ?>
    <?php echo $form->dropDownList($model,'IdBeneficiario',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione un Beneficiario')); ?>
    <?php echo $form->error($model,'IdBeneficiario'); ?>
  </div>
  <div class="row">
    <?php echo $form->labelEx($model,'archivo_a_siubir'); ?>
    <?php echo $form->fileField($model,'archivo_a_subir'); ?>
    <?php echo $form->error($model,'archivo_a_subir'); ?>
  </div>  

  <div class="row">
    <?php echo $form->labelEx($model,'Tipo Archivo *'); ?>
    <?php echo $form->dropDownList($model,'IdTipoArchivo',CHtml::ListData(TipoArchivo::model()->findAll(),'Id','Tipo'),array('empty'=>'Seleccione un tipo')); ?>
    <?php echo $form->error($model,'IdTipoArchivo'); ?>
  </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
