
<div class="view">

    <div class="view" style = "float: right; height: 120px; width: 100px;">
	<b>Foto</b>
        <img style="max-width: 100%; max-height: 100%" src="<?php echo $this->createUrl("beneficiario/foto", Array('foto' => $data->Foto, 'nro_documento' => $data->NroDocumento)) ; ?>">
    </div>

	<b>Beneficiario C.C.: </b><?php echo CHtml::encode($data->NroDocumento); ?>
	<br/><br/>

        <b><?php echo CHtml::encode($data->getAttributeLabel('Tipo Beneficiario')); ?>:</b>
        <?php echo CHtml::encode($data->tipoBeneficiario->Tipo); ?>
        <br/><br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre1); ?>
	<?php echo CHtml::encode($data->Nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido1); ?>
	<?php echo CHtml::encode($data->Apellido2); ?>
	<br /><br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Documento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento->Tipo); ?>
	<br />

	<b>Edad:</b>
	<?php echo CHtml::encode($data->Edad); ?>
	<br/>

	<b>Fecha Nacimiento:</b>
	<?php echo CHtml::encode($data->FechaNacimiento); ?>
	<br /><br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Regional')); ?>:</b>
	<?php echo CHtml::encode($data->idRegional->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institución')); ?>:</b>
	<?php echo CHtml::encode($data->idInstitucion->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Programa')); ?>:</b>
	<?php echo CHtml::encode($data->idPrograma->Nombre); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->Semestre); ?>
	<br/><br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->Genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Ingreso Documentos')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha ultimo pago')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPago); ?>
	<br /><br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Editar Beneficiario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('update', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cambio_estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::link($data->Estado==1?'Desactivar':'Activar', array('estado', 'id'=>$data->Id))); ?>
	<br/>
        
        <b><?php echo CHtml::encode('Reporte de Pagos'); ?>:</b>
	<?php echo CHtml::link(CHtml::link('Ver Reporte', '#', array('onclick' => "reporte_pagos('" . $data->NroDocumento . "')"))); ?>
	<br />
        
        <b><?php echo CHtml::encode('Referencias'); ?>:</b>
	<?php echo CHtml::link(CHtml::link('Ver Reporte', '#', array('onclick' => "reporte_referencias('" . $data->Id . "')"))); ?>
	<br />
</div>