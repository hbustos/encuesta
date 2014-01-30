<?php

class UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

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
                                'actions'=>array('index','view','create','update','admin'),
                                'roles'=>array('rol_sistemas'),
                        ),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','delete'),
				'roles'=>array('rol_borrado'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','admin'),
				'roles'=>array('rol_edicion'),
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
		$model=new Usuario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Usuario']))
		{
                    $model->attributes=$_POST['Usuario'];
                   
                    
                    if($model->TipoUsuario == 1)
                        {
                            Yii::app()->user->setFlash('error','Ya esta creado un usuario tipo Administrador !!!.');
                            return false;
                        }                        
                        $model->Clave=$model->hashPassword($_POST['Usuario']['Clave'],$session = $model->generateSalt());
                        $model->Sesion = $session;
                        if($model->save()){
                            //--Condiciones para la asignacion de permisos por tipo de usuario--
                            if($model->TipoUsuario == 2)
                            {                            
                                //--INSERTA los permisos sistemas--
                                Yii::app()->db->createCommand()->insert(
                                    'auth_asignacion',
                                    array('itemname'=>'rol_sistemas','userid'=>$model->Id,'data'=>'N;')                             
                                ); 
                                $this->redirect(array('view','id'=>$model->Id));                            
                            }                        
                            else if($model->TipoUsuario == 3){
                                    //--INSERTA los permisos coordinador nacional--
                                    Yii::app()->db->createCommand()->insert(
                                    'auth_asignacion',
                                    array('itemname'=>'rol_borrado','userid'=>$model->Id,'data'=>'N;')                             
                                ); 
                                 $this->redirect(array('view','id'=>$model->Id));
                            }
                            else if($model->TipoUsuario == 4){
                                //--INSERTA los permisos auxiliar--
                                Yii::app()->db->createCommand()->insert(
                                    'auth_asignacion',
                                    array('itemname'=>'rol_edicion','userid'=>$model->Id,'data'=>'N;')                             
                                );                                  
                                $this->redirect(array('view','id'=>$model->Id));
                            }
                            else if($model->TipoUsuario == 5){
                                //--INSERTA los permisos icbf--
                                Yii::app()->db->createCommand()->insert(
                                    'auth_asignacion',
                                    array('itemname'=>'rol_leer','userid'=>$model->Id,'data'=>'N;')                             
                                );                                  
                                $this->redirect(array('view','id'=>$model->Id));
                            }   
                        }
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

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
                        $model->Clave=$model->hashPassword($_POST['Usuario']['Clave'],$session = $model->generateSalt());
                        $model->Sesion = $session;
                        if($model->TipoUsuario == 1)
                        {
                            Yii::app()->user->setFlash('error','El usuario administrador no puede ser editado !!!.');
                            return false;
                        }
                        
			if($model->save())
			{	
				Yii::app()->user->setFlash('success','Usuario creado!!!.');
				$this->redirect(array('view','id'=>$model->Id));
			}
				Yii::app()->user->setFlash('error','Usuario no creado!!!.');
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
            /*
            //-- Creacion de la estructura de permisos --
            $auth = Yii::app()->authManager;
            $auth->createOperation('editar_usuarios','Edición de usuarios.');
            $tash=$auth->createTask('tarea_edicion','Edición de usuarios.');
            $tash->addChild('editar_usuarios');
            $rol= $auth->createRole('rol_edicion','Rol de edición.');
            $rol->addChild('tarea_edicion');
            
            //-- Asignacion de permisos--
            $auth->assign('rol_edicion',Yii::app()->user->id);
            
            */
           
		$dataProvider=new CActiveDataProvider('Usuario');
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

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
				$this->_model=Usuario::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
