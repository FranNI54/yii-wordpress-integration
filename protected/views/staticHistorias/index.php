<?php
/* @var $this StaticHistoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Static Historiases',
);

$this->menu=array(
	array('label'=>'Create StaticHistorias', 'url'=>array('create')),
	array('label'=>'Manage StaticHistorias', 'url'=>array('admin')),
);
?>

<h1>Static Historiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
