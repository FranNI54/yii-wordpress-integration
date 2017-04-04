<?php

/**
 * This is the model class for table "static_jugador".
 *
 * The followings are the available columns in table 'static_jugador':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_nacimiento
 * @property string $ciudad_natal
 * @property string $debut
 * @property string $ultimo_partido
 * @property string $equipos
 * @property string $puesto
 * @property string $detalle_puesto
 */
class StaticJugador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'static_jugador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, fecha_nacimiento, ciudad_natal, debut, ultimo_partido, equipos, puesto, detalle_puesto', 'required'),
			array('nombre, apellido, fecha_nacimiento, ciudad_natal, debut, ultimo_partido, puesto, detalle_puesto', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, fecha_nacimiento, ciudad_natal, debut, ultimo_partido, equipos, puesto, detalle_puesto', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'ciudad_natal' => 'Ciudad Natal',
			'debut' => 'Debut',
			'ultimo_partido' => 'Ultimo Partido',
			'equipos' => 'Equipos',
			'puesto' => 'Puesto',
			'detalle_puesto' => 'Detalle Puesto',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('ciudad_natal',$this->ciudad_natal,true);
		$criteria->compare('debut',$this->debut,true);
		$criteria->compare('ultimo_partido',$this->ultimo_partido,true);
		$criteria->compare('equipos',$this->equipos,true);
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('detalle_puesto',$this->detalle_puesto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StaticJugador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
