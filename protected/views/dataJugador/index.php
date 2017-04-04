<?php
/* @var $this DataJugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Jugadors',
);

$this->menu=array(
	array('label'=>'Create DataJugador', 'url'=>array('create')),
	array('label'=>'Manage DataJugador', 'url'=>array('admin')),
);
?>

<h1>Data Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
