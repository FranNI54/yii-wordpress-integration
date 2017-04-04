<?php
/* @var $this CampeonatoController */
/* @var $model Campeonato */

$this->breadcrumbs=array(
	'Campeonatos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Campeonato', 'url'=>array('index')),
	array('label'=>'Manage Campeonato', 'url'=>array('admin')),
);
?>

<h1>Create Campeonato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>