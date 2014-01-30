<?php

/**
 * This is the model class for table "Referencias".
 *
 * The followings are the available columns in table 'Referencias':
 * @property integer $Id
 * @property integer $IdBeneficiario
 * @property integer $IdReferencia
 */
class Referencias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Referencias the static model class
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
		return 'Referencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdBeneficiario, IdReferencia', 'required'),
			array('IdBeneficiario, IdReferencia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdBeneficiario, IdReferencia', 'safe', 'on'=>'search'),
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
			'idReferencia' => array(self::BELONGS_TO, 'Beneficiario', 'IdReferencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'IdBeneficiario' => 'Id Beneficiario',
			'IdReferencia' => 'Id Referencia',
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

		$criteria->compare('IdBeneficiario',$this->IdBeneficiario);

		$criteria->compare('IdReferencia',$this->IdReferencia);

		return new CActiveDataProvider('Referencias', array(
			'criteria'=>$criteria,
		));
	}
}