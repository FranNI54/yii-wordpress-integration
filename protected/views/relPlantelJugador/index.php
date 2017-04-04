<?php
/* @var $this RelPlantelJugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Plantel Jugadors',
);

$this->menu=array(
	array('label'=>'Create RelPlantelJugador', 'url'=>array('create')),
	array('label'=>'Manage RelPlantelJugador', 'url'=>array('admin')),
);
?>

<h1>Rel Plantel Jugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
