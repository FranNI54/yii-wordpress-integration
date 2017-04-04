<?php
/* @var $this StaticHistoriasController */
/* @var $model StaticHistorias */

$this->breadcrumbs=array(
	'Static Historiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaticHistorias', 'url'=>array('index')),
	array('label'=>'Create StaticHistorias', 'url'=>array('create')),
	array('label'=>'View StaticHistorias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StaticHistorias', 'url'=>array('admin')),
);
?>

<h1>Update StaticHistorias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>