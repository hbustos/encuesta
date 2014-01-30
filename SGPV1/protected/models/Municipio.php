<?php

/**
 * This is the model class for table "Municipio".
 *
 * The followings are the available columns in table 'Municipio':
 * @property integer $Id
 * @property string $Municipio
 * @property string $CodigoMunicipio
 * @property string $CodigoDepartamento
 * @property integer $IdRegional
 */
class Municipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Municipio the static model class
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
		return 'Municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Municipio, CodigoMunicipio, CodigoDepartamento, IdRegional', 'required'),
			array('IdRegional', 'numerical', 'integerOnly'=>true),
			array('Municipio', 'length', 'max'=>60),
			array('CodigoMunicipio, CodigoDepartamento', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Municipio, CodigoMunicipio, CodigoDepartamento, IdRegional', 'safe', 'on'=>'search'),
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
			'idRegional' => array(self::BELONGS_TO, 'Regional', 'IdRegional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Municipio' => 'Municipio',
			'CodigoMunicipio' => 'Codigo Municipio',
			'CodigoDepartamento' => 'Codigo Departamento',
			'IdRegional' => 'Id Regional',
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

		$criteria->compare('Municipio',$this->Municipio,true);

		$criteria->compare('CodigoMunicipio',$this->CodigoMunicipio,true);

		$criteria->compare('CodigoDepartamento',$this->CodigoDepartamento,true);

		$criteria->compare('IdRegional',$this->IdRegional);

		return new CActiveDataProvider('Municipio', array(
			'criteria'=>$criteria,
		));
	}
}