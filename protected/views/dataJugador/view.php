<?php
/* @var $this DataJugadorController */
/* @var $model DataJugador */

$this->breadcrumbs=array(
	'Data Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DataJugador', 'url'=>array('index')),
	array('label'=>'Create DataJugador', 'url'=>array('create')),
	array('label'=>'Update DataJugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataJugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataJugador', 'url'=>array('admin')),
);
?>

<h1>View DataJugador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jugador',
		'nombre',
		'data',
	),
)); ?>
