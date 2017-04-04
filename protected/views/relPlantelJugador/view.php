<?php
/* @var $this RelPlantelJugadorController */
/* @var $model RelPlantelJugador */

$this->breadcrumbs=array(
	'Rel Plantel Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelPlantelJugador', 'url'=>array('index')),
	array('label'=>'Create RelPlantelJugador', 'url'=>array('create')),
	array('label'=>'Update RelPlantelJugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelPlantelJugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelPlantelJugador', 'url'=>array('admin')),
);
?>

<h1>View RelPlantelJugador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'plantel',
		'jugador',
		'campo',
		'detalle',
	),
)); ?>
