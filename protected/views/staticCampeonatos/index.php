<?php
/* @var $this StaticCampeonatosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Static Campeonatoses',
);

$this->menu=array(
	array('label'=>'Create StaticCampeonatos', 'url'=>array('create')),
	array('label'=>'Manage StaticCampeonatos', 'url'=>array('admin')),
);
?>

<h1>Static Campeonatoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
