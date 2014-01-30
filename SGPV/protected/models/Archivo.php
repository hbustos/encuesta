<?php

/**
 * This is the model class for table "Archivo".
 *
 * The followings are the available columns in table 'Archivo':
 * @property integer $Id
 * @property integer $IdBeneficiario
 * @property integer $IdTipoArchivo
 */
class Archivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Archivo the static model class
	 */
	public $archivo_a_subir;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Archivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdBeneficiario, IdTipoArchivo', 'required'),
			array('IdBeneficiario, IdTipoArchivo', 'numerical', 'integerOnly'=>true),
			array('archivo_a_subir','file','types'=>'jpg,png,gif,pdf'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdBeneficiario, IdTipoArchivo, NombreArchivo', 'safe', 'on'=>'search'),
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
			'idBeneficiario' => array(self::BELONGS_TO, 'Beneficiario', 'IdBeneficiario'),
			'idTipoArchivo' => array(self::BELONGS_TO, 'TipoArchivo', 'IdTipoArchivo'),
		);
	}

	/** 
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'IdBeneficiario' => 'Id Beneficiario',
			'IdTipoArchivo' => 'Id Tipo Archivo',
			'archivo_a_subir' => 'Subir foto',
                        'NombreArchivo' => ' Nombre Archivo',
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
		$criteria->compare('IdBeneficiario',$this->IdBeneficiario);
		$criteria->compare('IdTipoArchivo',$this->IdTipoArchivo);
                $criteria->compare('NombreArchivo',$this->NombreArchivo);
		return new CActiveDataProvider('Archivo', array(
			'criteria'=>$criteria,
		));
	}
        public function beforeSave()
        {
            if($this->isNewRecord)
            {
                $registro = Archivo::model()->findByAttributes(Array('IdBeneficiario'=>$this->IdBeneficiario,'IdTipoArchivo'=>$this->IdTipoArchivo));
                
                if(isset($registro)){
                    
                    if($this->IdBeneficiario == $registro->IdBeneficiario && $this->IdTipoArchivo == $registro->IdTipoArchivo)
                    {
                        $query = "DELETE FROM Archivo WHERE IdBeneficiario = '".$registro->IdBeneficiario."' AND IdTipoArchivo = '".$registro->IdTipoArchivo."'"; ;
                        Yii::app()->db->createCommand($query)->query();
                        
                        parent::beforeSave();
                    }else
                    {
                        parent::beforeSave();
                    }
                }else
                {
                        parent::beforeSave();
                }
                return true;
            }  
            return false;
        }
}
