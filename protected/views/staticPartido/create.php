<?php
/* @var $this StaticPartidoController */
/* @var $model StaticPartido */

$this->breadcrumbs=array(
	'Static Partidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StaticPartido', 'url'=>array('index')),
	array('label'=>'Manage StaticPartido', 'url'=>array('admin')),
);
?>

<h1>Create StaticPartido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>