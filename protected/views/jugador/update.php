<?php
/* @var $this JugadorController */
/* @var $model Jugador */

$this->breadcrumbs=array(
	'Jugadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jugador', 'url'=>array('index')),
	array('label'=>'Create Jugador', 'url'=>array('create')),
	array('label'=>'View Jugador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jugador', 'url'=>array('admin')),
);
?>

<h1>Update Jugador <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>