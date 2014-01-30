<?php

/**
 * This is the model class for table "Programa".
 *
 * The followings are the available columns in table 'Programa':
 * @property integer $Id
 * @property string $Nombre
 * @property integer $IdTipo
 */
class Programa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Programa the static model class
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
		return 'Programa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdTipo', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Nombre, IdTipo,', 'safe', 'on'=>'search'),
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
			'idTipo' => array(self::BELONGS_TO, 'TipoPrograma', 'IdTipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Nombre' => 'Nombre',
			'IdTipo' => 'Id Tipo',
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('IdTipo',$this->IdTipo);

		return new CActiveDataProvider('Programa', array(
			'criteria'=>$criteria,
		));
	}
        public function beforeSave()
        {
                if(parent::beforeSave())
                {
                        $this->Nombre = strtoupper($this->Nombre);
                        return true;
                }
                return false;
        }

}
