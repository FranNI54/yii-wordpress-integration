<?php
/* @var $this StaticHistoriasController */
/* @var $model StaticHistorias */

$this->breadcrumbs=array(
	'Static Historiases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StaticHistorias', 'url'=>array('index')),
	array('label'=>'Manage StaticHistorias', 'url'=>array('admin')),
);
?>

<h1>Create StaticHistorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>