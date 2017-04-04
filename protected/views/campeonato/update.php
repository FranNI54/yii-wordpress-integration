<?php
/* @var $this CampeonatoController */
/* @var $model Campeonato */

$this->breadcrumbs=array(
	'Campeonatos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Campeonato', 'url'=>array('index')),
	array('label'=>'Create Campeonato', 'url'=>array('create')),
	array('label'=>'View Campeonato', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Campeonato', 'url'=>array('admin')),
);
?>

<h1>Update Campeonato <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>