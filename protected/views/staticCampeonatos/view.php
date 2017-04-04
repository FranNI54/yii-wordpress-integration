<?php
/* @var $this StaticCampeonatosController */
/* @var $model StaticCampeonatos */

$this->breadcrumbs=array(
	'Static Campeonatoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StaticCampeonatos', 'url'=>array('index')),
	array('label'=>'Create StaticCampeonatos', 'url'=>array('create')),
	array('label'=>'Update StaticCampeonatos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaticCampeonatos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticCampeonatos', 'url'=>array('admin')),
);
?>

<h1>View StaticCampeonatos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ano',
		'torneo',
		'divison',
		'partidos_jugados',
		'goles_convertidos',
		'gano',
	),
)); ?>
