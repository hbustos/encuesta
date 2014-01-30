<?php

/**
 * This is the model class for table "HistorialAcademico".
 *
 * The followings are the available columns in table 'HistorialAcademico':
 * @property integer $Id
 * @property string $Nombre
 * @property string $Semestre
 * @property string $FechaSemestre
 * @property integer $IdBeneficiario
 * @property integer $IdPrograma
 * @property integer $IdInstitucion
 * @property double $Nota
 * @property string $Creditos
 */
class HistorialAcademico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return HistorialAcademico the static model class
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
		return 'HistorialAcademico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FechaSemestre', 'required'),
			array('IdBeneficiario, IdPrograma, IdInstitucion', 'numerical', 'integerOnly'=>true),
			array('Nota', 'numerical'),
			array('Nombre', 'length', 'max'=>200),
			array('Semestre, FechaSemestre', 'length', 'max'=>20),
			array('Creditos', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Nombre, Semestre, FechaSemestre, IdBeneficiario, IdPrograma, IdInstitucion, Nota, Creditos', 'safe', 'on'=>'search'),
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
			'idInstitucion' => array(self::BELONGS_TO, 'Institucion', 'IdInstitucion'),
			'idPrograma' => array(self::BELONGS_TO, 'Programa', 'IdPrograma'),
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
			'Semestre' => 'Semestre',
			'FechaSemestre' => 'Fecha Semestre',
			'IdBeneficiario' => 'Id Beneficiario',
			'IdPrograma' => 'Id Programa',
			'IdInstitucion' => 'Id Institucion',
			'Nota' => 'Nota',
			'Creditos' => 'Creditos',
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

		$criteria->compare('Semestre',$this->Semestre,true);

		$criteria->compare('FechaSemestre',$this->FechaSemestre,true);

		$criteria->compare('IdBeneficiario',$this->IdBeneficiario);

		$criteria->compare('IdPrograma',$this->IdPrograma);

		$criteria->compare('IdInstitucion',$this->IdInstitucion);

		$criteria->compare('Nota',$this->Nota);

		$criteria->compare('Creditos',$this->Creditos,true);

		return new CActiveDataProvider('HistorialAcademico', array(
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
