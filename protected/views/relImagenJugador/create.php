<?php
/* @var $this RelImagenJugadorController */
/* @var $model RelImagenJugador */

$this->breadcrumbs=array(
	'Rel Imagen Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelImagenJugador', 'url'=>array('index')),
	array('label'=>'Manage RelImagenJugador', 'url'=>array('admin')),
);
?>

<h1>Cargar Imagenes de <?php 
if(isset($model->jugador)){
	$jugador= Jugador::model()->findByPk($model->jugador);
	echo $jugador->nombre." ".$jugador->apellido;
}
?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>