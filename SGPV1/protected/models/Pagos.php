<?php

/**
 * This is the model class for table "Pagos".
 *
 * The followings are the available columns in table 'Pagos':
 * @property integer $Id
 * @property integer $IdConcepto
 * @property integer $IdBeneficiario
 * @property string $FechaPago
 * @property integer $Valor
 * @property integer $IdCuenta
 */
class Pagos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Pagos the static model class
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
		return 'Pagos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdConcepto, IdBeneficiario, FechaPago, Valor, IdCuenta', 'required'),
			array('IdConcepto, IdBeneficiario, Valor, IdCuenta', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdConcepto, IdBeneficiario, FechaPago, Valor, IdCuenta', 'safe', 'on'=>'search'),
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
			'idConcepto' => array(self::BELONGS_TO, 'ConceptosDePago', 'IdConcepto'),
			'idBeneficiario' => array(self::BELONGS_TO, 'Beneficiario', 'IdBeneficiario'),
			'idCuenta' => array(self::BELONGS_TO, 'Cuenta', 'IdCuenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'IdConcepto' => 'Id Concepto',
			'IdBeneficiario' => 'Id Beneficiario',
			'FechaPago' => 'Fecha Pago',
			'Valor' => 'Valor',
			'IdCuenta' => 'Id Cuenta',
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

		$criteria->compare('IdConcepto',$this->IdConcepto);

		$criteria->compare('IdBeneficiario',$this->IdBeneficiario);

		$criteria->compare('FechaPago',$this->FechaPago,true);

		$criteria->compare('Valor',$this->Valor);

		$criteria->compare('IdCuenta',$this->IdCuenta);

		return new CActiveDataProvider('Pagos', array(
			'criteria'=>$criteria,
		));
	}
}