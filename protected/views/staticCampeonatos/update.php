<?php
/* @var $this StaticCampeonatosController */
/* @var $model StaticCampeonatos */

$this->breadcrumbs=array(
	'Static Campeonatoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaticCampeonatos', 'url'=>array('index')),
	array('label'=>'Create StaticCampeonatos', 'url'=>array('create')),
	array('label'=>'View StaticCampeonatos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StaticCampeonatos', 'url'=>array('admin')),
);
?>

<h1>Update StaticCampeonatos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>