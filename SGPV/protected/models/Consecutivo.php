<?php

/**
 * This is the model class for table "Consecutivo".
 *
 * The followings are the available columns in table 'Consecutivo':
 * @property string $Tipo
 * @property integer $Consecutivo
 */
class Consecutivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Consecutivo the static model class
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
		return 'Consecutivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo', 'required'),
			array('Consecutivo', 'numerical', 'integerOnly'=>true),
			array('Tipo', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Tipo, Consecutivo', 'safe', 'on'=>'search'),
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
			'Tipo' => 'Tipo',
			'Consecutivo' => 'Consecutivo',
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

		$criteria->compare('Tipo',$this->Tipo,true);

		$criteria->compare('Consecutivo',$this->Consecutivo);

		return new CActiveDataProvider('Consecutivo', array(
			'criteria'=>$criteria,
		));
	}
}