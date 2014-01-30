<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property integer $Id
 * @property string $Usuario
 * @property string $Clave
 * @property integer $TipoUsuario
 * @property string $Nombre1
 * @property string $Nombre2
 * @property string $Apellido1
 * @property string $Apellido2
 * @property string $NroDocumento
 * @property integer $TipoDocumento
 * @property string $Telefono1
 * @property string $Celular
 * @property string $Correo
 * @property string $Direccion
 * @property string $FechaNacimiento
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario, Clave, Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento, TipoDocumento, Telefono1, Celular, Correo, Direccion', 'required'),
			array('TipoUsuario, TipoDocumento', 'numerical', 'integerOnly'=>true),
			array('Usuario', 'length', 'max'=>20),
			array('Clave, Correo', 'length', 'max'=>100),
			array('Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento', 'length', 'max'=>80),
			array('Telefono1, Celular', 'length', 'max'=>10),
			array('Direccion', 'length', 'max'=>200),
			array('FechaNacimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Usuario, Clave, TipoUsuario, Nombre1, Nombre2, Apellido1, Apellido2, NroDocumento, TipoDocumento, Telefono1, Celular, Correo, Direccion, FechaNacimiento', 'safe', 'on'=>'search'),
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
			'institucions' => array(self::MANY_MANY, 'Institucion', 'Relacion(Institucion_Id, Usuario_Id)'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'TipoUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Usuario' => 'Usuario',
			'Clave' => 'Clave',
			'TipoUsuario' => 'Tipo Usuario',
			'Nombre1' => 'Nombre1',
			'Nombre2' => 'Nombre2',
			'Apellido1' => 'Apellido1',
			'Apellido2' => 'Apellido2',
			'NroDocumento' => 'Nro Documento',
			'TipoDocumento' => 'Tipo Documento',
			'Telefono1' => 'Telefono1',
			'Celular' => 'Celular',
			'Correo' => 'Correo',
			'Direccion' => 'Direccion',
			'FechaNacimiento' => 'Fecha Nacimiento',
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

		$criteria->compare('Usuario',$this->Usuario,true);

		$criteria->compare('Clave',$this->Clave,true);

		$criteria->compare('TipoUsuario',$this->TipoUsuario);

		$criteria->compare('Nombre1',$this->Nombre1,true);

		$criteria->compare('Nombre2',$this->Nombre2,true);

		$criteria->compare('Apellido1',$this->Apellido1,true);

		$criteria->compare('Apellido2',$this->Apellido2,true);

		$criteria->compare('NroDocumento',$this->NroDocumento,true);

		$criteria->compare('TipoDocumento',$this->TipoDocumento);

		$criteria->compare('Telefono1',$this->Telefono1,true);

		$criteria->compare('Celular',$this->Celular,true);

		$criteria->compare('Correo',$this->Correo,true);

		$criteria->compare('Direccion',$this->Direccion,true);

		$criteria->compare('FechaNacimiento',$this->FechaNacimiento,true);

		return new CActiveDataProvider('Usuario', array(
			'criteria'=>$criteria,
		));
	}
}
