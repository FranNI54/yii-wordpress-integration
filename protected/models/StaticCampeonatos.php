<?php

/**
 * This is the model class for table "static_campeonatos".
 *
 * The followings are the available columns in table 'static_campeonatos':
 * @property integer $id
 * @property string $ano
 * @property string $torneo
 * @property string $divison
 * @property string $partidos_jugados
 * @property string $goles_convertidos
 * @property string $gano
 */
class StaticCampeonatos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'static_campeonatos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, torneo, divison, partidos_jugados, goles_convertidos, gano', 'required'),
			array('gano', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ano, torneo, divison, partidos_jugados, goles_convertidos, gano', 'safe', 'on'=>'search'),
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
			'ano' => 'Ano',
			'torneo' => 'Torneo',
			'divison' => 'Divison',
			'partidos_jugados' => 'Partidos Jugados',
			'goles_convertidos' => 'Goles Convertidos',
			'gano' => 'Gano',
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
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('torneo',$this->torneo,true);
		$criteria->compare('divison',$this->divison,true);
		$criteria->compare('partidos_jugados',$this->partidos_jugados,true);
		$criteria->compare('goles_convertidos',$this->goles_convertidos,true);
		$criteria->compare('gano',$this->gano,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StaticCampeonatos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
