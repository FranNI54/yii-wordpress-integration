<?php
/* @var $this RelPartidoJugadorController */
/* @var $model RelPartidoJugador */

$this->breadcrumbs=array(
	'Rel Partido Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelPartidoJugador', 'url'=>array('index')),
	array('label'=>'Manage RelPartidoJugador', 'url'=>array('admin')),
);
?>

<h1>Create RelPartidoJugador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>