<?php
/* @var $this StaticJugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Static Jugadors',
);

$this->menu=array(
	array('label'=>'Create StaticJugador', 'url'=>array('create')),
	array('label'=>'Manage StaticJugador', 'url'=>array('admin')),
);
?>

<h1>Static Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
