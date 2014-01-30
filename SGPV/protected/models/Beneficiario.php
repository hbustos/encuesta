<?php

/**
 * This is the model class for table "Beneficiario".
 *
 * The followings are the available columns in table 'Beneficiario':
 * @property integer $Id
 * @property integer $TipoUsuario
 * @property string $Nombre1
 * @property string $Nombre2
 * @property string $Apellido1
 * @property string $Apellido2
 * @property string $NroDocumento
 * @property integer $TipoDocumento
 * @property integer $TipoBeneficiario
 * @property string $FechaNacimiento
 * @property integer $IdRegional
 * @property integer $IdInstitucion
 * @property integer $IdPrograma
 * @property string $Genero
 * @property integer $Estado
 * @property string $FechaIngreso
 * @property string $FechaPago
 * @property string $Semestre
 */
class Beneficiario extends CActiveRecord
{
	public $cambio_estado;
	public $edad;
        public $foto;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Beneficiario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function setEdad($edad) {
		$this->Edad = $edad;
	}
        
        public function setFoto($foto) {
            
            $this->Foto = $foto; 
        }
        
        public function getFoto()
        {
            $IdTipoArchivo = 1;
            $model_archivo = Archivo::model()->findByAttributes(array('IdBeneficiario'=>$this->Id,'IdTipoArchivo'=>$IdTipoArchivo));
            
            //$path = "/home/prodevid/opt/SGPV/archivos/". $this->NroDocumento . "/FOTO/". $nombre_archivo;
            if(isset($model_archivo->NombreArchivo))
            {
                $nombre_archivo = $model_archivo->NombreArchivo;
                return $nombre_archivo;
            }else{
                return $foto_defecto = "vacio.png";
            }
             
        }
        
	public function getEdad() 
	{

		$cmd = Yii::app()->db->createCommand();
                $cmd->SELECT ("YEAR(CURDATE())-YEAR(FechaNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(FechaNacimiento,'%m-%d'), 0, -1) AS Edad"); 
		$cmd->from("Beneficiario");
		$cmd->where('Id = :id', array(':id' => $this->Id));

		$ret = $cmd->query();
		$edad = 0;
		while(($row = $ret->read()) !== false) {
			$edad = $row['Edad'];
		}

		return $edad;
		
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Beneficiario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TipoUsuario, Nombre1, Apellido1, IdRegional, IdInstitucion, IdPrograma, Genero, Estado, FechaPago, Semestre', 'required'),
			array('TipoUsuario, TipoDocumento, TipoBeneficiario, IdRegional, IdInstitucion, IdPrograma, Estado', 'numerical', 'integerOnly'=>true),
			array('Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento', 'length', 'max'=>80),
			array('Genero', 'length', 'max'=>30),
			array('Semestre', 'length', 'max'=>15),
			array('FechaNacimiento, FechaIngreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Foto, Edad, Id, TipoUsuario, Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento, TipoDocumento, TipoBeneficiario, FechaNacimiento, IdRegional, IdInstitucion, IdPrograma, Genero, Estado, FechaIngreso, FechaPago, Semestre', 'safe', 'on'=>'search'),
                        //VALIDACION PARA LA CEDULA QUE SEA NUMERICA
                        array('NroDocumento', 'match', 'pattern' => '/^[0-9,]+$/', 'message'=>'Solo numeros sin comas o puntos.'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'archivos' => array(self::HAS_MANY, 'Archivo', 'IdBeneficiario'),
			'estado' => array(self::BELONGS_TO, 'Estado', 'Estado'),
			'idInstitucion' => array(self::BELONGS_TO, 'Institucion', 'IdInstitucion'),
			'idPrograma' => array(self::BELONGS_TO, 'Programa', 'IdPrograma'),
			'idRegional' => array(self::BELONGS_TO, 'Regional', 'IdRegional'),
			'tipoDocumento' => array(self::BELONGS_TO, 'TipoDocumento', 'TipoDocumento'),
			'tipoBeneficiario' => array(self::BELONGS_TO, 'TipoBeneficiario', 'TipoBeneficiario'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'TipoUsuario'),
			'historialAcademicos' => array(self::HAS_MANY, 'HistorialAcademico', 'IdBeneficiario'),
			'referenciases' => array(self::HAS_MANY, 'Referencias', 'IdReferencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'TipoUsuario' => 'Tipo Usuario',
			'Nombre1' => 'Nombre1',
			'Nombre2' => 'Nombre2',
			'Apellido1' => 'Apellido1',
			'Apellido2' => 'Apellido2',
			'NroDocumento' => 'Nro Documento',
			'TipoDocumento' => 'Tipo Documento',
			'TipoBeneficiario' => 'Tipo Beneficiario',
			'FechaNacimiento' => 'Fecha Nacimiento',
			'IdRegional' => 'Regional',
			'IdInstitucion' => 'Institucion',
			'IdPrograma' => 'Programa',
			'Genero' => 'Sexo',
			'Estado' => 'Estado',
			'FechaIngreso' => 'Fecha Recepción Documentos',
			'FechaPago' => 'Fecha de Pago',
			'Semestre' => 'Semestre',
			'cambio_estado' => 'Cambio de Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('Id',$this->Id);
		$criteria->compare('TipoUsuario',$this->TipoUsuario);
		$criteria->compare('Nombre1',$this->Nombre1,true);
		$criteria->compare('Nombre2',$this->Nombre2,true);
		$criteria->compare('Apellido1',$this->Apellido1,true);
		$criteria->compare('Apellido2',$this->Apellido2,true);
		$criteria->compare('NroDocumento',$this->NroDocumento,true);
		$criteria->compare('TipoDocumento',$this->TipoDocumento);
		$criteria->compare('TipoBeneficiario',$this->TipoBeneficiario);
		$criteria->compare('FechaNacimiento',$this->FechaNacimiento,true);
		$criteria->compare('IdRegional',$this->IdRegional);
		$criteria->compare('IdInstitucion',$this->IdInstitucion);
		$criteria->compare('IdPrograma',$this->IdPrograma);
		$criteria->compare('Genero',$this->Genero,true);
		$criteria->compare('Estado',$this->Estado);
		$criteria->compare('FechaIngreso',$this->FechaIngreso,true);
		$criteria->compare('FechaPago',$this->FechaPago,true);
		$criteria->compare('Semestre',$this->Semestre,true);
		/*
		if (isset($_REQUEST['Beneficiario']['Edad'])) {
			$criteria->addCondition("YEAR(CURDATE())-YEAR(FechaNacimiento) = " . $this->Edad);
		}*/
		return new CActiveDataProvider('Beneficiario', array(
			'criteria'=>$criteria,
		));
	}


        public function beforeSave()
        {
                if(parent::beforeSave())
                {
                        $this->Nombre1 = strtoupper($this->Nombre1);
                        $this->Nombre2 = strtoupper($this->Nombre2);
                        $this->Apellido1 = strtoupper($this->Apellido1);
                        $this->Apellido2 = strtoupper($this->Apellido2);
                        return true;
                }
                return false;
        }
}
