<?php
/* @var $this StaticJugadorController */
/* @var $model StaticJugador */

$this->breadcrumbs=array(
	'Static Jugadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaticJugador', 'url'=>array('index')),
	array('label'=>'Create StaticJugador', 'url'=>array('create')),
	array('label'=>'View StaticJugador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StaticJugador', 'url'=>array('admin')),
);
?>

<h1>Update StaticJugador <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>