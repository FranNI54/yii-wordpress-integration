<?php
/* @var $this RelImagenJugadorController */
/* @var $model RelImagenJugador */

$this->breadcrumbs=array(
	'Rel Imagen Jugadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelImagenJugador', 'url'=>array('index')),
	array('label'=>'Create RelImagenJugador', 'url'=>array('create')),
	array('label'=>'View RelImagenJugador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelImagenJugador', 'url'=>array('admin')),
);
?>

<h1>Update RelImagenJugador <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>