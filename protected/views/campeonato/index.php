<?php
/* @var $this CampeonatoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Campeonatos',
);

$this->menu=array(
	array('label'=>'Create Campeonato', 'url'=>array('create')),
	array('label'=>'Manage Campeonato', 'url'=>array('admin')),
);
?>

<h1>Campeonatos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
