<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'historial-academico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app','are required'); ?>.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
                <?php echo $form->labelEx($model,'Nombre Materia'); ?>
                <?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>150,'style'=>'text-transform: uppercase')); ?>
                <?php echo $form->error($model,'Nombre'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Semestre'); ?>
                <?php echo $form->dropDownList($model,'Semestre',array('empty'=>'Semestre','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','N/A'=>'N/A')); ?>
                <?php echo $form->error($model,'Semestre'); ?>
        </div>
        <div class="row">
                <?php echo $form->labelEx($model,'FechaSemestre'); ?>
                <?php echo $form->dropDownList($model,'FechaSemestre',array('empty'=>'Fecha Semestre','2001-1'=>'2001-1','2001-2'=>'2001-2','2002-1'=>'2002-1','2002-2'=>'2002-2','2003-1'=>'2003-1','2003-2'=>'2003-2','2004-1'=>'2004-1','2004-2'=>'2004-2','2005-1'=>'2005-1','2005-2'=>'2005-2','2006-1'=>'2006-1','2006-2'=>'2006-2','2007-1'=>'2007-1','2007-2'=>'2007-2','2008-1'=>'2008-1','2008-2'=>'2008-2','2009-1'=>'2009-1','2009-2'=>'2009-2','2010-1'=>'2010-1','2010-2'=>'2010-2','2011-1'=>'2011-1','2011-2'=>'2011-2','2012-1'=>'2012-1','2012-2'=>'2012-2','2013-1'=>'2013-1','2013-2'=>'2013-2','2014-1'=>'2014-1','2014-2'=>'2014-2','2015-1'=>'2015-1','2015-2'=>'2015-2','2016-1'=>'2016-1','2016-2'=>'2016-2','2017-1'=>'2017-1','2017-2'=>'2017-2','N/A'=>'N/A')); ?>
                <?php echo $form->error($model,'FechaSemestre'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Beneficiario'); ?>
                <?php echo $form->dropDownList($model,'IdBeneficiario',CHtml::ListData(Beneficiario::model()->findAll(),'Id','NroDocumento'),array('empty'=>'Seleccione el documento')); ?>
                <?php echo $form->error($model,'IdBeneficiario'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Programa'); ?>
                <?php echo $form->dropDownList($model,'IdPrograma',CHtml::ListData(Programa::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione un programa')); ?>
                <?php echo $form->error($model,'IdPrograma'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Institución'); ?>
                <?php echo $form->dropDownList($model,'IdInstitucion',CHtml::ListData(Institucion::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione una institución')); ?>
                <?php echo $form->error($model,'IdInstitucion'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Nota Obtenida'); ?>
                <?php echo $form->textField($model,'Nota'); ?>
                <?php echo $form->error($model,'Nota'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'Creditos Materia'); ?>
                <?php echo $form->textField($model,'Creditos'); ?>
                <?php echo $form->error($model,'Creditos'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
