<?php
/* @var $this JugadorController */
/* @var $model Jugador */

$this->breadcrumbs=array(
	'Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jugador', 'url'=>array('index')),
	array('label'=>'Manage Jugador', 'url'=>array('admin')),
);
?>

<h1>Create Jugador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>