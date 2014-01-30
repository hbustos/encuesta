<?php

class ReporteController extends Controller
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
				'actions'=>array('genero','region','edad','ReportePagos','RHistoricoEdu','ReportePagosBene','RPago'),
				'roles'=>array('rol_leer'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('genero','region','edad','ReportePagos','RHistoricoEdu','ReportePagosBene','RPago'),
				'roles'=>array('rol_edicion'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('genero','region','edad','ReportePagos','RHistoricoEdu','ReportePagosBene','RPago'),
				'roles'=>array('rol_borrado'),
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
	 * grafica de genero sobre el total de beneficiarios activos
	 */
	public function actionRegion()
	{
		$consulta = "SELECT b.Nombre AS Regional,COUNT(a.IdRegional) AS Cantidad
				FROM Beneficiario a, Regional b 
				WHERE a.Estado = 1
				AND a.IdRegional = b.Id
				GROUP BY b.Nombre
				ORDER BY b.Nombre";

		$regional = Yii::app()->db->createCommand($consulta)->queryAll();
		foreach( $regional as $row )
		{
			$rtv[]=array($row['Regional'],(int)$row['Cantidad']);
		}
		$consulta2 = "SELECT COUNT(*) AS Cantidad FROM Beneficiario WHERE Estado = 1";	
		$cant = Yii::app()->db->createCommand($consulta2)->queryAll();
		$this->render('region',array(
			'regional'=>$regional,
			'cant'=>$cant,
			'rtv'=>$rtv,
		));
	}
        /**
         * grafica de genero sobre el total de beneficiarios activos
         */
        public function actionEdad()
        {
		/*
		$consulta = "SELECT 'Edad: < 15 años' AS Edad,COUNT(FechaNacimiento) AS Cantidad
                                FROM Beneficiario
                                WHERE Estado = 1
                                AND YEAR(CURDATE())-YEAR(FechaNacimiento) < 15 UNION                                                          */
			
		$consulta =	"
                                SELECT 'Edad: 15-20 años' AS Edad,COUNT(FechaNacimiento) AS Cantidad
                                FROM Beneficiario
                                WHERE Estado = 1
                                AND (YEAR(CURDATE())-YEAR(`Beneficiario`.`FechaNacimiento`) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`Beneficiario`.`FechaNacimiento`,'%m-%d'), 0, -1)) BETWEEN 15 AND 20
				UNION
				SELECT 'Edad: 21-25 años' AS Edad,COUNT(FechaNacimiento) AS Cantidad
                                FROM Beneficiario
                                WHERE Estado = 1
                                AND (YEAR(CURDATE())-YEAR(`Beneficiario`.`FechaNacimiento`) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`Beneficiario`.`FechaNacimiento`,'%m-%d'), 0, -1)) BETWEEN 21 AND 25                                  
				UNION
				SELECT 'Edad: 26-30 años' AS Edad,COUNT(FechaNacimiento) AS Cantidad
                                FROM Beneficiario
                                WHERE Estado = 1
                                AND (YEAR(CURDATE())-YEAR(`Beneficiario`.`FechaNacimiento`) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`Beneficiario`.`FechaNacimiento`,'%m-%d'), 0, -1)) BETWEEN 26 AND 30 	                            
				UNION
				SELECT 'Edad: 31-35 años' AS Edad,COUNT(FechaNacimiento) AS Cantidad
                                FROM Beneficiario
                                WHERE Estado = 1
                                AND (YEAR(CURDATE())-YEAR(`Beneficiario`.`FechaNacimiento`) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`Beneficiario`.`FechaNacimiento`,'%m-%d'), 0, -1)) BETWEEN 31 AND 35";
                                 
                $regional = Yii::app()->db->createCommand($consulta)->queryAll();
                foreach( $regional as $row )
                {
                        $rtv[]=array($row['Edad'],(int)$row['Cantidad']);
                }
                $consulta2 = "SELECT COUNT(*) AS Cantidad FROM Beneficiario WHERE Estado = 1";
                $cant = Yii::app()->db->createCommand($consulta2)->queryAll();
                $this->render('edad',array(
                        'regional'=>$regional,
                        'cant'=>$cant,
                        'rtv'=>$rtv,
                ));
        }



	/**
	 * grafica de genero sobre el total de beneficiarios activos
	 */
	public function actionGenero()
	{
		$consulta = "SELECT Genero,COUNT(*) AS Cantidad FROM `Beneficiario` WHERE Estado = 1 GROUP BY Genero";
		$generos = Yii::app()->db->createCommand($consulta)->queryAll();
		$this->render('genero',array(
			'generos'=>$generos,
		));
	}

	/**
	 * Lists all models.
	 */

	public function actionIndex()
	{
		
		$consulta = "SELECT Genero,COUNT(*) AS Cantidad FROM `Beneficiario` WHERE Estado = 1 GROUP BY Genero";
		$generos = Yii::app()->db->createCommand($consulta)->queryAll();
		$this->render('index',array(
			'generos'=>$generos,
		));
	}

	public function actionRPago()
	{
		$model=Beneficiario::model()->findAll();


		$data = Array(1 => Array('Id','Estado','Nombre1','Nombre2','Apellido1','Apellido2','NroDocumento','tipoDocumento','tipoBeneficiario','FechaNacimiento','Edad','Regional','Institucion','Programa','Sexo','FechaRecepciónDocumentos','Fecha Planilla','Semestre'));
		foreach ($model as $bene)
		{
			$tmp = Array($bene->Id,$bene->Estado,$bene->Nombre1,$bene->Nombre2,$bene->Apellido1,$bene->Apellido2,$bene->NroDocumento,$bene->tipoDocumento->Tipo,$bene->tipoBeneficiario->Tipo,$bene->FechaNacimiento,$bene->Edad,$bene->idRegional->Nombre,$bene->idInstitucion->Nombre,$bene->idPrograma->Nombre,$bene->Genero,$bene->FechaIngreso,$bene->FechaPago,$bene->Semestre);
			$data[] = $tmp;
			//print_r($tmp);
		}
			Yii::import('application.extensions.phpexcel.JPhpExcel');
		       	// Set properties
                        $objPHPExcel = new JPhpExcel();
                        //$xls = new JPhpExcel('LATIN', false, 'Planilla de Pago - Proyecto de Vida');
                        $objPHPExcel->addArray($data);
                        $objPHPExcel->generateXML('BaseGeneralBeneficiarios');

	}

	public function actionRHistoricoEdu()
	{
	
	if((isset($_GET['ajax']) && $_GET['ajax'] == 'beneficiario-grid')) {
                        $model2 = new Beneficiario('search');
                        $model2->unsetAttributes();
                        $model2->attributes=$_GET['Beneficiario'];
			$this->renderPartial('//ayudas/BuscarBeneficiario', array('model' => $model2));

                        Yii::app()->end();
                }		
		if(isset($_GET['IdBene']))
		{
			$IdBene = $_GET['IdBene'];
				
			$model = HistorialAcademico::model()->findAllByAttributes(Array('IdBeneficiario' => $IdBene));
                        			
                        foreach ($model as $hist)
			{
				$tmp = Array($hist->Nombre,$hist->Semestre,$hist->FechaSemestre,$hist->IdBeneficiario,$hist->idPrograma->Nombre,$hist->idInstitucion->Nombre,$hist->Nota,$hist->Creditos);
				$data[] = $tmp;                                
			}                              
		}
		$model2 = new Beneficiario('search');
		$model2->unsetAttributes(); 
                
                if(isset($data))
                {
                    //echo "<pre>"; print_r($data); echo "</pre>";
                    //die();
                    $this->render('RHistoricoEdu',array(
				'Historico'=>$data,
				'Beneficiario'=>$model2,	
			)			
		);
                    
                }
                else
                    {
                    $this->render('RHistoricoEdu',array(
				'Beneficiario'=>$model2,	
			)			
		);
                    }
                    
	}
               public function actionReporteReferencias()
        {
		$model=new Pago('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_REQUEST['nro_documento']))
			$model->DocumentoBeneficiario=$_REQUEST['nro_documento'];

		$this->renderPartial('RPagosBene',array(
			'model'=>$model,
		));
            die();
        }
        public function actionReportePagosBene()
        {
		$model=new Pago('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_REQUEST['nro_documento']))
			$model->DocumentoBeneficiario=$_REQUEST['nro_documento'];

		$this->renderPartial('RPagosBene',array(
			'model'=>$model,
		));
            die();

            $NroDocumento=$_REQUEST['nro_documento'];
            $ret = array();
            //$NroDocumento = '1053824779';
            if(isset($NroDocumento))
            {
                $Pagos = Pago::model()->findAll("DocumentoBeneficiario = '$NroDocumento'"); 
            }
            
            foreach($Pagos as $llave => $valor) {
                
                $ret["ID_" . $valor->IdPlanilla]["FechaPago"] = $valor->FechaPago;
                $ret["ID_" . $valor->IdPlanilla]["Regional"] = $valor->Regional; 
                $ret["ID_" . $valor->IdPlanilla]["DocumentoBenficiario"] = $valor->DocumentoBeneficiario;                                
                $ret["ID_" . $valor->IdPlanilla]["Nombre"] = $valor->Nombre1 . " " . $valor->Nombre1 . " " . $valor->Apellido1 . " " . $valor->Apellido2;
                $ret["ID_" . $valor->IdPlanilla]["Semestre"] = $valor->Semestre;
                $ret["ID_" . $valor->IdPlanilla]["Institucion"] = $valor->Institucion;
                $ret["ID_" . $valor->IdPlanilla]["Nit"] = $valor->Nit;
                $ret["ID_" . $valor->IdPlanilla]["Programa"] = $valor->Programa;
                $ret["ID_" . $valor->IdPlanilla]["Banco"] = $valor->Banco;
                $ret["ID_" . $valor->IdPlanilla]["Valor"] = $valor->Valor;
            }
            header("Content-Type: application/json");
            echo json_encode($ret);
            
            die();
        }
        
	public function actionReportePagos()
	{
	
	if((isset($_GET['ajax']) && $_GET['ajax'] == 'beneficiario-grid')) {
                        $model2 = new Beneficiario('search');
                        $model2->unsetAttributes();
                        $model2->attributes=$_GET['Beneficiario'];
			$this->renderPartial('//ayudas/BuscarBeneficiario', array('model' => $model2));

                        Yii::app()->end();
                }		
		if(isset($_GET['IdBene']))
		{
			$IdBene = $_GET['IdBene'];
				
			$model = Pago::model()->findAllByAttributes(Array('IdBeneficiario' => $IdBene));
                        			
                        foreach ($model as $hist)
			{
				$tmp = Array($hist->Nombre,$hist->Semestre,$hist->FechaSemestre,$hist->IdBeneficiario,$hist->idPrograma->Nombre,$hist->idInstitucion->Nombre,$hist->Nota,$hist->Creditos);
				$data[] = $tmp;                                
			}                              
		}
		$model2 = new Beneficiario('search');
		$model2->unsetAttributes(); 
                
                if(isset($data))
                {
                    $this->render('RPagos',array(
				'Historico'=>$data,
				'Beneficiario'=>$model2,	
			)			
		);
                    
                }
                else
                    {
                    $this->render('RPagos',array(
				'Beneficiario'=>$model2,	
			)			
		);
                    }
                    
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
}