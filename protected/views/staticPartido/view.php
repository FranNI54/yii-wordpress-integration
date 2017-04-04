<?php
/* @var $this StaticPartidoController */
/* @var $model StaticPartido */

$this->breadcrumbs=array(
	'Static Partidos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StaticPartido', 'url'=>array('index')),
	array('label'=>'Create StaticPartido', 'url'=>array('create')),
	array('label'=>'Update StaticPartido', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaticPartido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticPartido', 'url'=>array('admin')),
);
?>

<h1>View StaticPartido #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'liga',
		'fec',
		'dia',
		'cond',
		'rival',
		'resultado',
		'goles',
		'goleadores',
		'gano',
		'comentario',
	),
)); ?>
