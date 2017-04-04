<?php
/* @var $this PartidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partidos',
);

$this->menu=array(
	array('label'=>'Create Partido', 'url'=>array('create')),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>Partidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
