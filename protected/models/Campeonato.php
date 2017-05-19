<?php

/**
 * This is the model class for table "tbl_campeonato".
 *
 * The followings are the available columns in table 'tbl_campeonato':
 * @property integer $id
 * @property string $torneo
 * @property string $division
 * @property string $fecha
 * @property integer $ganado
 * @property string $detalle
 */
class Campeonato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_campeonato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('torneo, division, fecha', 'required'),
			array('ganado', 'numerical', 'integerOnly'=>true),
			array('torneo, division', 'length', 'max'=>300),
			array('fecha', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, torneo, division, fecha, ganado, detalle', 'safe', 'on'=>'search'),
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
			'partidos'=>array(self::HAS_MANY ,"Partido",array('liga'=>'id') ),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'torneo' => 'Torneo',
			'division' => 'Division',
			'fecha' => 'Fecha',
			'ganado' => 'Ganado',
			'detalle' => 'Detalle',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('torneo',$this->torneo,true);
		$criteria->compare('division',$this->division,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('ganado',$this->ganado);
		$criteria->compare('detalle',$this->detalle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Campeonato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function behaviors()
	{
		return array(
			// Classname => path to Class
			'ActiveRecordLogableBehavior'=>
				'application.behaviors.ActiveRecordLogableBehavior',
		);
	}
	
	protected function beforeDelete()
    {
		foreach(Partido::model()->findAll("liga= ".$this->id) as $partido){
			$partido->delete();
		}		
		
		foreach(RelImagen::model()->findAll('modelId = '.$this->id." and model='Campeonato'") as $rel){
			$rel->delete();
		}
		foreach(DataExtra::model()->findAll('modelId = '.$this->id." and model='Campeonato' ") as $data){
			$data->delete();
		}
		foreach(DataDefault::model()->findAll("model='Campeonato' ") as $data){
			$data->delete();
		}
		return true;
        
    }
}
