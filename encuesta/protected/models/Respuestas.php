<?php

/**
 * This is the model class for table "Respuestas".
 *
 * The followings are the available columns in table 'Respuestas':
 * @property integer $Id
 * @property integer $IdUsuario
 * @property integer $uno
 * @property integer $dos
 * @property integer $tres
 * @property integer $cuatro
 * @property integer $cinco
 * @property integer $seis
 * @property integer $siete
 * @property integer $ocho
 * @property integer $nueve
 * @property integer $diez
 */
class Respuestas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Respuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdUsuario, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez', 'required'),
			array('IdUsuario, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdUsuario, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'IdUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'IdUsuario' => 'Id Usuario',
			'uno' => 'Uno',
			'dos' => 'Dos',
			'tres' => 'Tres',
			'cuatro' => 'Cuatro',
			'cinco' => 'Cinco',
			'seis' => 'Seis',
			'siete' => 'Siete',
			'ocho' => 'Ocho',
			'nueve' => 'Nueve',
			'diez' => 'Diez',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);

		$criteria->compare('IdUsuario',$this->IdUsuario);

		$criteria->compare('uno',$this->uno);

		$criteria->compare('dos',$this->dos);

		$criteria->compare('tres',$this->tres);

		$criteria->compare('cuatro',$this->cuatro);

		$criteria->compare('cinco',$this->cinco);

		$criteria->compare('seis',$this->seis);

		$criteria->compare('siete',$this->siete);

		$criteria->compare('ocho',$this->ocho);

		$criteria->compare('nueve',$this->nueve);

		$criteria->compare('diez',$this->diez);

		return new CActiveDataProvider('Respuestas', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Respuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}