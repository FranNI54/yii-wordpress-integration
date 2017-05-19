<?php

/**
 * This is the model class for table "tbl_data_extra".
 *
 * The followings are the available columns in table 'tbl_data_extra':
 * @property integer $id
 * @property string $model
 * @property integer $modelId
 * @property string $titulo
 * @property string $texto
 */
class DataExtra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataExtra the static model class
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
		return 'tbl_data_extra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model, modelId, titulo', 'required'),
			array('modelId', 'numerical', 'integerOnly'=>true),
			array('model', 'length', 'max'=>100),
			array('titulo', 'length', 'max'=>300),
			array('texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, model, modelId, titulo, texto', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'model' => 'Model',
			'modelId' => 'Model',
			'titulo' => 'Titulo',
			'texto' => 'Texto',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('modelId',$this->modelId);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeDelete()
    {
		foreach(RelImagen::model()->findAll('modelId = '.$this->id." and model='DataExtra'") as $rel){
			$rel->delete();
		}
		foreach(DataExtra::model()->findAll('modelId = '.$this->id." and model='DataExtra' ") as $data){
			$data->delete();
		}
		foreach(DataDefault::model()->findAll("model='DataExtra' ") as $data){
			$data->delete();
		}
		return true;
	}
}