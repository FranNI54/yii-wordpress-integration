<?php
/* @var $this StaticCampeonatosController */
/* @var $model StaticCampeonatos */

$this->breadcrumbs=array(
	'Static Campeonatoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StaticCampeonatos', 'url'=>array('index')),
	array('label'=>'Manage StaticCampeonatos', 'url'=>array('admin')),
);
?>

<h1>Create StaticCampeonatos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>