<?php

/**
 * This is the model class for table "TipoArchivo".
 *
 * The followings are the available columns in table 'TipoArchivo':
 * @property integer $Id
 * @property string $Tipo
 * @property string $Descripcion
 */
class TipoArchivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoArchivo the static model class
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
		return 'TipoArchivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo, Descripcion', 'required'),
			array('Tipo, Descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Tipo, Descripcion', 'safe', 'on'=>'search'),
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
			'archivos' => array(self::HAS_MANY, 'Archivo', 'IdTipoArchivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'Tipo' => 'Tipo',
			'Descripcion' => 'Descripcion',
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

		$criteria->compare('Tipo',$this->Tipo,true);

		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider('TipoArchivo', array(
			'criteria'=>$criteria,
		));
	}
        public function beforeSave()
        {
                if(parent::beforeSave())
                {
                        $this->Tipo = strtoupper($this->Tipo);
                        $this->Descripcion = strtoupper($this->Descripcion);
                        return true;
                }
                return false;
        }
}