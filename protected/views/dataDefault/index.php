<?php
/* @var $this DataDefaultController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Defaults',
);

$this->menu=array(
	array('label'=>'Create DataDefault', 'url'=>array('create')),
	array('label'=>'Manage DataDefault', 'url'=>array('admin')),
);
?>

<h1>Data Defaults</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
