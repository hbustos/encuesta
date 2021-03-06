<?php

class BeneficiarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $estados=array('MASCULINO'=>'MASCULINO','FEMENINO'=>'FEMENINO',);
	public $generos=array('MASCULINO'=>'MASCULINO','FEMENINO'=>'FEMENINO',);
	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;


	public function actions()
	{
		return array(
			'estado'=>array(
				'class'=>'ext.acciones.EstadoAction',
				'model'=>'Beneficiario',
				'redirect'=>'index',
			)
		);
	}
        public function actionFoto()
        {
            $foto = $_REQUEST['foto'];
            $nro_documento = $_REQUEST['nro_documento'];
            
            $path = "/home/prodevid/opt/SGPV/archivos/beneficiario/". $nro_documento . "/FOTO/". $foto;

            header("content-type: image/png");
            header("content-length: " . filesize($path));
            readfile($path);
        }
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
                        array('allow',  // deny all users to perform 'index' and 'view' actions
                                'actions'=>array('index','view','create','update','admin','estado','foto'),
                                'roles'=>array('rol_edicion'),
                        ),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','estado','foto','delete'),
				'roles'=>array('rol_borrado'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','admin'),
				'roles'=>array('rol_leer'),
			),
                        array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Beneficiario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Beneficiario']))
		{
			$model->attributes=$_POST['Beneficiario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Beneficiario']))
		{
			$model->attributes=$_POST['Beneficiario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Beneficiario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Beneficiario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Beneficiario']))
			$model->attributes=$_GET['Beneficiario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Beneficiario::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='beneficiario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public static function getListEstados()
	{
		return CHtml::listData(Estado::model()->findAll(),'Id','Estado');
	}
	
	public static function getGenero($key=null)
	{
		if($key!==null)
			return self::$generos[$key];
		return self::$generos;
	}

	/*
        public function actionEdad()
        {

                $consulta =     "
				SELECT YEAR(CURDATE())-YEAR(FechaNacimiento) AS Edad
                                FROM Beneficiario
                                WHERE NroDocumento = 9861835120117138
				"

                $edad = Yii::app()->db->createCommand($consulta)->queryAll();
                $this->render('edad',array(
                        'cant'=>$edad,
                ));
        }
	*/
	
}
