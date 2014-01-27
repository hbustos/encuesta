<?php

/**
 * This is the model class for table "respuestas".
 *
 * The followings are the available columns in table 'respuestas':
 * @property integer $Id
 * @property integer $IdUsuario
 * @property integer $uno
 * @property integer $dos
 * @property string $dos_uno
 * @property integer $tres
 * @property string $tres_uno
 * @property integer $cuatro
 * @property string $cuatro_uno
 * @property integer $cinco
 * @property integer $seis
 * @property integer $siete
 * @property integer $ocho
 * @property integer $nueve
 * @property integer $diez
 * @property integer $IdPais
 */
class respuestas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'respuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdUsuario, dos, tres, cuatro, cuatro_uno, cinco, seis, siete, ocho, nueve, diez, IdPais', 'required'),
			array('IdUsuario, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez, IdPais', 'numerical', 'integerOnly'=>true),
			array('dos_uno, tres_uno', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdUsuario, uno, dos, dos_uno, tres, tres_uno, cuatro, cuatro_uno, cinco, seis, siete, ocho, nueve, diez, IdPais', 'safe', 'on'=>'search'),
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
			'idPais' => array(self::BELONGS_TO, 'Pais', 'IdPais'),
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
			'dos_uno' => 'Dos Uno',
			'tres' => 'Tres',
			'tres_uno' => 'Tres Uno',
			'cuatro' => 'Cuatro',
			'cuatro_uno' => 'Cuatro Uno',
			'cinco' => 'Cinco',
			'seis' => 'Seis',
			'siete' => 'Siete',
			'ocho' => 'Ocho',
			'nueve' => 'Nueve',
			'diez' => 'Diez',
			'IdPais' => 'Id Pais',
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

		$criteria->compare('dos_uno',$this->dos_uno,true);

		$criteria->compare('tres',$this->tres);

		$criteria->compare('tres_uno',$this->tres_uno,true);

		$criteria->compare('cuatro',$this->cuatro);

		$criteria->compare('cuatro_uno',$this->cuatro_uno,true);

		$criteria->compare('cinco',$this->cinco);

		$criteria->compare('seis',$this->seis);

		$criteria->compare('siete',$this->siete);

		$criteria->compare('ocho',$this->ocho);

		$criteria->compare('nueve',$this->nueve);

		$criteria->compare('diez',$this->diez);

<<<<<<< HEAD
		$criteria->compare('IdPais',$this->IdPais);

		return new CActiveDataProvider('Respuestas', array(
=======
		return new CActiveDataProvider('respuestas', array(
>>>>>>> 3e10e8c595248dc8f1428b7999ab365742db4674
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return respuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}