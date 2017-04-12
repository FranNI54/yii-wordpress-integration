<?php
/* @var $this DataDefaultController */
/* @var $model DataDefault */

$this->breadcrumbs=array(
	'Data Defaults'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataDefault', 'url'=>array('index')),
	array('label'=>'Create DataDefault', 'url'=>array('create')),
	array('label'=>'View DataDefault', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataDefault', 'url'=>array('admin')),
);
?>

<h1>Update DataDefault <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>