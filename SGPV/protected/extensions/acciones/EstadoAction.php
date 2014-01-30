<?php
class EstadoAction extends CAction
{
	public $model=null;
	public $redirect='index';

	function run()
	{
		if(empty($_GET['id']))
			throw new CHtmlException(404);
		
		$model=CActiveRecord::model($this->model)->findByPk($_GET['id']);
		if($model===null)
			throw new CHtmlException(404);
		$model->Estado=$model->Estado==1?2:1;
		
		if($model->update())
			$this->controller->redirect(array($this->redirect));

		throw new CHtmlException(500);
			
	}

}
?>
