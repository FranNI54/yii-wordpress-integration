<?php

/**
 * This is the model class for table "tbl_rel_partido_jugador".
 *
 * The followings are the available columns in table 'tbl_rel_partido_jugador':
 * @property integer $id
 * @property integer $jugador
 * @property integer $partido
 * @property integer $campo
 * @property string $detalle
 */
class RelPartidoJugador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RelPartidoJugador the static model class
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
		return 'tbl_rel_partido_jugador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jugador, partido, campo', 'required'),
			array('jugador, partido, campo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, jugador, partido, campo, detalle', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
    {
        return array(
            'jugador_data'=>array(self::HAS_ONE, 'Jugador', array('id'=>'jugador')),
            'partido_data'=>array(self::HAS_ONE , 'Partido', array('id'=>'partido')),
			'campeonato'=>array(self::HAS_ONE ,"Campeonato",array('liga'=>'id'),'through' => 'partido_data' ),
			'torneos'=>array(self::HAS_MANY ,"Campeonato",array('liga'=>'id'),'through' => 'partido_data' ),
			//'place' => array( self::BELONGS_TO, 'Place', array('place_id'=>'id'), 'through' => 'event' )
        );
    }
	
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'jugador' => 'Jugador',
			'partido' => 'Partido',
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
		$criteria->compare('jugador',$this->jugador);
		$criteria->compare('partido',$this->partido);
		$criteria->compare('campo',$this->campo);
		$criteria->compare('detalle',$this->detalle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function partidos($id){
		return RelPartidoJugador::model()->findAllByAttributes(array("jugador"=>$id));
	}
	
	public function beforeSave(){
		$rel= RelPartidoJugador::model()->findByAttributes(array("jugador"=>$this->jugador,"partido"=>$this->partido));
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