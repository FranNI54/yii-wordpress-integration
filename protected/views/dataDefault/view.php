<?php
/* @var $this DataDefaultController */
/* @var $model DataDefault */

$this->breadcrumbs=array(
	'Data Defaults'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DataDefault', 'url'=>array('index')),
	array('label'=>'Create DataDefault', 'url'=>array('create')),
	array('label'=>'Update DataDefault', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataDefault', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataDefault', 'url'=>array('admin')),
);
?>

<h1>View DataDefault #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'model',
		'titulo',
		'texto',
	),
)); ?>
