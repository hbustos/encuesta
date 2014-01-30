<?php
$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>('Rerefenciar'), 'url'=>array('/referencias/create')),
	array('label'=>Yii::t('app','List').' Referencia', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Referencia', 'url'=>array('create')),
	array('label'=>Yii::t('app','Create').' Tipo Referencia', 'url'=>array('/tipoReferencia/create')),
        array('label'=>Yii::t('app','List').' Teléfono', 'url'=>array('/telefono/index')),
        array('label'=>Yii::t('app','Create').' Teléfono', 'url'=>array('/telefono/create')),
        array('label'=>Yii::t('app','List').' Dirección', 'url'=>array('/direccion/index')),
        array('label'=>Yii::t('app','Create').' Dirección', 'url'=>array('/direccion/create')),
        array('label'=>Yii::t('app','List').' Correo', 'url'=>array('/correo/index')),
        array('label'=>Yii::t('app','Create').' Correo', 'url'=>array('/correo/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('referencia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app','Manage'); ?> Referencias</h1>

<p><?php echo Yii::t('app','You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) <?php echo Yii::t('app','at the beginning of each of your search values to specify how the comparison should be done'); ?>.
</p>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'referencia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Nombre',
		'NroDocumento',
		array(
			'class'=>'CButtonColumn',
			'template'=>' {update}',
		),
	),
)); ?>
