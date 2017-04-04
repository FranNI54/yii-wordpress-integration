<?php
/* @var $this StaticJugadorController */
/* @var $model StaticJugador */

$this->breadcrumbs=array(
	'Static Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StaticJugador', 'url'=>array('index')),
	array('label'=>'Manage StaticJugador', 'url'=>array('admin')),
);
?>

<h1>Create StaticJugador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>