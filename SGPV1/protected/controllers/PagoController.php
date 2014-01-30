<?php

class PagoController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('planillatemp','planillaPago'),
				'roles'=>array('rol_borrado'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('planillatemp','planillaPago'),
				'roles'=>array('rol_edicion'),
			),
                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('planillatemp'),
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
		$model=new Pago;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pago']))
		{
			$model->attributes=$_POST['Pago'];
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

		if(isset($_POST['Pago']))
		{
			$model->attributes=$_POST['Pago'];
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

		$model=Pago::model()->findAll();

		$data = Array(1 => Array('Id', 'Regional', 'DocumentoBeneficiario', 'Beneficiario', 'Semestre', 'Institucion', 'Nit', 'Programa', 'Banco', 'TipoCuenta', 'NumeroCuenta', 'Valor', 'FechaPago'));
		foreach($model as $pagos)
		{
			$tmp = Array($pagos->Id, $pagos->Regional, $pagos->DocumentoBeneficiario, $pagos->Beneficiario, $pagos->Semestre, $pagos->Institucion, $pagos->Nit, $pagos->Programa, $pagos->Banco, $pagos->TipoCuenta, $pagos->NumeroCuenta, $pagos->Valor, $pagos->FechaPago);
			
			$data[] = $tmp;
			//print_r($tmp);
		}	
		
			Yii::import('application.extensions.phpexcel.JPhpExcel');
			// Set properties
			$objPHPExcel = new JPhpExcel();
			//$xls = new JPhpExcel('LATIN', false, 'Planilla de Pago - Proyecto de Vida');
			$objPHPExcel->addArray($data);
			$objPHPExcel->generateXML('PlanillaDePago');
	}
        
        public function actionPlanillatemp()
        {
            $model_pagos =  Pagos::model()->findAll();
            
            if(count($model_pagos) == 0)
            {
                Yii::app()->user->setFlash('error','No existen pagos ingresados !!!.');
                $this->redirect(array('pagos/index'));
                
            //echo '<pre>'; print_r($model_pagos); echo '</pre>';
            //die();
            }else{
            $planilla = Consecutivo::model()->find("Tipo = 'PLANILLA'");
            //echo "<pre>"; print_r($planilla); echo "</pre>" ;
            $consecutivo = $planilla->Consecutivo + 1;
            
            $data = Array(1 => Array('#Planilla','Regional', 'DocumentoBeneficiario', 'Nombre1', 'Nombre2','Apellido1','apellido2','Semestre', 'Institucion', 'Nit', 'Programa', 'Banco', 'TipoCuenta', 'NumeroCuenta', 'Valor', 'FechaPlanilla'));
            foreach($model_pagos as $pagos)
		{
                    if($pagos->idBeneficiario->Estado == 1 ){
			$tmp = Array($consecutivo,$pagos->idBeneficiario->idRegional->Nombre,$pagos->idBeneficiario->NroDocumento,$pagos->idBeneficiario->Nombre1,$pagos->idBeneficiario->Nombre2,$pagos->idBeneficiario->Apellido1,$pagos->idBeneficiario->Apellido2,$pagos->idBeneficiario->Semestre,$pagos->idBeneficiario->idInstitucion->Nombre,$pagos->idBeneficiario->idInstitucion->Nit,$pagos->idBeneficiario->idPrograma->Nombre,$pagos->idCuenta->idBanco->Banco,$pagos->idCuenta->Tipo,$pagos->idCuenta->Cuenta,$pagos->Valor,$pagos->FechaPago); 
			$data[] = $tmp;
			//echo "<pre>"; print_r($tmp); echo "</pre>" ;
                    }
                    
                        }	
			Yii::import('application.extensions.phpexcel.JPhpExcel');
			// Set properties
			$objPHPExcel = new JPhpExcel();
			$objPHPExcel->addArray($data);
			$objPHPExcel->generateXML('PlanillaTemporalDePago');
            }
            
        }
        
        public function actionPlanillaPago()
        {
            $model_pagos =  Pagos::model()->findAll();
            if(count($model_pagos) == 0)
            {
                Yii::app()->user->setFlash('error','No existen pagos ingresados !!!.');
                $this->redirect(array('pagos/index'));
                
            //echo '<pre>'; print_r($model_pagos); echo '</pre>';
            //die();
            }else{
            
            $planilla = Consecutivo::model()->find("Tipo = 'PLANILLA'");
            //echo "<script>alert('Se ejecutará el proceso de pago');</script>";
       
            //echo "<pre>"; print_r($planilla); echo "</pre>" ;
            $consecutivo = $planilla->Consecutivo + 1;
            $valor_planilla = 0;
            $cont = 0;
            $registro = new Pago();
            $data = Array(1 => Array('#Planilla','Regional', 'DocumentoBeneficiario', 'Nombre1', 'Nombre2','Apellido1','apellido2','Semestre', 'Institucion', 'Nit', 'Programa', 'Banco', 'TipoCuenta', 'NumeroCuenta', 'Valor', 'FechaPlanilla'));
            foreach($model_pagos as $pagos)
		{
                    if($pagos->idBeneficiario->Estado == 1 ){
			$tmp = Array($consecutivo,$pagos->idBeneficiario->idRegional->Nombre,$pagos->idBeneficiario->NroDocumento,$pagos->idBeneficiario->Nombre1,$pagos->idBeneficiario->Nombre2,$pagos->idBeneficiario->Apellido1,$pagos->idBeneficiario->Apellido2,$pagos->idBeneficiario->Semestre,$pagos->idBeneficiario->idInstitucion->Nombre,$pagos->idBeneficiario->idInstitucion->Nit,$pagos->idBeneficiario->idPrograma->Nombre,$pagos->idCuenta->idBanco->Banco,$pagos->idCuenta->Tipo,$pagos->idCuenta->Cuenta,$pagos->Valor,$pagos->FechaPago); 
			$data[] = $tmp;
                        $valor_planilla = $valor_planilla + $pagos->Valor;
                        $cont = $cont + 1;
                        $registro->setIsNewRecord(true);
                        $registro->Id=$cont;
                        $registro->Regional = $pagos->idBeneficiario->idRegional->Nombre;
                        $registro->DocumentoBeneficiario = $pagos->idBeneficiario->NroDocumento;
                        $registro->Nombre1 = $pagos->idBeneficiario->Nombre1;
                        $registro->Nombre2 = $pagos->idBeneficiario->Nombre2;
                        $registro->Apellido1 = $pagos->idBeneficiario->Apellido1;
                        $registro->Apellido2 = $pagos->idBeneficiario->Apellido2;
                        $registro->Semestre = $pagos->idBeneficiario->Semestre;
                        $registro->Institucion = $pagos->idBeneficiario->idInstitucion->Nombre;
                        $registro->Nit = $pagos->idBeneficiario->idInstitucion->Nit;
                        $registro->Programa = $pagos->idBeneficiario->idPrograma->Nombre;
                        $registro->Banco = $pagos->idCuenta->idBanco->Banco;
                        $registro->TipoCuenta = $pagos->idCuenta->Tipo;
                        $registro->NumeroCuenta = $pagos->idCuenta->Cuenta;
                        $registro->Valor = $pagos->Valor;
                        $registro->FechaPago = $pagos->FechaPago;
                        $registro->IdPlanilla = $consecutivo;
                        //echo "<pre>"; print_r($registro); echo "</pre>";
                        //die();
                        $ret = $registro->save();
                        
                        //echo "<pre>"; print_r($tmp); echo "</pre>" ;
                    }
                    
                }
                        //--Vaciar la tabla de los pagos ingresados--
                        $ret = Pagos::model()->deleteAll();
                        //echo "registros borrados: " .$ret . " Valor Planilla: " .$valor_planilla;
                        
                        //--Actualiza el consecutivo de planillas--
                        Yii::app()->db->createCommand()->update(
                            'Consecutivo',
                            array('Consecutivo'=>$consecutivo),
                            'Tipo = :param',
                            array(':param'=>'PLANILLA')
                        );
                        
                         
                        $nombreArchivo = 'PlanillaDePago_' . $consecutivo;
                        //--Generar xls planilla de pago--
			Yii::import('application.extensions.phpexcel.JPhpExcel');
			// Set properties
			$objPHPExcel = new JPhpExcel();
			$objPHPExcel->addArray($data);
			$objPHPExcel->generateXML($nombreArchivo);    
                        
                        Yii::app()->user->setFlash('success','Numero de planilla: '. $consecutivo . ' Valor de la planilla: '. $valor_planilla . ' Cantidad de pagos: ' .$cont);
                        $this->redirect(array('pagos/index'));
        
            }
      }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pago('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pago']))
			$model->attributes=$_GET['Pago'];

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
				$this->_model=Pago::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pago-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
