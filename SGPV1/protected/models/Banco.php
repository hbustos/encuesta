<?php

/**
 * This is the model class for table "Banco".
 *
 * The followings are the available columns in table 'Banco':
 * @property integer $Id
 * @property string $Banco
 */
class Banco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Banco the static model class
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
		return 'Banco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Banco', 'required'),
			array('Banco', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Banco', 'safe', 'on'=>'search'),
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
			'pagoses' => array(self::HAS_MANY, 'Pagos', 'IdBanco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Banco' => 'Banco',
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

		$criteria->compare('Banco',$this->Banco,true);

		return new CActiveDataProvider('Banco', array(
			'criteria'=>$criteria,
		));
	}
        public function beforeSave()
        {
                if(parent::beforeSave())
                {
                        $this->Banco = strtoupper($this->Banco);
                        return true;
                }
                return false;
        }

}
