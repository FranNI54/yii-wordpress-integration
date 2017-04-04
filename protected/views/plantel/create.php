<?php
/* @var $this PlantelController */
/* @var $model Plantel */

$this->breadcrumbs=array(
	'Plantels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Plantel', 'url'=>array('index')),
	array('label'=>'Manage Plantel', 'url'=>array('admin')),
);
?>

<h1>Create Plantel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>