<?php
/* @var $this DataJugadorController */
/* @var $model DataJugador */

$this->breadcrumbs=array(
	'Data Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataJugador', 'url'=>array('index')),
	array('label'=>'Manage DataJugador', 'url'=>array('admin')),
);
?>

<h1>Create DataJugador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>