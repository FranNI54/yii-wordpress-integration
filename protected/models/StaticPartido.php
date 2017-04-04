<?php

/**
 * This is the model class for table "static_partido".
 *
 * The followings are the available columns in table 'static_partido':
 * @property integer $id
 * @property string $liga
 * @property string $fec
 * @property string $dia
 * @property string $cond
 * @property string $rival
 * @property string $resultado
 * @property integer $goles
 * @property string $goleadores
 * @property string $gano
 * @property string $comentario
 */
class StaticPartido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'static_partido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('liga, fec, dia, cond, rival, resultado, goles, goleadores, gano, comentario', 'required'),
			array('goles', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, liga, fec, dia, cond, rival, resultado, goles, goleadores, gano, comentario', 'safe', 'on'=>'search'),
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
			'liga' => 'Liga',
			'fec' => 'Fec',
			'dia' => 'Dia',
			'cond' => 'Cond',
			'rival' => 'Rival',
			'resultado' => 'Resultado',
			'goles' => 'Goles',
			'goleadores' => 'Goleadores',
			'gano' => 'Gano',
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
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('cond',$this->cond,true);
		$criteria->compare('rival',$this->rival,true);
		$criteria->compare('resultado',$this->resultado,true);
		$criteria->compare('goles',$this->goles);
		$criteria->compare('goleadores',$this->goleadores,true);
		$criteria->compare('gano',$this->gano,true);
		$criteria->compare('comentario',$this->comentario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StaticPartido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
