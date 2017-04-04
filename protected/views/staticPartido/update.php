<?php
/* @var $this StaticPartidoController */
/* @var $model StaticPartido */

$this->breadcrumbs=array(
	'Static Partidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaticPartido', 'url'=>array('index')),
	array('label'=>'Create StaticPartido', 'url'=>array('create')),
	array('label'=>'View StaticPartido', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StaticPartido', 'url'=>array('admin')),
);
?>

<h1>Update StaticPartido <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>