<?php
/* @var $this DataExtraController */
/* @var $model DataExtra */

$this->breadcrumbs=array(
	'Data Extras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataExtra', 'url'=>array('index')),
	array('label'=>'Create DataExtra', 'url'=>array('create')),
	array('label'=>'View DataExtra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataExtra', 'url'=>array('admin')),
);
?>

<h1>Update DataExtra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>