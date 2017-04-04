<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Partido', 'url'=>array('index')),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>Create Partido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>