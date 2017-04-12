<?php

/**
 * This is the model class for table "tbl_rel_imagen_club".
 *
 * The followings are the available columns in table 'tbl_rel_imagen_club':
 * @property integer $id
 * @property integer $imagen
 * @property integer $club
 * @property integer $avatar
 */
class RelImagenClub extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RelImagenClub the static model class
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
		return 'tbl_rel_imagen_club';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen, club, avatar', 'required'),
			array('imagen, club, avatar', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, imagen, club, avatar', 'safe', 'on'=>'search'),
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
			'imagen_data'=>array(self::HAS_ONE ,"Imagen",array('id'=>'imagen')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'imagen' => 'Imagen',
			'club' => 'Club',
			'avatar' => 'Avatar',
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
		$criteria->compare('imagen',$this->imagen);
		$criteria->compare('club',$this->club);
		$criteria->compare('avatar',$this->avatar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}