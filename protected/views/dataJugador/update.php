<?php
/* @var $this DataJugadorController */
/* @var $model DataJugador */

$this->breadcrumbs=array(
	'Data Jugadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataJugador', 'url'=>array('index')),
	array('label'=>'Create DataJugador', 'url'=>array('create')),
	array('label'=>'View DataJugador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataJugador', 'url'=>array('admin')),
);
?>

<h1>Update DataJugador <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>