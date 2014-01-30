<?php

/**
 * This is the model class for table "Telefono".
 *
 * The followings are the available columns in table 'Telefono':
 * @property integer $Id
 * @property integer $IdReferencia
 * @property string $Numero
 * @property string $Indicativo
 * @property string $Ext
 */
class Telefono extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Telefono the static model class
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
		return 'Telefono';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdReferencia, Numero', 'required'),
			array('IdReferencia', 'numerical', 'integerOnly'=>true),
			array('Numero', 'length', 'max'=>15),
			array('Indicativo, Ext', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdReferencia, Numero, Indicativo, Ext', 'safe', 'on'=>'search'),
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
			'idReferencia' => array(self::BELONGS_TO, 'Referencia', 'IdReferencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'IdReferencia' => 'Id Referencia',
			'Numero' => 'Numero',
			'Indicativo' => 'Indicativo',
			'Ext' => 'Ext',
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

		$criteria->compare('IdReferencia',$this->IdReferencia);

		$criteria->compare('Numero',$this->Numero,true);

		$criteria->compare('Indicativo',$this->Indicativo,true);

		$criteria->compare('Ext',$this->Ext,true);

		return new CActiveDataProvider('Telefono', array(
			'criteria'=>$criteria,
		));
	}
}