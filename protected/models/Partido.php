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
			array('liga, fecha', 'required'),
			array('liga', 'length', 'max'=>300),
			/*array('categoria', 'numerical', 'integerOnly'=>true),*/
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, liga,, fecha, comentario', 'safe', 'on'=>'search'),
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
		$nombreClase=get_class($this);
		return array(
			'liga_data'=>array(self::HAS_ONE ,"Campeonato",array('id'=>'liga') ),
			'clubes'=>array(self::HAS_MANY ,"RelPartidoClub",array('partido'=>'id'), "with"=>array("club_data","goles","plantel") ),
			'data'=>array(self::HAS_MANY ,"DataExtra",array('modelId'=>'id'),"condition"=>"model = '$nombreClase'", ),
			'imagenes'=>array(self::HAS_MANY ,"RelImagen",array('modelId'=>'id'),"condition"=>"model = '$nombreClase'", ),
		);
	}

	protected function beforeDelete()
    {
		//debería recorrer ambas rel de equipo, borrar los jugadores y las rel
		foreach(RelPartidoClub::model()->findAll("partido = ".$this->id) as $rel){
			$rel->delete();
		}
		foreach(RelImagen::model()->findAll('modelId = '.$this->id." and model='Partido'") as $rel){
			$rel->delete();
		}
		foreach(DataExtra::model()->findAll('modelId = '.$this->id." and model='Partido' ") as $data){
			$data->delete();
		}
		foreach(DataDefault::model()->findAll("model='Partido' ") as $data){
			$data->delete();
		}
		return true;
        
    }
	
	protected function afterSave(){
		if($this->isNewRecord){
		 $modelClass= get_class($model);
		$defaults= DataDefault::model()->findAllByAttributes(array("model"=>$modelClass));

		 foreach($defaults as $data){
			
			 $auxData= new DataExtra();
			 $auxData->model= $modelClass;
			 $auxData->modelId=$this->id;
			 $auxData->titulo= $data->titulo;
			 $auxData->texto= $data->texto;
			
			 $auxData->save();
		 }
		}
		parent::afterSave();
		 
	}
	
	public function Contabilizar(){
		$this->clubes;
		$count1= count($this->clubes[0]->goles);
		$count2= count($this->clubes[1]->goles);

		if($count1>$count2){
			$this->clubes[0]->resultado=1;
			$this->clubes[0]->save();
			$this->clubes[1]->resultado=0;
			$this->clubes[1]->save();
		}else if($count1<$count2){
			$this->clubes[0]->resultado=0;
			$this->clubes[0]->save();
			$this->clubes[1]->resultado=1;
			$this->clubes[1]->save();
		}if($count1==$count2){
			$this->clubes[0]->resultado=2;
			$this->clubes[0]->save();
			$this->clubes[1]->resultado=2;
			$this->clubes[1]->save();
		}
	}
}