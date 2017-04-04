<?php
/* @var $this DataClubController */
/* @var $model DataClub */

$this->breadcrumbs=array(
	'Data Clubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataClub', 'url'=>array('index')),
	array('label'=>'Manage DataClub', 'url'=>array('admin')),
);
?>

<h1>Create DataClub</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>