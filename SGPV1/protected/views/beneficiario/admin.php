<?php
$this->breadcrumbs=array(
	'Beneficiarios'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Beneficiario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Beneficiario', 'url'=>array('create')),
	array('label'=>Yii::t('app','List').' Tipo Beneficiario', 'url'=>array('/TipoBeneficiario/index')),
	array('label'=>Yii::t('app','Create').' Tipo Beneficiario', 'url'=>array('/TipoBeneficiario/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app','Manage');?> Beneficiarios</h1>

<p>
<?php echo Yii::t('app','You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) <?php echo Yii::t('app','at the beginning of each of your search values to specify how the comparison should be done'); ?>.
</p>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'beneficiario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'Id',
		'Nombre1',
		'Nombre2',
		'Apellido1',
		'Apellido2',
		'NroDocumento',
		/*
		array(
			'name'=>'heiber',
			//'value'=>'Beneficiario::getListEstados($data->Estado)',
			'header'=>'Genero',
			'value'=>'Beneficiario::getGenero($data->genero)',
			'filter'=>'Beneficiario::getGenero',
		),*/
		array(
			'class'=>'CButtonColumn',
			'template'=>' {update}{view} ',
		),
	),
)); ?>
