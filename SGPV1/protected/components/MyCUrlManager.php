<?php
	class MyCUrlManager extends CUrlManager
	{
		public function createUrl($route,$params=array(),$ampersand='&')
		{
			$params['language']=Yii::app()->language;
			return parent::createUrl($route, $params, $ampersand);
		}
	}
?>
