<?php
/* @var $this RelPartidoJugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Partido Jugadors',
);

$this->menu=array(
	array('label'=>'Create RelPartidoJugador', 'url'=>array('create')),
	array('label'=>'Manage RelPartidoJugador', 'url'=>array('admin')),
);
?>

<h1>Rel Partido Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
