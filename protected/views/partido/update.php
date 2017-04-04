<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Partido', 'url'=>array('index')),
	array('label'=>'Create Partido', 'url'=>array('create')),
	array('label'=>'View Partido', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>Update Partido <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,"update"=>true)); ?>