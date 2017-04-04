<?php
/* @var $this StaticPartidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Static Partidos',
);

$this->menu=array(
	array('label'=>'Create StaticPartido', 'url'=>array('create')),
	array('label'=>'Manage StaticPartido', 'url'=>array('admin')),
);
?>

<h1>Static Partidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
