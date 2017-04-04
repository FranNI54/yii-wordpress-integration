<?php
/* @var $this StaticHistoriasController */
/* @var $model StaticHistorias */

$this->breadcrumbs=array(
	'Static Historiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StaticHistorias', 'url'=>array('index')),
	array('label'=>'Create StaticHistorias', 'url'=>array('create')),
	array('label'=>'Update StaticHistorias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaticHistorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticHistorias', 'url'=>array('admin')),
);
?>

<h1>View StaticHistorias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'texto',
	),
)); ?>
