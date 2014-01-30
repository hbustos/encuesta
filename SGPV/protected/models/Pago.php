<?php

/**
 * This is the model class for table "Pago".
 *
 * The followings are the available columns in table 'Pago':
 * @property integer $Id
 * @property string $Regional
 * @property string $DocumentoBeneficiario
 * @property string $Nombre1
 * @property string $Nombre2
 * @property string $Apellido1
 * @property string $Apellido2
 * @property string $Semestre
 * @property string $Institucion
 * @property string $Nit
 * @property string $Programa
 * @property string $Banco
 * @property string $TipoCuenta
 * @property string $NumeroCuenta
 * @property string $Valor
 * @property string $FechaPago
 * @property integer $IdPlanilla
 */
class Pago extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Pago the static model class
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
		return 'Pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id', 'required'),
			array('Id, IdPlanilla', 'numerical', 'integerOnly'=>true),
			array('Regional, DocumentoBeneficiario, Nombre1, Apellido1, Apellido2, NumeroCuenta', 'length', 'max'=>100),
			array('Nombre2, Institucion, Programa, Banco', 'length', 'max'=>200),
			array('Semestre', 'length', 'max'=>20),
			array('Nit', 'length', 'max'=>70),
			array('TipoCuenta, Valor', 'length', 'max'=>50),
			array('FechaPago', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Regional, DocumentoBeneficiario, Nombre1, Nombre2, Apellido1, Apellido2, Semestre, Institucion, Nit, Programa, Banco, TipoCuenta, NumeroCuenta, Valor, FechaPago, IdPlanilla', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Regional' => 'Regional',
			'DocumentoBeneficiario' => 'Documento Beneficiario',
			'Nombre1' => 'Nombre1',
			'Nombre2' => 'Nombre2',
			'Apellido1' => 'Apellido1',
			'Apellido2' => 'Apellido2',
			'Semestre' => 'Semestre',
			'Institucion' => 'Institucion',
			'Nit' => 'Nit',
			'Programa' => 'Programa',
			'Banco' => 'Banco',
			'TipoCuenta' => 'Tipo Cuenta',
			'NumeroCuenta' => 'Numero Cuenta',
			'Valor' => 'Valor',
			'FechaPago' => 'Fecha Pago',
			'IdPlanilla' => 'Id Planilla',
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

		$criteria->compare('Regional',$this->Regional,true);

		$criteria->compare('DocumentoBeneficiario',$this->DocumentoBeneficiario,true);

		$criteria->compare('Nombre1',$this->Nombre1,true);

		$criteria->compare('Nombre2',$this->Nombre2,true);

		$criteria->compare('Apellido1',$this->Apellido1,true);

		$criteria->compare('Apellido2',$this->Apellido2,true);

		$criteria->compare('Semestre',$this->Semestre,true);

		$criteria->compare('Institucion',$this->Institucion,true);

		$criteria->compare('Nit',$this->Nit,true);

		$criteria->compare('Programa',$this->Programa,true);

		$criteria->compare('Banco',$this->Banco,true);

		$criteria->compare('TipoCuenta',$this->TipoCuenta,true);

		$criteria->compare('NumeroCuenta',$this->NumeroCuenta,true);

		$criteria->compare('Valor',$this->Valor,true);

		$criteria->compare('FechaPago',$this->FechaPago,true);

		$criteria->compare('IdPlanilla',$this->IdPlanilla);

		return new CActiveDataProvider('Pago', array(
			'criteria'=>$criteria,
		));
	}
}