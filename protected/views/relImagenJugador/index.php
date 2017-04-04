<?php
/* @var $this RelImagenJugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Imagen Jugadors',
);

$this->menu=array(
	array('label'=>'Create RelImagenJugador', 'url'=>array('create')),
	array('label'=>'Manage RelImagenJugador', 'url'=>array('admin')),
);
?>

<h1>Rel Imagen Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
