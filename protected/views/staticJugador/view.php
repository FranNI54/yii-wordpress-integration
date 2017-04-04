<?php
/* @var $this StaticJugadorController */
/* @var $model StaticJugador */

$this->breadcrumbs=array(
	'Static Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StaticJugador', 'url'=>array('index')),
	array('label'=>'Create StaticJugador', 'url'=>array('create')),
	array('label'=>'Update StaticJugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaticJugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticJugador', 'url'=>array('admin')),
);
?>

<h1>View StaticJugador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'fecha_nacimiento',
		'ciudad_natal',
		'debut',
		'ultimo_partido',
		'equipos',
		'puesto',
		'detalle_puesto',
	),
)); ?>
