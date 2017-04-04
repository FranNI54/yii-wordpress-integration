<?php

/**
 * This is the model class for table "tbl_rel_plantel_jugador".
 *
 * The followings are the available columns in table 'tbl_rel_plantel_jugador':
 * @property integer $id
 * @property integer $plantel
 * @property integer $jugador
 * @property integer $campo
 * @property string $detalle
 */
class RelPlantelJugador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RelPlantelJugador the static model class
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
		return 'tbl_rel_plantel_jugador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plantel, jugador, campo', 'required'),
			array('plantel, jugador, campo', 'numerical', 'integerOnly'=>true),
			array('detalle', 'length', 'max'=>300),
			array('detalle', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, plantel, jugador, campo, detalle', 'safe', 'on'=>'search'),
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
			'plantel' => 'Plantel',
			'jugador' => 'Jugador',
			'campo' => 'Campo',
			'detalle' => 'Detalle',
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
		$criteria->compare('plantel',$this->plantel);
		$criteria->compare('jugador',$this->jugador);
		$criteria->compare('campo',$this->campo);
		$criteria->compare('detalle',$this->detalle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeSave(){
		$rel= RelPlantelJugador::model()->findByAttributes(array("jugador"=>$this->jugador,"plantel"=>$this->plantel));
		if(isset($rel)){
			return false;
		}else{
			return true;
		}
	}
	public function behaviors()
	{
		return array(
			// Classname => path to Class
			'ActiveRecordLogableBehavior'=>
				'application.behaviors.ActiveRecordLogableBehavior',
		);
	}
	
	
	
}