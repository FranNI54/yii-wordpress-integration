<?php
/* @var $this DataDefaultController */
/* @var $model DataDefault */

$this->breadcrumbs=array(
	'Data Defaults'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataDefault', 'url'=>array('index')),
	array('label'=>'Manage DataDefault', 'url'=>array('admin')),
);
?>

<h1>Create DataDefault</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>