<?php
/* @var $this DataClubController */
/* @var $model DataClub */

$this->breadcrumbs=array(
	'Data Clubs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataClub', 'url'=>array('index')),
	array('label'=>'Create DataClub', 'url'=>array('create')),
	array('label'=>'View DataClub', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataClub', 'url'=>array('admin')),
);
?>

<h1>Update DataClub <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>