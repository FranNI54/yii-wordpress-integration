<?php

/**
 * This is the model class for table "tbl_partido".
 *
 * The followings are the available columns in table 'tbl_partido':
 * @property integer $id
 * @property string $liga
 * @property string $fec
 * @property string $fecha
 * @property string $comentario
 */
class Partido extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Partido the static model class
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
		return 'tbl_partido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('liga, fec, fecha, comentario', 'required'),
			array('liga, fec', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, liga, fec, fecha, comentario', 'safe', 'on'=>'search'),
		);
	}

	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'liga' => 'Liga',
			'fec' => 'Fec',
			'fecha' => 'Fecha',
			'comentario' => 'Comentario',
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
		$criteria->compare('liga',$this->liga,true);
		$criteria->compare('fec',$this->fec,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('comentario',$this->comentario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public $campeonato;
	public $rel;

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'liga_data'=>array(self::HAS_ONE ,"Campeonato",array('id'=>'liga') ),
			'clubes'=>array(self::HAS_MANY ,"RelPartidoClub",array('partido'=>'id'), "with"=>"club_data" ),
			
			
		);
	}

	protected function beforeDelete()
    {
		RelPartidoJugador::model()->deleteAll('partido = '.$this->id);
		return true;
        
    }
}