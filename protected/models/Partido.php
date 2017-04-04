<?php

/**
 * This is the model class for table "tbl_partido".
 *
 * The followings are the available columns in table 'tbl_partido':
 * @property integer $id
 * @property string $liga
 * @property string $fec
 * @property string $fecha
 * @property string $condicion
 * @property string $rival
 * @property string $resultado
 * @property integer $convertidos
 * @property integer $victoria
 * @property string $comentario
 */
class Partido extends CActiveRecord
{
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
			array('liga, fec, fecha, condicion, rival, resultado, convertidos, victoria', 'required'),
			array('convertidos, victoria', 'numerical', 'integerOnly'=>true),
			array('liga, fec', 'length', 'max'=>300),
			array('condicion, rival, resultado', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, liga, fec, fecha, condicion, rival, resultado, convertidos, victoria, comentario', 'safe', 'on'=>'search'),
		);
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
			'goles'=>array(self::HAS_MANY ,"Gol",array('partido'=>'id'),"with"=>"jugador_data" ),
			
			
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
			'condicion' => 'Condicion',
			'rival' => 'Rival',
			'resultado' => 'Resultado',
			'convertidos' => 'Convertidos',
			'victoria' => 'Victoria',
			'comentario' => 'Comentario',
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
		$criteria->compare('liga',$this->liga,true);
		$criteria->compare('fec',$this->fec,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('condicion',$this->condicion,true);
		$criteria->compare('rival',$this->rival,true);
		$criteria->compare('resultado',$this->resultado,true);
		$criteria->compare('convertidos',$this->convertidos);
		$criteria->compare('victoria',$this->victoria);
		$criteria->compare('comentario',$this->comentario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Partido the static model class
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
		RelPartidoJugador::model()->deleteAll('partido = '.$this->id);
		return true;
        
    }
}
