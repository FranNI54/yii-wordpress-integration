<?php
/* @var $this DataExtraController */
/* @var $model DataExtra */

$this->breadcrumbs=array(
	'Data Extras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DataExtra', 'url'=>array('index')),
	array('label'=>'Create DataExtra', 'url'=>array('create')),
	array('label'=>'Update DataExtra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataExtra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataExtra', 'url'=>array('admin')),
);
?>

<h1>View DataExtra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'model',
		'modelId',
		'titulo',
		'texto',
	),
)); ?>
