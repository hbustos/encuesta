<div id='BuscarBeneficiario' >
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'beneficiario-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
		'Id',
                'NroDocumento',
                'Nombre1',
                'Nombre2',
                'Apellido1',
                'Apellido2',
        ),
)); ?>
</div>
