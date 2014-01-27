<?php
$this->breadcrumbs=array(
	'Respuestas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List respuestas', 'url'=>array('index')),
	array('label'=>'Create respuestas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#respuestas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Respuestas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'respuestas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'IdUsuario',
		'uno',
		'dos',
		'dos_uno',
		'tres',
		/*
		'tres_uno',
		'cuatro',
		'cuatro_uno',
		'cinco',
		'seis',
		'siete',
		'ocho',
		'nueve',
		'diez',
		'IdPais',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
