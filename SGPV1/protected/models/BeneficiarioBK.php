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
 * @property string $FechaNacimiento
 * @property integer $IdRegional
 * @property integer $IdInstitucion
 * @property integer $IdPrograma
 * @property string $Genero
 * @property integer $Estado
 * @property string $FechaIngreso
 * @property string $FechaPago
 * @property string $TipoBeneficiario
 * @property string $Semestre
 * @property string $FechaSemestre
 */
class Beneficiario extends CActiveRecord
{
	public $cambio_estado;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Beneficiario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
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
			array('TipoUsuario, Nombre1, Apellido1, IdRegional, IdInstitucion, IdPrograma, Genero, Estado', 'required'),
			array('TipoUsuario, TipoDocumento, IdRegional, IdInstitucion, IdPrograma, Estado', 'numerical', 'integerOnly'=>true),
			array('Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento', 'length', 'max'=>80),
			array('Genero', 'length', 'max'=>30),
			array('FechaNacimiento, FechaIngreso, FechaPago', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, TipoUsuario, Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento, TipoDocumento, TipoBeneficiario, FechaNacimiento, IdRegional, IdInstitucion, IdPrograma, Genero, Estado, FechaIngreso, FechaPago', 'safe', 'on'=>'search'),
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
			'idPrograma' => array(self::BELONGS_TO, 'Programa', 'IdPrograma'),
			'estado' => array(self::BELONGS_TO, 'Estado', 'Estado'),
			'idInstitucion' => array(self::BELONGS_TO, 'Institucion', 'IdInstitucion'),
			'idRegional' => array(self::BELONGS_TO, 'Regional', 'IdRegional'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'TipoUsuario'),
			'tipoBeneficiario' => array(self::BELONGS_TO, 'TipoBeneficiario', 'TipoBeneficiario'),
			'tipoDocumento' => array(self::BELONGS_TO, 'TipoDocumento', 'TipoDocumento'),
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
			'FechaNacimiento' => 'Fecha Nacimiento',
			'IdRegional' => 'Regional',
			'IdInstitucion' => 'Institucion',
			'IdPrograma' => 'Programa',
			'Genero' => 'Genero',
			'Estado' => 'Estado',
			'FechaIngreso' => 'Fecha Ingreso',
			'FechaPago' => 'Fecha de Pago',
			'TipoBeneficiario'=>'Tipo de Beneficiario',
			'Semestre'=>'Semestre',
			'FechaSemestre'=>'Fecha Semestre',
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
		$criteria->compare('FechaNacimiento',$this->FechaNacimiento,true);
		$criteria->compare('IdRegional',$this->IdRegional);
		$criteria->compare('IdInstitucion',$this->IdInstitucion);
		$criteria->compare('IdPrograma',$this->IdPrograma);
		$criteria->compare('Genero',$this->Genero,true);
		$criteria->compare('Estado',$this->Estado);
		$criteria->compare('FechaIngreso',$this->FechaIngreso,true);
		$criteria->compare('FechaPago',$this->FechaPago,true);
		$criteria->compare('TipoBeneficaiario',$this->TipoBeneficiario);
		$criteria->compare('Semestre',$this->Semestre);
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
