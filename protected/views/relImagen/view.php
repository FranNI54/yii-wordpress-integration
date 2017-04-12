<?php
/* @var $this RelImagenController */
/* @var $model RelImagen */

$this->breadcrumbs=array(
	'Rel Imagens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelImagen', 'url'=>array('index')),
	array('label'=>'Create RelImagen', 'url'=>array('create')),
	array('label'=>'Update RelImagen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelImagen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelImagen', 'url'=>array('admin')),
);
?>

<h1>View RelImagen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'model',
		'modelId',
		'imagen',
		'destacada',
	),
)); ?>
