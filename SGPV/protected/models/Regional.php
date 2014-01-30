<?php

/**
 * This is the model class for table "Regional".
 *
 * The followings are the available columns in table 'Regional':
 * @property integer $Id
 * @property string $Nombre
 */
class Regional extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Regional the static model class
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
		return 'Regional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre', 'required'),
			array('Nombre', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Nombre', 'safe', 'on'=>'search'),
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
			'beneficiarios' => array(self::HAS_MANY, 'Beneficiario', 'IdRegional'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'IdRegional'),
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
		return new CActiveDataProvider('Regional', array(
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
