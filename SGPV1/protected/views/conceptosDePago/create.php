<?php
$this->breadcrumbs=array(
	'Conceptos De Pagos'=>array('index'),
        Yii::t('app','Create'),
);

$this->menu=array(
        array('label'=>Yii::t('app','List').' Conceptos De Pago', 'url'=>array('index')),
        array('label'=>Yii::t('app','Manage').' Conceptos De Pago', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Conceptos De Pago</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
