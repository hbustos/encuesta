<?php

/**
 * This is the model class for table "Referencia".
 *
 * The followings are the available columns in table 'Referencia':
 * @property integer $Id
 * @property string $Nombre
 * @property integer $IdTipoReferencia
 * @property string $NroDocumento
 */
class Referencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Referencia the static model class
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
		return 'Referencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdTipoReferencia', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>200),
			array('NroDocumento', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Nombre, IdTipoReferencia, NroDocumento', 'safe', 'on'=>'search'),
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
			'Id' => 'Id',
			'Nombre' => 'Nombre',
			'IdTipoReferencia' => 'Id Tipo Referencia',
			'NroDocumento' => 'Nro Documento',
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
		$criteria->compare('IdTipoReferencia',$this->IdTipoReferencia);
		$criteria->compare('NroDocumento',$this->NroDocumento,true);
		return new CActiveDataProvider('Referencia', array(
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
