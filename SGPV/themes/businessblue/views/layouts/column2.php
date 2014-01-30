<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->

    <div id="column">
      <div class="subnav">
        <h2><?php echo Yii::t('app','Operations'); ?></h2>
        <?php
                $this->widget('zii.widgets.CMenu', array(
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
                ));
        ?>
    </div>
    <div class="clear"></div>
  </div>

<?php $this->endContent(); ?>
