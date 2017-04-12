<?php

class RelImagenJugadorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
			'postOnly + upload', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update',"upload"),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RelImagenJugador;
		if(isset($_POST["jugador"])){
			$model->jugador=$_POST["jugador"];
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RelImagenJugador']))
		{
			$model->attributes=$_POST['RelImagenJugador'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	/*public function actionDestacada($modelClass,$id,$imagen){
		$auxRel= RelImagen::model()->find("model=$modelClass and modelId=$id and destacada=1");
		if(isset($auxRel)){
			$auxRel->destacada=0;
			$auxRel->save();
		}
		$auxRel= RelImagen::model()->findByPk($imagen);
		$auxRel->destacada=1;
		$auxRel->save();
		echo "1";
	}*/

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RelImagenJugador']))
		{
			$model->attributes=$_POST['RelImagenJugador'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		/*$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));*/
		$model=$this->loadModel($id);
		$jugador=$model->jugador;
		$model->delete();
		$this->redirect(array("jugador/view","id"=>$jugador));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RelImagenJugador');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RelImagenJugador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RelImagenJugador']))
			$model->attributes=$_GET['RelImagenJugador'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RelImagenJugador the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RelImagenJugador::model()->with("imagen_data")->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RelImagenJugador $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rel-imagen-jugador-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionUpload(){


			$jugador=$_POST["jugador"];


			if($jugador==null) exit("Error - No hay jugador seleccionado");
			
			


			if (isset($_FILES['file'])) {
				
				$imagen= new Imagen();
				$imagen->url="notset";
				$imagen->save();

				$targetPath = "uploads/jugador/";
				
				
				
				$nombre=$jugador."-".$imagen->id;
				//echo $nombre;
				

					$formato="";
					if(strpos($_FILES['file']['name'],".png")>0){
						$formato= ".png";
					}
					if(strpos($_FILES['file']['name'],".jpg")>0){
						$formato= ".jpg";
					}
					if(strpos($_FILES['file']['name'],".jpeg")>0){
						$formato= ".jpeg";
					}
					$targetFile =  $targetPath.$nombre.$formato;
				

				move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
				//echo $targetFile;
				
				$imagen->url=$targetFile;
				$imagen->save();
				$rel= new RelImagenJugador();
				$rel->imagen= $imagen->id;
				$rel->jugador= $jugador;
				$rel->avatar= 0;
				$rel->save();
				
				echo $nombre.$formato;
			}else{
				echo "0";
			}

	}
}
