<?php
/* @var $this RelImagenJugadorController */
/* @var $model RelImagenJugador */

$this->breadcrumbs=array(
	'Rel Imagen Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelImagenJugador', 'url'=>array('index')),
	array('label'=>'Create RelImagenJugador', 'url'=>array('create')),
	array('label'=>'Update RelImagenJugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelImagenJugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelImagenJugador', 'url'=>array('admin')),
);
?>

<h1>View RelImagenJugador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imagen',
		'jugador',
		'avatar',
	),
)); ?>
