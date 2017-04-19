<?php

/**
 * This is the model class for table "tbl_rel_partido_club".
 *
 * The followings are the available columns in table 'tbl_rel_partido_club':
 * @property integer $id
 * @property integer $partido
 * @property integer $club
 * @property integer $lado
 */
class RelPartidoClub extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RelPartidoClub the static model class
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
		return 'tbl_rel_partido_club';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('partido, club, lado', 'required'),
			array('partido, club, lado,resultado', 'numerical', 'integerOnly'=>true),
			array('resultado',  'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, partido, club, lado', 'safe', 'on'=>'search'),
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
			'club_data'=>array(self::HAS_ONE ,"Club",array('id'=>'club')),
			'goles'=>array(self::HAS_MANY ,"Gol",array('partido'=>'id'),"with"=>"jugador_data" ),
			"plantel"=>array(self::HAS_MANY ,"RelPartidoJugador",array('partido'=>'id') ),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'partido' => 'Partido',
			'club' => 'Club',
			'lado' => 'Lado',

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
		$criteria->compare('partido',$this->partido);
		$criteria->compare('club',$this->club);
		$criteria->compare('lado',$this->lado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	protected function beforeDelete()
    {
		RelPartidoJugador::model()->deleteAll('partido = '.$this->id);
		RelImagen::model()->deleteAll('modelId = '.$this->id." and model='RelPartidoClub'");
		DataExtra::model()->deleteAll('modelId = '.$this->id." and model='RelPartidoClub' ");
		
		return true;
        
    }
	
	
}