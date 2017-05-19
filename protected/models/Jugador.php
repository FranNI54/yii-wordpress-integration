	<?php

/**
 * This is the model class for table "tbl_jugador".
 *
 * The followings are the available columns in table 'tbl_jugador':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $nacimiento
 * @property string $ciudad_natal
 * @property string $puesto
 * @property string $detalle_puesto
 */
class Jugador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jugador the static model class
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
		return 'tbl_jugador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, nacimiento, ciudad_natal, puesto', 'required'),
			array('nombre, apellido, nacimiento, ciudad_natal, detalle_puesto', 'length', 'max'=>300),
			array('puesto', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, apellido, nacimiento, ciudad_natal, puesto, detalle_puesto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		$nombreClase=get_class($this);
		return array(
			
			'imagenes'=>array(self::HAS_MANY ,"RelImagen",array('modelId'=>'id'),"condition"=>"model = '$nombreClase'", ),
			'avatar'=>array(self::HAS_MANY ,"RelImagen","modelId","condition"=>"avatar.destacada=1 and avatar.model = '$nombreClase' " ),
			'data'=>array(self::HAS_MANY ,"DataExtra",array('modelId'=>'id'),"condition"=>"model = '$nombreClase'", ),
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
			'nacimiento' => 'Nacimiento',
			'ciudad_natal' => 'Ciudad Natal',
			'puesto' => 'Puesto',
			'detalle_puesto' => 'Detalle Puesto',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('nacimiento',$this->nacimiento,true);
		$criteria->compare('ciudad_natal',$this->ciudad_natal,true);
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('detalle_puesto',$this->detalle_puesto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	private $_partidos=null;
	
	public function partidos(){
		
		if(!isset($this->_partidos)){
			$queryPartidos=RelPartidoJugador::model()->with(array('partido_data',"campeonato"))->findAllByAttributes(array("jugador"=>$this->id));
			$auxPartidos= array();
			foreach($queryPartidos as $partido){
				$auxObj= $partido->partido_data;
				if(isset($partido["campeonato"])){
				$auxObj->campeonato=$partido["campeonato"];
				}
				$auxObj["rel"]= $partido->id;
				array_push($auxPartidos,$auxObj);
				
			}
			$this->_partidos= $auxPartidos;
		}
		return $this->_partidos;
		
	}
	
	public function campeonatos(){
		//return RelPartidoJugador::model()->with(array('partido_data'=>array("select"=>'liga',"distinct"=>true,"ORDER"=>'id DESC'),"campeonato"))->findAllByAttributes(array("jugador"=>1));
		
		//return Campeonato::model()->findAll(array("distinct"=>true));
		$campeonatos= array();
		foreach($this->partidos() as $partido){
			$campeonatos[$partido["campeonato"]["torneo"]]=1;
		}
		return $campeonatos;
	}
	public function behaviors()
	{
		return array(
			// Classname => path to Class
			'ActiveRecordLogableBehavior'=>
				'application.behaviors.ActiveRecordLogableBehavior',
		);
	}
	
	public function beforeDelete()
    {
		foreach(RelPlantelJugador::model()->findAll('jugador = '.$this->id) as $rel){
			$rel->delete();
		}
		foreach(RelImagen::model()->findAll('modelId = '.$this->id." and model='Jugador'") as $rel){
			$rel->delete();
		}
		foreach(DataExtra::model()->findAll('modelId = '.$this->id." and model='Jugador' ") as $data){
			$data->delete();
		}
		foreach(DataDefault::model()->findAll("model='Jugador' ") as $data){
			$data->delete();
		}
		foreach(RelPartidoJugador::model()->findAll('jugador = '.$this->id) as $rel){
			$rel->delete();
		}
		
		foreach(Gol::model()->findAll('jugador = '.$this->id) as $gol){
			$gol->delete();
		}
		
		return true;
    }
}