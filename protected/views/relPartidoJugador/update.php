<?php
/* @var $this RelPartidoJugadorController */
/* @var $model RelPartidoJugador */

$this->breadcrumbs=array(
	'Rel Partido Jugadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelPartidoJugador', 'url'=>array('index')),
	array('label'=>'Create RelPartidoJugador', 'url'=>array('create')),
	array('label'=>'View RelPartidoJugador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelPartidoJugador', 'url'=>array('admin')),
);
?>

<h1>Update RelPartidoJugador <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>