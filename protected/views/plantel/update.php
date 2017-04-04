<?php
/* @var $this PlantelController */
/* @var $model Plantel */

$this->breadcrumbs=array(
	'Plantels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plantel', 'url'=>array('index')),
	array('label'=>'Create Plantel', 'url'=>array('create')),
	array('label'=>'View Plantel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Plantel', 'url'=>array('admin')),
);
?>

<h1>Update Plantel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>