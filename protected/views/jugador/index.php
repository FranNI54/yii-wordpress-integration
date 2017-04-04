<?php
/* @var $this JugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jugadors',
);

$this->menu=array(
	array('label'=>'Create Jugador', 'url'=>array('create')),
	array('label'=>'Manage Jugador', 'url'=>array('admin')),
);
?>

<h1>Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
