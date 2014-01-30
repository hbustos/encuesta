<?php

?>
<?

$this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'pago-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
                'IdPlanilla',
                'FechaPago',
                'Regional',
                'DocumentoBeneficiario',
		'Nombre1', 
		'Nombre2',
		'Apellido1',
		'Apellido2',
                'Institucion',
                'Programa',
		'Valor',
                'Semestre',      
                /*
		array(
			'name'=>'Valor',
			//'value'=>'Beneficiario::getListEstados($data->Estado)',
			//'header'=>'Genero',
			'value'=>'$data->formatPrice($data->Valor)',
			//'filter'=>'Beneficiario::getGenero',
		),
                 */
	),
    )
); ?>