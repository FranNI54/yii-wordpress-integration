<?php
/* @var $this PlantelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plantels',
);

$this->menu=array(
	array('label'=>'Create Plantel', 'url'=>array('create')),
	array('label'=>'Manage Plantel', 'url'=>array('admin')),
);
?>

<h1>Plantels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
