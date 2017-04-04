<?php
/* @var $this RelPartidoJugadorController */
/* @var $model RelPartidoJugador */

$this->breadcrumbs=array(
	'Rel Partido Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelPartidoJugador', 'url'=>array('index')),
	array('label'=>'Create RelPartidoJugador', 'url'=>array('create')),
	array('label'=>'Update RelPartidoJugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelPartidoJugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelPartidoJugador', 'url'=>array('admin')),
);
?>

<h1>View RelPartidoJugador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jugador',
		'partido',
		'campo',
		'detalle',
	),
)); ?>
asdas
<?php //echo $model->jugador_data["nombre"]; 
?>